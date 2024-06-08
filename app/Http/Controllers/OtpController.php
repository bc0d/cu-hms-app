<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

use App\Mail\OTPMail;

use App\Models\Otp;
use App\Models\Student;

class OtpController extends Controller
{
    public function sendOtp(Request $request)
    {
        $data = $request->json()->all();

        $email = $data['email'];

        $student = Student::where('email', $email)->first();

        $otp = rand(100000, 999999);
        $expiresAt = Carbon::now()->addMinutes(10);

        Otp::create([
            'student_id' => $student->student_id,
            'otp' => $otp,
            'expires_at' => $expiresAt,
        ]);

        Mail::to($email)->send(new OTPMail($otp));
        // Mail::raw("Your OTP is $otp. It will expire in 10 minutes.", function ($message) use ($student) {
        //     $message->to($student->email)->subject('OTP Verification');
        // });

        return response()->json([
            'success' => true,
            'message' => 'OTP sent'
        ]);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|numeric',
        ]);

        $student = Student::where('email', $request->email)->first();

        $otpRecord = Otp::where('student_id', $student->student_id)
            ->where('otp', $request->otp)
            ->where('expires_at', '>', Carbon::now())
            ->first();

        if (!$otpRecord) {
            return response()->json(['message' => 'Invalid or expired OTP'], 400);
        }

        // Mark email as verified (depending on your implementation)
        $student->email_verified_at = Carbon::now();
        $student->save();

        // Optionally, delete the OTP record
        $otpRecord->delete();

        return response()->json([
            'success' => true,
            'message' => 'OTP verified'
        ]);
    }

}
