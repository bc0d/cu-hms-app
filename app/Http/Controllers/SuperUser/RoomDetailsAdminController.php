<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoomDetailsAdminController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.rooms_card', compact('admin'));
    }

    public function roomDetails() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.rooms_list', compact('admin'));
    }
}
