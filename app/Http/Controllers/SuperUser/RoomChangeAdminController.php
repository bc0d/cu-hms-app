<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomChangeAdminController extends Controller
{
    public function showRoomChangeReq() {
        return view('admins.superUser.room_change_list');
    }

    public function roomChangeAction() {
        return view('admins.superUser.room_change');
    }
}
