<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WardenProfileController extends Controller
{
    public function showWardenProfile() {
        
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.warden_profile', compact('admin'));
    }
}
