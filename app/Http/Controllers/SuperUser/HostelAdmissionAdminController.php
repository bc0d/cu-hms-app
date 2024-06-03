<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\RoomAllocation;

class HostelAdmissionAdminController extends Controller
{
    public function showRequests() {
        $admin = Auth::guard('admins')->user();
        $roomReq = RoomAllocation::with('student')->where([
            ['payment_status', '=', 'Success'],
            ['warden_verification_status', '=', 'Pending']    
        ])->get();
        return view('admins.superUser.admission_req', compact('admin', 'roomReq'));
    }

    public function admissionAction($id) {
        $admin = Auth::guard('admins')->user();
        $roomReq = RoomAllocation::with('student')->findOrFail($id);
        return view('admins.superUser.admission_req_action', compact('admin'));
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

        return redirect()->back()->with('message', 'Approved');
    }
}
