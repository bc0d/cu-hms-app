<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserMessController extends Controller
{
    public function showMessSection() {

        $student = Auth::guard('students')->user();
        return view('users.mess_index', compact('student'));
    }

    public function showMessAttendance() {
        
        $student = Auth::guard('students')->user();
        return view('users.attendance', compact('student'));
    }

    public function showMessStatus() {

        $student = Auth::guard('students')->user();
        return view('users.mess_in_out', compact('student'));
    }

    public function showMessBill() {

        $student = Auth::guard('students')->user();
        return view('users.mess_bill', compact('student'));
    }

    public function showMessPayment() {

        $student = Auth::guard('students')->user();
        return view('users.mess_payment', compact('student'));
    }

}
