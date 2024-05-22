<?php

namespace App\Http\Controllers\Hod;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HostelAdmissionHodController extends Controller
{
    public function showRequests() {

        $admin = Auth::guard('admins')->user();
        return view('admins.hod.allocation_req', compact('admin'));
    }

    public function admissionAction() {

        $admin = Auth::guard('admins')->user();
        return view('admins.hod.allocation_req_action', compact('admin'));
    }
}
