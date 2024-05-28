<?php

namespace App\Http\Controllers\Registrar;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Department;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentDetailsRegistrarController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.student_list_card', compact('admin'));
    }

    public function showAllStudentDetails() {
        $admin = Auth::guard('admins')->user();
        $students = Student::orderBy('adm_no')->get();
        return view('admins.registrar.student_list', compact('admin', 'students'));
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
        return view('admins.registrar.student_detail', compact('admin','student', 'courseName', 'departmentName'));
    }


    public function showDetails() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.student_detail', compact('admin'));
    }
    
}
