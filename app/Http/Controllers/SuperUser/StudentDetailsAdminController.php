<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Department;
use App\Models\Course;
use App\Models\Student;
use App\Models\Block;
use Illuminate\Http\Request;

class StudentDetailsAdminController extends Controller
{
    public function filterStudents() {
        
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.students_filter', compact('admin'));
    }
    
    public function getBlocks($hostelId)
    {
        if ($hostelId === 'all') {
            return response()->json([]);
        }

        $blocks = Block::where('hostel_id', $hostelId)->get();
        return response()->json($blocks);
    }

    public function getStudents(Request $request)
    {
        $blockIds = $request->input('blocks');


        if (in_array('all', $blockIds)){
            $students = Student::with(['bed.room.block.hostel'])->get();
        } else {
            $students = Student::whereHas('bed.room.block', function($query) use ($blockIds) {
                $query->whereIn('block_id', $blockIds);
            })->with(['bed.room.block.hostel'])->get();
        }
        return response()->json($students);
    }


    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.student_list_card', compact('admin'));
    }


    public function showAllStudentDetails() {
        $admin = Auth::guard('admins')->user();
        $students = Student::orderBy('adm_no')->get();
        return view('admins.superUser.student_list', compact('admin', 'students'));
    }
    public function showProfileDetails($id)
    {
        // Get the authenticated admin user
        $admin = Auth::guard('admins')->user();
        $student = Student::findOrFail($id);
        // Find the course related to the student
        $course = Course::findOrFail($student->course);
         // Find the department related to the course
        $department = Department::where('department_id', $course->department_id)->first();


        // Retrieve the course name and department name
        $courseName = $course->course_name;
        $departmentName = $department->department_name;

        // Return the view with the retrieved data
        return view('admins.superUser.student_detail', compact('admin', 'student', 'courseName', 'departmentName'));
    }

    public function showDetails() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.student_detail', compact('admin'));
    }
}
