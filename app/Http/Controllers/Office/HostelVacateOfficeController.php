<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostelVacateOfficeController extends Controller
{
    public function showRequests() {
        return view('admins.office.vacate_req');
    }

    public function vacateAction() {
        return view('admins.office.vacate_req_action');
    }
}
