<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserRoomController extends Controller
{
    public function showRoomSection() {

        $student = Auth::guard('students')->user();
        return view('users.room_index', compact('student'));
    }

    public function showRoomRent() {

        $student = Auth::guard('students')->user();
        return view('users.room_rent', compact('student'));
    }

    public function showRoomRentPayment() {

        $student = Auth::guard('students')->user();
        return view('users.room_rent_payment', compact('student'));
    }

    public function showRoomRentStatus() {

        $student = Auth::guard('students')->user();
        return view('users.room_rent_status', compact('student'));
    }

    public function showOtherBill() {

        $student = Auth::guard('students')->user();
        return view('users.room_other_bill', compact('student'));
    }

}
