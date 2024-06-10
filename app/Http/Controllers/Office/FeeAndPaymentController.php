<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Fee;
use App\Models\Hostel;
use App\Models\RoomRent;
use App\Models\WaterElectricBill;

class FeeAndPaymentController extends Controller
{
    public function showBills() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.bills_card', compact('admin'));
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
            return view('admins.office.bill_room', compact('admin', 'rents'));
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
            return view('admins.office.bill_room', compact('admin', 'rents'));
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
                return view('admins.office.bill_waterelectric', compact('admin', 'bills'));
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
                return view('admins.office.bill_waterelectric', compact('admin', 'bills'));
        }
    }

    //fee maintanance
    public function feeMaintanance() {
        $admin = Auth::guard('admins')->user();
        $fees = Fee::with('hostel')->get(); 
        return view('admins.office.fee_maintanance', compact('admin','fees'));
    }

    public function showFeeAdd() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.fee_add',compact('admin'));
    }

    public function feeAdd(Request $request) {

        $admin = Auth::guard('admins')->user();

        $formData = $request->validate([
            'hostel_id' => 'required|string',
            'room_type' => 'required|string',
            'fee_item' => 'required|string',
            'amt' => 'required',
        ]);

        $fee = new Fee();
        $fee->hostel_id = $formData['hostel_id'];
        $fee->room_type = $formData['room_type'];
        $fee->fee_name = $formData['fee_item'];
        $fee->amount = $formData['amt'];
        $fee->updatedby = $admin->admin_id; // default status
        $fee->save();

        return redirect()->back()->with('message', 'Fee added successfully');
    }


    public function showFeeEdit($id) {

        $admin = Auth::guard('admins')->user();
        $fee = Fee::findOrFail($id);

        return view('admins.office.fee_edit', compact('admin', 'fee'));
    }

    public function feeEdit(Request $request) {

        $admin = Auth::guard('admins')->user();
        $data = $request->validate([
            'id' => 'required',
            'newrate' => 'required',
        ]);

        $fee = Fee::findOrFail($data['id'])->first();
        $fee->amount = $data['newrate'];
        $fee->updatedby = $admin->admin_id;
        $fee->save();

        return redirect()->back()->with('message', 'Amount updated');
    }
}
