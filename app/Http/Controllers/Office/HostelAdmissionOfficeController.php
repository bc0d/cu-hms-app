<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HostelAdmissionOfficeController extends Controller
{
    public function showRequests() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.admission_req', compact('admin'));
    }

    public function admissionAction() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.admission_req_action', compact('admin'));
    }
}
