<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WardenDashboardController extends Controller
{
    public function showWardenDashboard() {
        
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.dashboard', compact('admin'));
    }
}


