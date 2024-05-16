<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostelAdmissionAdminController extends Controller
{
    public function showRequests() {
        return view('admins.superUser.admission_req');
    }

    public function admissionAction() {
        return view('admins.superUser.admission_req_action');
    }
}
