<?php

namespace App\Http\Controllers\Registrar;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoomAllocationRegistrarController extends Controller
{
    public function showRoomAllocList() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.allocation_list', compact('admin'));
    }

    public function roomAllocAction() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.allocation_room', compact('admin'));
    }
}
