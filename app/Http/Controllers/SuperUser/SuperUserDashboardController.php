<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SuperUserDashboardController extends Controller
{
    public function showSuperUserDashboard() {
        
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.dashboard', compact('admin'));
    }
}