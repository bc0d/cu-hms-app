<?php

namespace App\Http\Controllers\Hod;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentDetailsHodController extends Controller
{
    public function showList() {
        return view('admins.hod.students_list');
    }

    public function profileDetails() {
    return view('admins.hod.student_detail');
    }
}
