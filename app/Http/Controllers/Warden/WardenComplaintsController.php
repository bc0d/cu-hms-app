<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WardenComplaintsController extends Controller
{
    public function showComplaints() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.complaints_list', compact('admin'));
    }
}
