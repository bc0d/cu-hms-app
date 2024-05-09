<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WardenFeeAndPaymentController extends Controller
{
    public function showCard() {
        return view('admins.warden.fees_card');
    }

    public function roomRentDetails() {
        return view('admins.warden.fee_details');
    }

    //fee maintanance
    public function feeMaintanance() {
        return view('admins.warden.fee_maintanance');
    }

    public function feeUpdate() {
        return view('admins.warden.fee_update');
    }

}
