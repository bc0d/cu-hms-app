<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
    public function showComplaints() {
        return view('admins.office.complaints');
    }
}
