<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoomAllocationAdminController extends Controller
{
    public function showRoomAllocList() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.allocation_list', compact('admin'));
    }

    public function roomAllocAction() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.allocation_room', compact('admin'));
    }
}
