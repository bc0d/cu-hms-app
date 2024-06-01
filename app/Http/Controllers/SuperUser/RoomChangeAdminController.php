<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\RoomChange;
use App\Models\Block;
use App\Models\Bed;
use App\Models\Student;

class RoomChangeAdminController extends Controller
{
    public function showRoomChangeReq() {
        $admin = Auth::guard('admins')->user();
        $roomChange = RoomChange::with('room.block.hostel', 'student')->get();
        return view('admins.superUser.room_change_list', compact('admin', 'roomChange'));
    }

    public function roomChangeAction($id) {
        $admin = Auth::guard('admins')->user();
        $roomChange = RoomChange::with('room.block.hostel', 'student')
            ->where('roomchange_id', $id)
            ->first();
        $blocks = Block::all();
        return view('admins.superUser.room_change', compact('admin', 'roomChange', 'blocks'));
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
}
