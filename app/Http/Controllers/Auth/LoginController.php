<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User\Student;

class LoginController extends Controller
{
    public function showStudentLogin() {

        return view('users.login');
    }

    public function studentLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('students')->attempt($credentials)) {
            // Authentication successful
            if (Auth::guard('students')->check()) {
                // User is authenticated
                \Log::info('User authenticated successfully.');
            } else {
                // User authentication failed
                \Log::warning('User authentication failed.');
            }
            // Authentication successful
            return redirect()->intended('user/dashboard'); // Redirect to the dashboard
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
}
