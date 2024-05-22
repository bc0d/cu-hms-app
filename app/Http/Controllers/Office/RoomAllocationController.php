<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoomAllocationController extends Controller
{
    public function showRoomAllocList() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.allocation_list', compact('admin'));
    }

    public function roomAllocAction() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.allocation_room', compact('admin'));
    }
}
