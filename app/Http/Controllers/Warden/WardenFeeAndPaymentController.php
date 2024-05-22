<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WardenFeeAndPaymentController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.fees_card', compact('admin'));
    }

    public function roomRentDetails() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.fee_details', compact('admin'));
    }

    //fee maintanance
    public function feeMaintanance() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.fee_maintanance', compact('admin'));
    }

    public function feeUpdate() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.fee_update', compact('admin'));
    }

}
