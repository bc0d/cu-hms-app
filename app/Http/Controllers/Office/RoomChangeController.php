<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\RoomChange;
use App\Models\Block;
use App\Models\Bed;
use App\Models\Student;

class RoomChangeController extends Controller
{
    public function showRoomChangeReq() {
        $admin = Auth::guard('admins')->user();
        if($admin->access === 'mens') {

            $roomChange = RoomChange::with('room.block.hostel', 'student')
                ->whereHas('room.block.hostel', function ($query) {
                    $query->where('hostel_id', '1'); // Assuming you want to filter by hostel_id = 1
                })
                ->get();
            return view('admins.office.room_change_list', compact('admin', 'roomChange'));
        } else {

            $roomChange = RoomChange::with('room.block.hostel', 'student')
                ->whereHas('room.block.hostel', function ($query) {
                    $query->where('hostel_id', '2'); // Assuming you want to filter by hostel_id = 1
                })
                ->get();
            return view('admins.office.room_change_list', compact('admin', 'roomChange'));
        }
        
    }

    public function roomChangeAction($id) {
        $admin = Auth::guard('admins')->user();

        if($admin->access === 'mens') {

            $roomChange = RoomChange::with('room.block.hostel', 'student')
            ->where('roomchange_id', $id)
            ->first();
            $blocks = Block::where('hostel_id', '1')->get();
            return view('admins.office.room_change', compact('admin', 'roomChange', 'blocks'));
        } else {

            $roomChange = RoomChange::with('room.block.hostel', 'student')
            ->where('roomchange_id', $id)
            ->first();
            $blocks = Block::where('hostel_id', '2')->get();
            return view('admins.office.room_change', compact('admin', 'roomChange', 'blocks'));;
        }

    }



    public function roomChange(Request $request) {

        $admin = Auth::guard('admins')->user();
        $data = $request->validate([
            'block' => 'required',
            'room' => 'required',
            'bed' => 'required',
            'student_id' => 'required',
            'rmchg_id' => 'required',
        ]);
        $student = Student::findOrFail($data['student_id']);
        $bed = Bed::findOrFail($student->bed_id);
        $bed->status = 'vacant';
        $bed->student_id = Null;
        $bed->save();
        $bedNew = Bed::findOrFail($data['bed']);
        $bedNew->status = 'occupied';
        $bedNew->student_id = $student->student_id;
        $bedNew->save();
        $student->bed_id = $data['bed'];
        $student->save();

        return redirect()->back()->with('message', 'room change success');

    }
    









    public function getRooms($blockId)
    {
        // Get rooms with at least one vacant bed
        $rooms = Room::where('block_id', $blockId)
            ->whereHas('beds', function($query) {
                $query->where('status', 'vacant');
            })
            ->get();
        return response()->json($rooms);
    }

    public function getBeds($roomId)
    {
        // Get only vacant beds
        $beds = Bed::where('room_id', $roomId)
            ->where('status', 'vacant')
            ->get();
        return response()->json($beds);
    }
}
