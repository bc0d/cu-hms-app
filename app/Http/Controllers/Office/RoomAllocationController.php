<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomAllocationController extends Controller
{
    public function showRoomAllocList() {
        return view('admins.office.allocation_list');
    }

    public function roomAllocAction() {
        return view('admins.office.allocation_room');
    }
}
