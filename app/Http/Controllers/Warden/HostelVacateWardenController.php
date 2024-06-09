<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\RoomVacate;

class HostelVacateWardenController extends Controller
{
    public function showRequests() {
        $admin = Auth::guard('admins')->user();
        if($admin->access === 'mens') {
            $vacates = RoomVacate::with('student')->where([
                ['office_status', 'Success'],
                ['warden_status', 'Pending'],
                ['hostel_id', '1']
            ])->get();
            //dd($vacates);
            return view('admins.warden.vacate_req', compact('admin', 'vacates'));
        } else {
            $vacates = RoomVacate::with('student')->where([
                ['office_status', 'Success'],
                ['warden_status', 'Pending'],
                ['hostel_id', '2']
            ])->get();
            //dd($vacates);
            return view('admins.warden.vacate_req', compact('admin', 'vacates'));
        }
    }

    public function vacateAction($id) {
        $admin = Auth::guard('admins')->user();
        $vacate = RoomVacate::with('student')->findOrFail($id);
        return view('admins.warden.vacate_req_action', compact('admin', 'vacate'));
    }

    public function approveVacating(Request $request) {

        $admin = Auth::guard('admins')->user();
        
        $data = $request->validate([
            'id' => 'required',
        ]);
        $vacate = RoomVacate::findOrFail($data['id']);
        $vacate->warden_status = 'Success';
        $vacate->save();

        return redirect()->back()->with('message', 'Approved Vacating and deallocated room');
    }
}
