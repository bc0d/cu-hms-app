<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WardenStudentDetailsController extends Controller
{
    public function showCard() {
        return view('admins.warden.student_list_card');
    }

    public function showList() {
        return view('admins.warden.student_list');
    }

    public function showDetails() {
        return view('admins.warden.student_detail');
    }
    
}
