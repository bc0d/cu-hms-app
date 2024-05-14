<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomDetailsAdminController extends Controller
{
    public function showCard() {
        return view('admins.superUser.rooms_card');
    }

    public function roomDetails() {
        return view('admins.superUser.rooms_list');
    }
}
