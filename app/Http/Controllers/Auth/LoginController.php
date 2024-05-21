<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User\Student;

class LoginController extends Controller
{
    //login

    //student login
    public function showStudentLogin() {

        return view('users.login');
    }

    public function studentLogin(Request $request) {

        $this->validateLogin($request);

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

    //admin logins
    public function showAdminLogin() {

        return view('admins.admin_login');
    }

    public function adminLogin(Request $request) {

        $this->validateLogin($request);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admins')->attempt($credentials)) {

            return $this->redirectToDashboard();
        } else {

            // Authentication failed
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    protected function redirectToDashboard() {

        $admin = Auth::guard('admins')->user();
       
        //redirect
        switch ($admin->designation) {

            case 'admin' : 
                return redirect()->intended('super-user/index');
            case 'hod' :
                return redirect()->intended('hod/index');
            case 'mess_admin' :
                return redirect()->intended('admin-login');
            case 'staff' :
                return redirect()->intended('office/index');
            case 'warden' :
                return redirect()->intended('warden/index');
        }
    }


    //login validation
    protected function validateLogin(Request $request) {

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    }

    //logout

    //student logout
    public function studentLogout(Request $request)
    {
        Auth::guard('students')->logout();
        $request->session()->invalidate();
        return redirect('/');
    }

    //admin logout
    public function adminLogout(Request $request)
    {
        Auth::guard('admins')->logout();
        $request->session()->invalidate();
        return redirect('admin-login');
    }
}
