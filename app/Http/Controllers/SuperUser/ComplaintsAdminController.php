<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ComplaintsAdminController extends Controller
{
    public function showComplaints() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.complaints', compact('admin'));
    }
}
