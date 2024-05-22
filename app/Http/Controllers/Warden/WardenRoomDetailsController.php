<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WardenRoomDetailsController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.rooms_card', compact('admin'));
    }

    public function roomDetails() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.rooms_list', compact('admin'));
    }
}
