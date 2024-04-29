<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostelAdmissionOfficeController extends Controller
{
    public function showRequests() {
        return view('admins.office.admission_req');
    }

    public function admissionAction() {
        return view('admins.office.admission_req_action');
    }
}
