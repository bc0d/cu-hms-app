<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\Student;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function signupPageFirst() {
        return view('users.signup_basic');
    }

    public function signupPageFinal() {
        return view('users.signup_details');
    }

    public function signupStep1(Request $request) {

        $request->validate([
            'first_name' => 'required|string',
            'second_name' => 'required|string',
            'dob' => 'required|date',
            'email' => 'required|email',
        ]);

        $step1Data = $request->only([
            'first_name',
            'second_name',
            'gender',
            'department',
            'adm_no',
            'dob',
            'phone',
            'email',
            'password'
        ]);

        $step1Data['password'] = Hash::make($step1Data['password']);
        
        session()->put('step1', $step1Data);

        return redirect('user-signup-dtls');
    }

    public function signupStep2(Request $request) {
        
        $step1Data = session()->get('step1');

        if($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'-'.$step1Data['first_name'].'.'.$extension;
            $path = 'users/img/profile/';
            $file->move($path, $filename); 
        }

        $userData = array_merge($step1Data, $request->all());

        $userData['image'] = $path.$filename;

        Student::create($userData);

        return redirect('user-login');
    }
}
