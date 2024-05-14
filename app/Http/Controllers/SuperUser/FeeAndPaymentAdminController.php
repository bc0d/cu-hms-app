<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeeAndPaymentAdminController extends Controller
{
    public function showCard() {
        return view('admins.superUser.fees_card');
    }

    public function roomRentDetails() {
        return view('admins.superUser.fee_details');
    }

    //fee maintanance
    public function feeMaintanance() {
        return view('admins.superUser.fee_maintanance');
    }

    public function feeUpdate() {
        return view('admins.superUser.fee_update');
    }

}
