<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoomChangeController extends Controller
{
    public function showRoomChangeReq() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.room_change_list', compact('admin'));
    }

    public function roomChangeAction() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.room_change', compact('admin'));
    }
}
