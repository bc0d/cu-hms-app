<?php

namespace App\Http\Controllers\Hod;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HodDashboardController extends Controller
{
    public function showHodDashboard() {
        
        $admin = Auth::guard('admins')->user();
        return view('admins.hod.dashboard', compact('admin'));
    }
}