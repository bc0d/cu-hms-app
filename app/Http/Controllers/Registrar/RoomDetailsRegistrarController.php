<?php

namespace App\Http\Controllers\Registrar;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoomDetailsRegistrarController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.rooms_card', compact('admin'));
    }

    public function roomDetails() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.rooms_list', compact('admin'));
    }
}
