<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HostelVacateAdminController extends Controller
{
    public function showRequests() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.vacate_req', compact('admin'));
    }

    public function vacateAction() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.vacate_req_action', compact('admin'));
    }
}
