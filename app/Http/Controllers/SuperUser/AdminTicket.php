<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RequestAdmin;


class AdminTicket extends Controller
{
    public function showTickets() {
        
        $admin = Auth::guard('admins')->user();
        $reqs = RequestAdmin::with('admin')->latest()->get();
        return view('admins.superUser.tickets', compact('admin', 'reqs'));
    }
}
