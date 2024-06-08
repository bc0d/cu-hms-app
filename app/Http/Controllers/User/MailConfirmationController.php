<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\OtpController;

class MailConfirmationController extends Controller
{
    public function showMailConfirm() {

        $student = Auth::guard('students')->user();
        return view('users.auth.mailconfirm', compact('student'));
    }
}
