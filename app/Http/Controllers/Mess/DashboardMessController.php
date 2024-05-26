<?php

namespace App\Http\Controllers\Mess;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardMessController extends Controller
{
    public function showMessDashboard() {
        
        $admin = Auth::guard('admins')->user();
        return view('admins.mess.dashboard', compact('admin'));
    }  
}
