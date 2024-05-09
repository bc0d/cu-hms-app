<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WardenComplaintsController extends Controller
{
    public function showComplaints() {
        return view('admins.warden.complaints_list');
    }
}
