<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentDetailsAdminController extends Controller
{
    public function showCard() {
        return view('admins.superUser.student_list_card');
    }

    public function showList() {
        return view('admins.superUser.student_list');
    }

    public function showDetails() {
        return view('admins.superUser.student_detail');
    }
}
