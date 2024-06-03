<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\RoomRent;
use App\Models\WaterElectricBill;

use App\Models\Student;
use App\Models\Fee;
use Carbon\Carbon;

class UserFeeAndPaymentController extends Controller
{
    public function showBills() {

        $student = Auth::guard('students')->user();
        return view('users.room_bills_and_payments', compact('student'));
    } 

    public function viewRents() {

        $student = Auth::guard('students')->user();
        $rents = RoomRent::where('student_id', $student->student_id)->get();
        return view('users.room_rent_status', compact('student','rents'));
    }

    public function payRoomRent($id) {

        $student = Auth::guard('students')->user();
        $rents = RoomRent::findOrFail($id);
        return view('users.room_rent_payment', compact('student', 'rents'));
    }

    public function viewBills() {

        $student = Auth::guard('students')->user();
        $bills = WaterElectricBill::where('student_id', $student->student_id)->get();

        return view('users.room_elecwat_status',compact('student','bills'));
    }
}
