<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\RoomVacate;


class HostelVacateAdminController extends Controller
{
    public function showRequests() {
        $admin = Auth::guard('admins')->user();
        $vacateReqs = RoomVacate::with('student', 'department')->where('vacate_status', 'Pending')->get();
        return view('admins.superUser.vacate_req', compact('admin', 'vacateReqs'));
    }

    public function vacateAction($id) {
        $admin = Auth::guard('admins')->user();
        $vacateReqs = RoomVacate::with('student', 'department')->findOrFail($id);
        return view('admins.superUser.vacate_req_action', compact('admin', 'vacateReqs'));
    }
}
