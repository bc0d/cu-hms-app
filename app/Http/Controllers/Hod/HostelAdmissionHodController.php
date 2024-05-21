<?php

namespace App\Http\Controllers\Hod;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostelAdmissionHodController extends Controller
{
    public function showRequests() {
        return view('admins.hod.allocation_req');
    }

    public function admissionAction() {
        return view('admins.hod.allocation_req_action');
    }
}
