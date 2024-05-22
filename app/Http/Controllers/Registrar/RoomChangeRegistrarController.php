<?php

namespace App\Http\Controllers\Registrar;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class RoomChangeRegistrarController extends Controller
{
    public function showRoomChangeReq() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.room_change_list', compact('admin'));
    }

    public function roomChangeAction() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.room_change', compact('admin'));
    }
}
