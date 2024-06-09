<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\RoomVacate;
use App\Models\Student;
use App\Models\Department;
use App\Models\Course;
use App\Models\Bed;
class HostelVacateOfficeController extends Controller
{
    public function showRequests() {
        $admin = Auth::guard('admins')->user();
        if($admin->access === 'mens') {
            $vacates = RoomVacate::with('student.bed.room.block.hostel')->where([
                ['office_status', 'Pending'],
                ['hostel_id', '1']
            ])->get();
            //dd($vacates);
            return view('admins.office.vacate_req', compact('admin', 'vacates'));
        } else {
            $vacates = RoomVacate::with('student.bed.room.block.hostel')->where([
                ['office_status', 'Pending'],
                ['hostel_id', '2']
            ])->get();
            //dd($vacates);
            return view('admins.office.vacate_req', compact('admin', 'vacates'));
        }
        
    }

    public function vacateAction($id) {
        $admin = Auth::guard('admins')->user();
        $vacate = RoomVacate::with('student.bed.room.block.hostel')->findOrFail($id);
        // $dept = Student::with('course.department')->findOrFail($vacate->student_id);
        // dd($dept);
        return view('admins.office.vacate_req_action', compact('admin', 'vacate'));
    }

    public function approveVacate(Request $request) {

        $admin = Auth::guard('admins')->user();
        
        $data = $request->validate([
            'id' => 'required',
        ]);
        $vacate = RoomVacate::findOrFail($data['id']);
        $student = Student::findOrFail($vacate->student_id);
        $bed = Bed::findOrFail($student->bed_id);

        $vacate->office_status = 'Success';
        $vacate->save();
        $student->bed_id = Null;
        $student->save();
        $bed->student_id = Null;
        $bed->save();

        return redirect()->back()->with('message', 'Approved Vacating and deallocated room');
    }
}

