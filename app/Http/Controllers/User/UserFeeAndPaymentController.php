<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeeAndPaymentController extends Controller
{
     public function showFeedback() {

        $student = Auth::guard('students')->user();
        return view('users.fee_pending_status', compact('student'));
    } 
}
