<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StudentDetailsAdminController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.student_list_card', compact('admin'));
    }

    public function showList() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.student_list', compact('admin'));
    }

    public function showDetails() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.student_detail', compact('admin'));
    }
}
