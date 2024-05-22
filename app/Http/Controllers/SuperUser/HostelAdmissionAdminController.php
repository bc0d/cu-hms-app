<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HostelAdmissionAdminController extends Controller
{
    public function showRequests() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.admission_req', compact('admin'));
    }

    public function admissionAction() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.admission_req_action', compact('admin'));
    }
}
