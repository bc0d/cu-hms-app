<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Hostel;
use App\Models\Block;
use App\Models\Room;
use App\Models\Bed;

class WardenRoomDetailsController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.rooms_card', compact('admin'));
    }

    public function roomDetails() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.rooms_list', compact('admin'));
    }



    //filter

    public function index()
    {
        $admin = Auth::guard('admins')->user();
        $hostels = Hostel::all();
        return view('admins.warden.room_filter', compact('admin', 'hostels'));
    }


    public function getAllBlocks()
    {
        $blocks = Block::all();
        return response()->json($blocks);
    }

    public function getBlocks($hostelId)
    {
        if ($hostelId === 'all') {
            $blocks = Block::all();
        } else {
            $blocks = Block::where('hostel_id', $hostelId)->get();
        }
        return response()->json($blocks);
    }



    public function getRooms($blockIds)
    {
        if ($blockIds === 'all') {
            $rooms = Room::all();
        } else {
            $blockIdArray = explode(',', $blockIds);
            $rooms = Room::whereIn('block_id', $blockIdArray)->get();
        }
        return response()->json($rooms);
    }

    public function getBeds($roomIds)
    {
        if ($roomIds === 'all') {
            $beds = Bed::all();
        } else {
            $roomIdArray = explode(',', $roomIds);
            $beds = Bed::whereIn('room_id', $roomIdArray)->get();
        }
        return response()->json($beds);
    }

    public function getBedStatus($bedId)
    {
        if ($bedId === 'all') {
            $beds = Bed::all();
        } else {
            $beds = Bed::find($bedId);
        }
        return response()->json($beds);
    }

    public function filterBeds(Request $request)
    {
        // Retrieve filter parameters from the request
        $hostelId = $request->input('hostel_id');
        $blockIds = $request->input('block_ids');
        $status = $request->input('status');
    
        // Construct the query to filter beds
        $query = Bed::query();
    
        // Join beds with rooms and blocks
        $query->join('rooms', 'beds.room_id', '=', 'rooms.room_id');
        $query->join('blocks', 'rooms.block_id', '=', 'blocks.block_id');
    
        // Apply filters
        if ($hostelId != 'all') {
            // Assuming there's a hostel_id column in the blocks table
            $query->where('blocks.hostel_id', $hostelId);
        }
    
        if (!empty($blockIds) && !in_array('all', $blockIds)) {
            $query->whereIn('blocks.block_id', $blockIds);
        }
    
        if ($status && $status !== 'all') {
            $query->where('beds.status', $status);
        }
    
        // Execute the query
        $beds = $query->get();
    
        // Return filtered beds as JSON response
        return response()->json($beds);
    }
}
