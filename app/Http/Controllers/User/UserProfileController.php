<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Bed;

class UserProfileController extends Controller
{
    public function showStudentProfile() {
        $student = Auth::guard('students')->user();
        $course = Course::with('department')->where('course_id', $student->course)->first();
        $bed = Bed::with('room.block.hostel')->findOrFail($student->bed_id);
        return view('users.profile', compact('student', 'course', 'bed'));
    }

    public function showMoreDetails() {

        $student = Auth::guard('students')->user();
        $course = Course::with('department')->where('course_id', $student->course)->first();
        $bed = Bed::with('room.block.hostel')->findOrFail($student->bed_id);
        return view('users.profileDetailed', compact('student', 'course', 'bed'));
    }
}
