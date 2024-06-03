<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\RoomRent;
use App\Models\WaterElectricBill;
use App\Models\Transaction;
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

    public function callPaymentGatewayRent(Request $request) {

        $student = Auth::guard('students')->user();
        $data = $request->validate([
            'id' => 'required|string',
            'student' => 'required|string',
            'amount' => 'required|string',
        ]);

        $paymentDetails = [
            'student_id' => $data['student'],
            'purpose' => 'Room Rent',
            'amount' => $data['amount'],
            'purpose_id' => $data['id'],
            'callback_url' => route('room.callback'),
        ];

        session()->flash('paymentDetails', $paymentDetails);
        return redirect('/payment-gateway');
    }

    public function viewBills() {

        $student = Auth::guard('students')->user();
        $bills = WaterElectricBill::where('student_id', $student->student_id)->get();

        return view('users.room_elecwat_status',compact('student','bills'));
    }

    public function payWaterElectricBill($id) {

        $student = Auth::guard('students')->user();
        $bills = WaterElectricBill::findOrFail($id);
        return view('users.room_elecwat_payment', compact('student', 'bills'));   
    }

    public function callPaymentGatewayBills(Request $request) {

        $student = Auth::guard('students')->user();
        $data = $request->validate([
            'id' => 'required|string',
            'student' => 'required|string',
            'amount' => 'required|string',
        ]);

        $paymentDetails = [
            'student_id' => $data['student'],
            'purpose' => 'Electric and Water',
            'amount' => $data['amount'],
            'purpose_id' => $data['id'],
            'callback_url' => route('room.callback'),
        ];

        session()->flash('paymentDetails', $paymentDetails);
        return redirect('/payment-gateway');
    }
}
