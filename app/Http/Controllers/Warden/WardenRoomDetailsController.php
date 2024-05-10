<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WardenRoomDetailsController extends Controller
{
    public function showCard() {
        return view('admins.warden.rooms_card');
    }

    public function roomDetails() {
        return view('admins.warden.rooms_list');
    }
}
