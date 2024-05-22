<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FeeAndPaymentController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.fees_card', compact('admin'));
    }

    public function roomRentDetails() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.fee_details', compact('admin'));
    }

    //fee maintanance
    public function feeMaintanance() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.fee_maintanance', compact('admin'));
    }

    public function feeUpdate() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.fee_update', compact('admin'));
    }

}
