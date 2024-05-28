<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\RoomAllocation;
use Illuminate\Http\Request;

class HostelAdmissionWardenController extends Controller
{
    public function showRequests() {
        $admin = Auth::guard('admins')->user();

        if($admin->access === 'mens') {
            
            $roomReq = RoomAllocation::with('student')->where([
                ['hostel', '=', 'Mens Hostel'],
                ['warden_verification_status', '=', 'Pending']    
            ])->get();
            
            return view('admins.warden.admission_req', compact('admin', 'roomReq'));
        } else {

            $roomReq = RoomAllocation::with('student')->where('hostel', 'Ladies Hostel')->get();
            return view('admins.warden.admission_req', compact('admin', 'roomReq'));
        }
        
    }

    public function admissionAction($id) {
        $admin = Auth::guard('admins')->user();
        $roomReq = RoomAllocation::with('student')->findOrFail($id);
        return view('admins.warden.admission_req_action', compact('admin', 'roomReq'));
    }

    public function admissionApproval(Request $request) {
        $admin = Auth::guard('admins')->user();
        $data = $request->validate([

            'status' => 'required|string',
            'requestId' => 'required|string',
        ]);
        $roomReq = RoomAllocation::findOrFail($data['requestId']);
        $roomReq->warden_verification_status = $data['status'];
        $roomReq->save();

        return redirect('warden/admission/request');
    }
}
