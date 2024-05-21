<?php

namespace App\Http\Controllers\Hod;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StudentDetailsHodController extends Controller
{
    public function showList() {

        $admin = Auth::guard('admins')->user();
        return view('admins.hod.students_list', compact('admin'));
    }

    public function profileDetails() {
        $admin = Auth::guard('admins')->user();
        return view('admins.hod.student_detail', compact('admin'));
    }
}
