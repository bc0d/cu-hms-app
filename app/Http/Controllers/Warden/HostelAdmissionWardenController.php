<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HostelAdmissionWardenController extends Controller
{
    public function showRequests() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.admission_req', compact('admin'));
    }

    public function admissionAction() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.admission_req_action', compact('admin'));
    }
}
