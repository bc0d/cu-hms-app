<?php

namespace App\Http\Controllers\Registrar;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User\Student;
use Illuminate\Http\Request;

class StudentDetailsRegistrarController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.student_list_card', compact('admin'));
    }

    public function showList() {
        $admin = Auth::guard('admins')->user();
        $students = Student::orderBy('adm_no')->get();
        return view('admins.registrar.student_list', compact('admin', 'students'));
    }

    public function showDetails() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.student_detail', compact('admin'));
    }
    
}
