<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\User\Student;

use Illuminate\Http\Request;

class StudentDetailsController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.student_list_card', compact('admin'));
    }


    public function showAllStudentList() {
        // Get the authenticated admin user
        $admin = Auth::guard('admins')->user();
    
        // Check if the authenticated admin has "mens" access
        if ($admin->access === 'mens') {
            // Fetch all male students
            $students = Student::where('gender', 'male')->get();
            
            // Return the view with the male students and admin data
            return view('admins.office.student_list', compact('students', 'admin'));
        } 
        elseif ($admin->access === 'womens'){
            $students = Student::where('gender', 'female')->get();
                
                // Return the view with the male students and admin data
                return view('admins.office.student_list', compact('students', 'admin'));
            } 
    }

/*
   public function showAllStudentList() {
      
        $students = Student::all(); // Fetch all students
        $admin = Auth::guard('admins')->user();
        return view('admins.office.student_list', compact('students', 'admin'));
    }*/

    public function showDetails() {
        
        $admin = Auth::guard('admins')->user();
        return view('admins.office.student_detail', compact( 'admin'));
    }
    public function showList() { 
        $admin = Auth::guard('admins')->user();
        return view('admins.office.student_list', compact('admin'));
    }
}
