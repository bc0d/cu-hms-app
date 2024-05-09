<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostelAdmissionWardenController extends Controller
{
    public function showRequests() {
        return view('admins.warden.admission_req');
    }

    public function admissionAction() {
        return view('admins.warden.admission_req_action');
    }
}
