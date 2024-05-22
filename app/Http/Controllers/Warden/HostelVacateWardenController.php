<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HostelVacateWardenController extends Controller
{
    public function showRequests() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.vacate_req', compact('admin'));
    }

    public function vacateAction() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.vacate_req_action', compact('admin'));
    }
}
