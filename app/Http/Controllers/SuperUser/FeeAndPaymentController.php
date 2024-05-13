<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeeAndPaymentController extends Controller
{
    public function showCard() {
        return view('admins.office.fees_card');
    }

    public function roomRentDetails() {
        return view('admins.office.fee_details');
    }

    //fee maintanance
    public function feeMaintanance() {
        return view('admins.office.fee_maintanance');
    }

    public function feeUpdate() {
        return view('admins.office.fee_update');
    }

}
