<?php

namespace App\Http\Controllers\Hod;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\RoomAllocation;
use App\Models\Department;
use Illuminate\Http\Request;

class HostelAdmissionHodController extends Controller
{
    public function showRequests() {

        $admin = Auth::guard('admins')->user();
        
        $department = Department::where('hod', $admin->admin_id)->first();
        $roomReq = RoomAllocation::with('student')->where([
            ['department_id', '=', $department->department_id],
            ['dep_verification_status', '=', 'Pending']
        ])->get();

        return view('admins.hod.allocation_req', compact('admin', 'roomReq'));
    }

    public function admissionAction($id) {

        $admin = Auth::guard('admins')->user();
        $roomReq = RoomAllocation::with('student')->findOrFail($id);
        return view('admins.hod.allocation_req_action', compact('admin', 'roomReq'));
    }

    public function admissionApprove(Request $request) {

        $admin = Auth::guard('admins')->user();
        $data = $request->validate([

            'status' => 'required|string',
            'requestId' => 'required|string',
        ]);
        $roomReq = RoomAllocation::findOrFail($data['requestId']);
        $roomReq->dep_verification_status = $data['status'];
        $roomReq->save();

        return redirect('hod/allocation/request');
    }
}
