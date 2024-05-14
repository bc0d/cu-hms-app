<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplaintsAdminController extends Controller
{
    public function showComplaints() {
        return view('admins.superUser.complaints');
    }
}
