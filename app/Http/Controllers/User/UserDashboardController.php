<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Student;
use App\Models\RoomAllocation;

class UserDashboardController extends Controller
{
    public function showDashboard() {
        $student = Auth::guard('students')->user();
        $roomAlloc = RoomAllocation::where('student_id', $student->student_id)->first();
        $stud = Student::with('bed.room.block.hostel')->where('student_id', $student->student_id)->first();
        if($stud->hostel_id === '1') {
            $notices = $notices = Notice::latest()->take(2)->get();
            return view('users.dashboard', compact('student', 'roomAlloc','notices'));
        }
        else {
            $notices = $notices = Notice::latest()->take(2)->get();
            return view('users.dashboard', compact('student', 'roomAlloc','notices'));
        }
    }
}
