<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

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
            'callback_url' => 'required',
            'status' => 'required|string',
        ]);

        $transaction = new Transaction();
        $transaction->student_id = $data['student_id'];
        $transaction->purpose = $data['purpose'];
        $transaction->amount = $data['amount'];
        $transaction->status = $data['status'];
        $transaction->save();

        return redirect()->back();
    }
}
