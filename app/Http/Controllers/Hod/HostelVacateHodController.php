<?php

namespace App\Http\Controllers\Hod;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HostelVacateHodController extends Controller
{
    public function showRequests() {

        $admin = Auth::guard('admins')->user();
        return view('admins.hod.vacate_req', compact('admin'));
    }

    public function vacateAction() {
        $admin = Auth::guard('admins')->user();
        return view('admins.hod.vacate_req_action', compact('admin'));
    }
}
