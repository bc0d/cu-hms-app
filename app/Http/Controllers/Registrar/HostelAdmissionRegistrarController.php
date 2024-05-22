<?php

namespace App\Http\Controllers\Registrar;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HostelAdmissionRegistrarController extends Controller
{
    public function showRequests() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.admission_req', compact('admin'));
    }

    public function admissionAction() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.admission_req_action', compact('admin'));
    }
}
