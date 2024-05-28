<?php

namespace App\Http\Controllers\Mess;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileMessController extends Controller
{
    public function showMessProfile() {
        $admin = Auth::guard('admins')->user();
        return view('admins.mess.profile', compact('admin'));
    }
}
