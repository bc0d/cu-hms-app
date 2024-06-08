<?php

namespace App\Http\Controllers\Hod;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Department;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use DB;



class StudentDetailsHodController extends Controller
{
    public function showAllStudentDetails()
    {
        $admin = Auth::guard('admins')->user();
        $department = Department::where('hod', $admin->admin_id)->first();
        $students = Student::where('department', $department->department_id)->get();
        return view('admins.hod.students_list', compact('admin','department','students'));
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
        return view('admins.hod.student_detail', compact('admin', 'student', 'courseName', 'departmentName'));
    }
  
}
