<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\RoomRent;
use App\Models\WaterElectricBill;

class PaymentGatewayController extends Controller
{
    public function showPaymentGateway() {

        $paymentDetails = session('paymentDetails');

        // Use $paymentDetails as needed
         return view('payment.payment_gateway', compact('paymentDetails'));
    }

    public function makePayment(Request $request) {

        $data = $request->validate([
            'student_id' => 'required|string',
            'purpose' => 'required|string',
            'amount' => 'required|numeric',
            'status' => 'required|string',
            'purpose_id' => 'required|string',
        ]);

        $transaction = new Transaction();
        $transaction->student_id = $data['student_id'];
        $transaction->purpose = $data['purpose'];
        $transaction->amount = $data['amount'];
        $transaction->status = $data['status'];
        $transaction->purpose_id = $data['purpose_id'];
        $transaction->save();

        if($data['purpose'] === 'Room Rent') {

            $rent = RoomRent::findOrFail($data['purpose_id']);
            $rent->payment_date = $transaction->created_at;
            $rent->transaction_id = $transaction->transaction_id;
            $rent->paid_status = 'Success';
            $rent->save();
        } elseif($data['purpose'] === 'Electric and Water') {

            $bill = WaterElectricBill::findOrFail($data['purpose_id']);
            $bill->payment_date = $transaction->created_at;
            $bill->transaction_id = $transaction->transaction_id;
            $bill->paid_status = 'Success';
            $bill->save();
        }

        return redirect()->back();
    }
}
