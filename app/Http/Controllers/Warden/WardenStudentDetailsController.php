<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WardenStudentDetailsController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.student_list_card', compact('admin'));
    }

    public function showList() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.student_list', compact('admin'));;
    }

    public function showDetails() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.student_detail', compact('admin'));
    }
    
}
