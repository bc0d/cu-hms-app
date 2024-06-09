<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Feedback;
use App\Models\Student;
use Illuminate\Http\Request;

class UserFeedbackController extends Controller
{
    public function showFeedback() {

        $student = Auth::guard('students')->user();
        $stud = Student::with('bed.room.block.hostel')->where('student_id', $student->student_id)->first();
        if($stud->hostel_id === '1') {
            $feedbacks = Feedback::with('student')
            ->where('hostel_id', '1')
            ->latest()
            ->get();
            return view('users.feedback_index', compact('student', 'feedbacks'));
        } else {
            $feedbacks = Feedback::with('student')
            ->where('hostel_id', '2')
            ->latest()
            ->get();
        return view('users.feedback_index', compact('student', 'feedbacks'));
        }
        
    }

    public function showAddFeedback() {

        $student = Auth::guard('students')->user();
        return view('users.feedback_give', compact('student'));
    }

    public function addFeedback(Request $request) {

        $student = Auth::guard('students')->user();
        $stud = Student::with('bed.room.block.hostel')->where('student_id', $student->student_id)->first();
        $data = $request->validate(['feedback' => 'required|string']); 
        $feedback = new Feedback();
        $feedback->student_id = $student->student_id;
        $feedback->review = $data['feedback'];
        if($stud->hostel_id === '1') {
            $feedback->hostel_id = '1';
        } else {
            $feedback->hostel_id = '2';
        }
        $feedback->save();

        return redirect()->back()->with('message', 'Your feedback added successfully');
    }
}
