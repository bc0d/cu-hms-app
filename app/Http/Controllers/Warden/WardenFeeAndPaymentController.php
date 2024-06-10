<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Fee;
use App\Models\RoomRent;
use App\Models\WaterElectricBill;

class WardenFeeAndPaymentController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.fees_card', compact('admin'));
    }
//initially roomRentDetails
    public function roomRentDetail() {
        $admin = Auth::guard('admins')->user();
        if($admin->access === 'mens') {
            dd('mens');
            $rents = RoomRent::with('student','fee')
                ->whereHas('student', function ($query) {
                    $query->where('status', 'Active');
                })
                ->whereHas('fee', function ($query) {
                    $query->where('hostel_id', '1');
                })
                ->get();
            return view('admins.warden.bill_room', compact('admin', 'rents'));
        }
        else {
            dd('womens');
            $rents = RoomRent::with('student', 'fee')
                ->whereHas('student', function ($query) {
                    $query->where('status', 'Active');
                })
                ->whereHas('fee', function ($query) {
                    $query->where('hostel_id', '2');
                })
                ->get();
            return view('admins.warden.bill_room', compact('admin', 'rents'));
        }
    }

    //fee maintanance
    public function feeMaintanance() {
        $admin = Auth::guard('admins')->user();
        $fees = Fee::with('hostel')->get();
        return view('admins.warden.fee_maintanance', compact('admin', 'fees'));
    }

    public function feeUpdate() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.fee_update', compact('admin'));
    }



    public function showBills() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.bills_card', compact('admin'));
    }

    public function roomRentDetails() {
        $admin = Auth::guard('admins')->user();
        if($admin->access === 'mens') {

            $rents = RoomRent::with('student','fee')
                ->whereHas('student', function ($query) {
                    $query->where('status', 'Active');
                })
                ->whereHas('fee', function ($query) {
                    $query->where('hostel_id', '1');
                })
                ->get();
            return view('admins.warden.bill_room', compact('admin', 'rents'));
        }
        else {

            $rents = RoomRent::with('student', 'fee')
                ->whereHas('student', function ($query) {
                    $query->where('status', 'Active');
                })
                ->whereHas('fee', function ($query) {
                    $query->where('hostel_id', '2');
                })
                ->get();
            return view('admins.warden.bill_room', compact('admin', 'rents'));
        }
    }

    public function waterElectricBills() {
        $admin = Auth::guard('admins')->user();

        if($admin->access === 'mens') {

            $bills = WaterElectricBill::with('student','fee')
                ->whereHas('student', function ($query) {
                    $query->where('status', 'Active');
                })
                ->whereHas('fee', function ($query) {
                    $query->where('hostel_id', '1');
                })
                ->get();
                return view('admins.warden.bill_waterelectric', compact('admin', 'bills'));
        }
        else {

            $bills = WaterElectricBill::with('student', 'fee')
                ->whereHas('student', function ($query) {
                    $query->where('status', 'Active');
                })
                ->whereHas('fee', function ($query) {
                    $query->where('hostel_id', '2');
                })
                ->get();
                return view('admins.warden.bill_waterelectric', compact('admin', 'bills'));
        }
    }

}
