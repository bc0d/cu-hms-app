<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use illuminate\Support\Facades\Auth;
use App\Models\Department;
use App\Models\Course;
use App\Models\User\Student;
use Illuminate\Http\Request;

class WardenStudentDetailsController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.student_list_card', compact('admin'));
    }

    public function showAllStudentDetails() {
        // Get the authenticated admin user
        $admin = Auth::guard('admins')->user();
    
        // Check if the authenticated admin has "mens" access
        if ($admin->access === 'mens') {
            // Fetch all male students
            $students = Student::where('gender', 'male')->get();
            
            // Return the view with the male students and admin data
            return view('admins.warden.student_list', compact('students', 'admin'));
        } 
        elseif ($admin->access === 'womens'){
            $students = Student::where('gender', 'female')->get();
                
                // Return the view with the male students and admin data
                return view('admins.warden.student_list', compact('students', 'admin'));
            } 
    }
    
    public function showStudentProfileDetails($id) {
       

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
        return view('admins.warden.student_detail', compact('admin','student', 'courseName', 'departmentName'));
    }

    public function showDetails() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.student_detail', compact('admin'));
    }
    
}
