<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoomDetailsController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.rooms_card', compact('admin'));
    }

    public function roomDetails() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.rooms_list', compact('admin'));
    }
}
