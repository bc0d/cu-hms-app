<?php

namespace App\Http\Controllers\Hod;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User\Student;
use Illuminate\Http\Request;

class HodProfileController extends Controller
{
    public function showHodProfile() {
         $admin = Auth::guard('admins')->user();
         return view('admins.hod.hod_profile', compact('admin'));
    }


    public function studentDetailsProfile($id) {
        // Get the authenticated admin user
        $admin = Auth::guard('admins')->user();

        // Find the student by the provided student ID
        $student = Student::find($id);

        // Check if the student exists
        if (!$student) {
            // Handle the case where the student is not found
            return redirect()->back()->with('error', 'Student not found');
        }

        // Return the view with the admin and student data
        return view('admins.hod.student_detail', compact('admin','student'));
    }


    public function allocationRequestProfile($id) {
        $admin = Auth::guard('admins')->user();
        return view('admins.hod.student_detail', compact('admin',));
    }
}
