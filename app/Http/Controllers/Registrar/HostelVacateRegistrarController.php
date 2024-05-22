<?php

namespace App\Http\Controllers\Registrar;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HostelVacateRegistrarController extends Controller
{
    public function showRequests() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.vacate_req', compact('admin'));
    }

    public function vacateAction() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.vacate_req_action', compact('admin'));
    }
}
