<?php

namespace App\Http\Controllers\Registrar;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ComplaintsRegistrarController extends Controller
{
    public function showComplaints() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.complaints', compact('admin'));
    }
}
