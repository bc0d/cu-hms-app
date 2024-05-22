<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoomChangeAdminController extends Controller
{
    public function showRoomChangeReq() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.room_change_list', compact('admin'));
    }

    public function roomChangeAction() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.room_change', compact('admin'));
    }
}
