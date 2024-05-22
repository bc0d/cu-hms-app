<?php

namespace App\Http\Controllers\Hod;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HodProfileController extends Controller
{
    public function showHodProfile() {
        
        $admin = Auth::guard('admins')->user();
        
        return view('admins.hod.hod_profile', compact('admin'));
    }
}
