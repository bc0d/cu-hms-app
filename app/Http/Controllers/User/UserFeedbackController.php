<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Feedback;
use Illuminate\Http\Request;

class UserFeedbackController extends Controller
{
    public function showFeedback() {

        $student = Auth::guard('students')->user();
        $feedbacks = Feedback::with('student')->orderBy('updated_at', 'desc')->get();
        return view('users.feedback_index', compact('student', 'feedbacks'));
    }

    public function showAddFeedback() {

        $student = Auth::guard('students')->user();
        return view('users.feedback_give', compact('student'));
    }

    public function addFeedback(Request $request) {

        $student = Auth::guard('students')->user();
        $data = $request->validate(['feedback' => 'required|string']);
        
        $feedback = new Feedback();
        $feedback->student_id = $student->student_id;
        $feedback->review = $data['feedback'];
        $feedback->save();

        return redirect()->back()->with('message', 'Your feedback added successfully');
    }
}
