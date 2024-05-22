<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StudentDetailsController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.student_list_card', compact('admin'));
    }

    public function showList() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.student_list', compact('admin'));
    }

    public function showDetails() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.student_detail', compact('admin'));
    }
}
