<?php

namespace App\Http\Controllers\Hod;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostelVacateHodController extends Controller
{
    public function showRequests() {
        return view('admins.hod.vacate_req');
    }

    public function vacateAction() {
    return view('admins.hod.vacate_req_action');
    }
}
