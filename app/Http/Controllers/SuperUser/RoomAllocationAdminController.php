<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomAllocationAdminController extends Controller
{
    public function showRoomAllocList() {
        return view('admins.superUser.allocation_list');
    }

    public function roomAllocAction() {
        return view('admins.superUser.allocation_room');
    }
}
