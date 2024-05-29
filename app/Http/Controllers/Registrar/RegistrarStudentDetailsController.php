<?php

namespace App\Http\Controllers\Registrar;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegistrarStudentDetailsController extends Controller
{
    public function showStudentDetails()
    {

        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.student_detail_form', compact('admin'));
    }
    public function viewStudentDetails()
    {

        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.student_detail_list', compact('admin'));
    }
}
