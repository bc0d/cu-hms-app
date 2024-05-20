<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserComplaintsController extends Controller
{
    public function showComplaintSection() {

        $student = Auth::guard('students')->user();
        return view('users.complaints_index', compact('student'));
    }

    public function showComplaintRegister() {

        $student = Auth::guard('students')->user();
        return view('users.complaint_register', compact('student'));
    }

    public function registerComplaint(Request $request) {

        return redirect()->intended('user/complaints/my-complaints');
    }

    public function showMyComplaints() {

        $student = Auth::guard('students')->user();
        return view('users.complaints_my', compact('student'));
    }
}
