<!DOCTYPE html>
<html>
<head>
    <title>Payment Gateway</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 4px;
            color: #fff;
            background-color: #28a745;
            text-decoration: none;
            cursor: pointer;
            font-size: 16px;
        }
        .button.cancel {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        @if(is_Null($paymentDetails))
            <p>Please go back</p>
        @else
            <h1>Payment Gateway</h1>
            <p>Purpose: {{ $paymentDetails['purpose'] }}</p>
            <p>Amount: {{ $paymentDetails['amount'] }}</p>
            <form action="{{ route('payment.makepay') }}" method="POST">
                @csrf
                <input type="hidden" name="student_id" value="{{ $paymentDetails['student_id'] }}">
                <input type="hidden" name="amount" value="{{ $paymentDetails['amount'] }}">
                <input type="hidden" name="purpose" value="{{ $paymentDetails['purpose'] }}">
                <input type="hidden" name="callback_url" value="{{ $paymentDetails['callback_url'] }}">
                <button type="submit" name="status" value="Success" class="button">Complete Payment</button>
                <button type="submit" name="status" value="Failed" class="button cancel">Cancel Payment</button>
            </form>
        @endif
        
    </div>
</body>
</html>
