<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use App\Mail\ForgotPasswordMail;
use App\Models\ForgotPassword;
use App\Models\Student;

class ForgotPasswordController extends Controller
{
    public function showForgot() {

        return view('users.auth.forgot');
    }

    public function sendPasswordResetLink(Request $request) {

        $data = $request->validate([
            'email' => 'required|email',
        ]);
        $email = $data['email'];
        $key = Hash::make($data['email']);
        $expiresAt = Carbon::now()->addHours(24);

        ForgotPassword::create([
            'email' => $email,
            'key' => $key,
            'expires_at' => $expiresAt
        ]);

        Mail::to($email)->send(new ForgotPasswordMail($key));

        return redirect()->back()->with('message', 'Password reset link sent to the mail!');

    }

    public function showResetForgotPassword($key) {

        return view('users.auth.forgot_reset', compact('key'));
    }

    public function setNewPassword(Request $request) {

        $data = $request->validate([
            'password' => 'required|min:8|confirmed',
            'key' => 'required'
        ]);

        $forgot = ForgotPassword::where('key', $data['key'])
            ->where('expires_at', '>', Carbon::now())
            ->first();
        if(!$forgot) {
            return redirect()->back()->with('message', 'Expired link');
        }
        $student = Student::where('email', $forgot->email)->first();
        $student->update([
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('login');
    }
}
