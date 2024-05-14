<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostelVacateAdminController extends Controller
{
    public function showRequests() {
        return view('admins.superUser.vacate_req');
    }

    public function vacateAction() {
        return view('admins.superUser.vacate_req_action');
    }
}
