<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
    public function showComplaints() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.complaints', compact('admin'));
    }
}
