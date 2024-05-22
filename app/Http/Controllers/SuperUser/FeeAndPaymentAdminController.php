<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FeeAndPaymentAdminController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.fees_card', compact('admin'));
    }

    public function roomRentDetails() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.fee_details', compact('admin'));
    }

    //fee maintanance
    public function feeMaintanance() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.fee_maintanance', compact('admin'));
    }

    public function feeUpdate() {
        return view('admins.superUser.fee_update', compact('admin'));
    }

}
