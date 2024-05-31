<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Complaint;
use Illuminate\Http\Request;

class UserComplaintsController extends Controller
{
    public function showComplaintSection() {

        $student = Auth::guard('students')->user();
        return view('users.complaints_index', compact('student'));
    }

    public function showComplaintRegister() {

        $student = Auth::guard('students')->user();
        return view('users.complaint_register', compact('student'));
    }

    public function registerComplaint(Request $request) {

        $student = Auth::guard('students')->user();

        $formData = $request->validate([
            'complaint_cat' => 'required|string',
            'complaint_msg' => 'required|string',
        ]);

        $complaint = new Complaint();
        $complaint->student_id = $student->student_id;
        $complaint->category = $formData['complaint_cat'];
        $complaint->complaint = $formData['complaint_msg'];
        $complaint->status = 'Pending'; // default status
        $complaint->comment = 'Not Reviewed';
        $complaint->save();

        return redirect()->back()->with('message', 'Complaint added successfully');
    }

    public function showMyComplaints() {

        $student = Auth::guard('students')->user();
        $complaints = Complaint::where('student_id', $student->student_id)->latest()->get();
        return view('users.complaints_my', compact('student','complaints'));
    }
}
