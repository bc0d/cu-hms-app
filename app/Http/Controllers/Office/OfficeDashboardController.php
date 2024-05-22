<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OfficeDashboardController extends Controller
{
    public function showHodDashboard() {
        
        $admin = Auth::guard('admins')->user();
        return view('admins.office.dashboard', compact('admin'));
    }
}
