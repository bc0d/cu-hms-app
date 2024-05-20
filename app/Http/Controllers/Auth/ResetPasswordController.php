<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ResetPasswordController extends Controller
{
    public function showPasswordReset() {

        return view('users.password_reset');
    }

    public function passwordReset(Request $request) {

        
        $request->validate([
            'cur_pass' => 'required',
            'password' => 'required',
        ]);
        
        $student = Auth::guard('students')->user();

        if (!Hash::check($request->cur_pass, $student->password)) {
            return back()->withErrors(['cur_pass' => 'The Password is incorrect.']);
        }
        try {
            $student->update([
                'password' => Hash::make($request->password),
            ]);
    
            // Store success message in session
            Session::flash('success', 'Your password has been reset!');
    
            return redirect()->route('login');
        } catch (\Exception $e) {
            // Handle any exceptions or errors that occur during the update
            return back()->withErrors(['update' => 'An error occurred while updating your password. Please try again.']);
        }
        
    }
}
