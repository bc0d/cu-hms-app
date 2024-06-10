<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\RoomAllocation;

class UserDashboardController extends Controller
{
    public function showDashboard() {
        $notices = $notices = Notice::latest()->take(2)->get();
        $student = Auth::guard('students')->user();
        $roomAlloc = RoomAllocation::where('student_id', $student->student_id)->first();
        return view('users.dashboard', compact('student', 'roomAlloc','notices'));
    }
}
