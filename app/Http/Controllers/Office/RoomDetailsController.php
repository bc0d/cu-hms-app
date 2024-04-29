<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomDetailsController extends Controller
{
    public function showCard() {
        return view('admins.office.rooms_card');
    }

    public function roomDetails() {
        return view('admins.office.rooms_list');
    }
}
