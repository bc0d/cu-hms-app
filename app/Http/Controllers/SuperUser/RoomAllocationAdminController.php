<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\RoomAllocation;
use App\Models\Block;
use App\Models\Room;
use App\Models\Bed;
use App\Models\Student;

class RoomAllocationAdminController extends Controller
{
    public function showRoomAllocList() {
        $admin = Auth::guard('admins')->user();
        $roomReq = RoomAllocation::with('student')->where([
            ['warden_verification_status', '=', 'Approved'],
            ['allocation_status', '=', 'Pending']   
        ])->get();
        return view('admins.superUser.allocation_list', compact('admin', 'roomReq'));
    }

    public function roomAllocAction($id) {
        $admin = Auth::guard('admins')->user();
        $roomReq = RoomAllocation::with('student')->findOrFail($id);
        $blocks = Block::all();
        return view('admins.superUser.allocation_room', compact('admin', 'roomReq', 'blocks'));
    }

    public function asignRoom(Request $request) {
        $admin = Auth::guard('admins')->user();
        
        $data = $request->validate([
            'block' => 'required',
            'room' => 'required',
            'bed' => 'required',
            'student_id' => 'required',
            'req_id' => 'required',
        ]);
        

        $bed = Bed::findOrFail($data['bed']);
        $roomReq = RoomAllocation::findOrFail($data['req_id']);
        $student =Student::findOrFail($data['student_id']);

        $student->bed_id = $bed->bed_id;
        $student->status = 'Active';
        $student->save();

        $bed->student_id = $data['student_id'];
        $bed->status = 'occupied';
        $bed->save();

        $roomReq->allocation_status = 'Allocated';
        $roomReq->allocatedBy = $admin->admin_id;
        $roomReq->save();

        return redirect()->back()->with('message', 'Room allocated Successfully');
        
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
