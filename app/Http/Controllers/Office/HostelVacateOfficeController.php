<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HostelVacateOfficeController extends Controller
{
    public function showRequests() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.vacate_req', compact('admin'));
    }

    public function vacateAction() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.vacate_req_action', compact('admin'));
    }
}
