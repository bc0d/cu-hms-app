<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Fee;

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
        $fees = Fee::all();
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

}
