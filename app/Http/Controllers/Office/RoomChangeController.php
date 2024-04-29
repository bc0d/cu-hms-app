<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomChangeController extends Controller
{
    public function showRoomChangeReq() {
        return view('admins.office.room_change_list');
    }

    public function roomChangeAction() {
        return view('admins.office.room_change');
    }
}
