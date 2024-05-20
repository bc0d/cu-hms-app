<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function showStudentProfile() {
        $student = Auth::guard('students')->user();
        return view('users.profile', compact('student'));
    }

    public function showMoreDetails() {

        $student = Auth::guard('students')->user();
        return view('users.profileDetailed', compact('student'));
    }
}
