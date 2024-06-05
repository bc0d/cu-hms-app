<?php

namespace App\Http\Controllers\Hod;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\RoomVacate;
use App\Models\Department;

class HostelVacateHodController extends Controller
{
    public function showRequests() {

        $admin = Auth::guard('admins')->user();

        $department = Department::where('hod', $admin->admin_id)->first();
        $vacates = RoomVacate::with('student.department')
        ->whereHas('student', function ($query) use ($department) {
            $query->where('department', $department->department_id);
        })
        ->where([
            ['office_status', 'Success'],
            ['warden_status', 'Success']
        ])->get();
        return view('admins.hod.vacate_req', compact('admin', 'vacates'));
    }

    public function vacateAction($id) {
        $admin = Auth::guard('admins')->user();
        $vacate = RoomVacate::with('student')->findOrFail($id);
        return view('admins.hod.vacate_req_action', compact('admin', 'vacate'));
    }

    public function approveVacate(Request $request) {

        $data = $request->validate([
            'id' => 'required',
        ]);
        $vacate = RoomVacate::with('student')->findOrFail($data['id']);
        $vacate->hod_status = 'Success';
        $vacate->vacate_status = 'Success';
        $vacate->save();

        $student = Student::findOrFail($vacate->student_id);
        $student->status = 'Vacated';
        $student->save();

        return redirect()->back()->with('message', 'Approved vacating request');
    }
}
