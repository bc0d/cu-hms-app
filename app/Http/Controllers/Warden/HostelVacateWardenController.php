<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostelVacateWardenController extends Controller
{
    public function showRequests() {
        return view('admins.warden.vacate_req');
    }

    public function vacateAction() {
        return view('admins.warden.vacate_req_action');
    }
}
