<?php

namespace App\Http\Controllers\Registrar;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegistrarDashboardController extends Controller
{
    public function showRegistrarDashboard() {
        
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.dashboard', compact('admin'));
    }
}
