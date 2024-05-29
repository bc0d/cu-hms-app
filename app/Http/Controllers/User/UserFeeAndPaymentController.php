<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Rent;
use App\Models\Bill;

class UserFeeAndPaymentController extends Controller
{
    public function showBills() {

        $student = Auth::guard('students')->user();
        return view('users.bills_and_payments', compact('student'));
    } 

    public function viewRents() {
        $student = Auth::guard('students')->user();
        $rents = Rent::all();
        return view('users.room_rent_status', compact('student','rents'));
    }

    public function viewBills() {
        $student = Auth::guard('students')->user();
        $bills = Bill::all();
        return view('users.room_rent',compact('student','bills'));
    }


}
