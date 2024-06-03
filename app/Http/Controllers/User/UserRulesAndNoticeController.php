<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Rule;
use App\Models\Notice;
use App\Models\Student;

class UserRulesAndNoticeController extends Controller
{
    public function showCard() {
        $student = Auth::guard('students')->user();
        return view('users.rules_and_notice', compact('student'));
    }

    public function viewRules() {
        $student = Auth::guard('students')->user();
        $stud = Student::with('bed.room.block.hostel')->where('student_id', $student->student_id)->first();
        if($stud->hostel_id === '1') {
            $rules = Rule::where('hostel_id', '1')->get();
            return view('users.rules_list', compact('student','rules'));
        } else {
            $rules = Rule::where('hostel_id', '2')->get();
            return view('users.rules_list', compact('student','rules'));
        }
    }

    public function viewNotices() {
        $student = Auth::guard('students')->user();
        $stud = Student::with('bed.room.block.hostel')->where('student_id', $student->student_id)->first();
        if($stud->hostel_id === '1') {
            $notices = Notice::where('hostel_id', '1')->get();
            return view('users.notice_list',compact('student','notices'));
        } else {
            $notices = Notice::where('hostel_id', '2')->get();
            return view('users.notice_list',compact('student','notices'));
        }
    }

    
}
