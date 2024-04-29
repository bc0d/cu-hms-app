<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentDetailsController extends Controller
{
    public function showCard() {
        return view('admins.office.student_list_card');
    }

    public function showList() {
        return view('admins.office.student_list');
    }

    public function showDetails() {
        return view('admins.office.student_detail');
    }
}
