<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\RoomVacate;

class HostelVacateOfficeController extends Controller
{
    public function showRequests() {
        $admin = Auth::guard('admins')->user();
        $vacates = RoomVacate::all();
        return view('admins.office.vacate_req', compact('admin', 'vacates'));
    }

    public function vacateAction() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.vacate_req_action', compact('admin'));
    }
}
