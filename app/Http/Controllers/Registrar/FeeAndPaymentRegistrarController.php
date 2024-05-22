<?php

namespace App\Http\Controllers\Registrar;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class FeeAndPaymentRegistrarController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.fees_card', compact('admin'));
    }

    public function roomRentDetails() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.fee_details', compact('admin'));
    }

    //fee maintanance
    public function feeMaintanance() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.fee_maintanance', compact('admin'));
    }

    public function feeUpdate() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.fee_update', compact('admin'));
    }

}
