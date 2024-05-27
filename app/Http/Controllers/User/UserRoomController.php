<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Department;
use App\Models\RoomAllocation;
use Illuminate\Http\Request;

class UserRoomController extends Controller
{
    public function showRoomSection() {

        $student = Auth::guard('students')->user();
        return view('users.room_index', compact('student'));
    }

    public function showRoomRent() {

        $student = Auth::guard('students')->user();
        return view('users.room_rent', compact('student'));
    }

    public function showRoomRentPayment() {

        $student = Auth::guard('students')->user();
        return view('users.room_rent_payment', compact('student'));
    }

    public function showRoomRentStatus() {

        $student = Auth::guard('students')->user();
        return view('users.room_rent_status', compact('student'));
    }

    public function showOtherBill() {

        $student = Auth::guard('students')->user();
        return view('users.room_other_bill', compact('student'));
    }

    public function showRoomReq() {

        $student = Auth::guard('students')->user();
        $department = Department::where('department_id', $student->department)->first();
        $roomAlloc = RoomAllocation::where('student_id', $student->student_id)->first();
        
        return view('users.room_request', compact('student', 'department', 'roomAlloc'));
    }

    public function roomRequest(Request $request) {

        $student = Auth::guard('students')->user();

        RoomAllocation::create([
            'student_id' => $student->student_id,
            'department_id' => $student->department,
            'dep_verification_status' => 'Pending',
            'payment_status' => 'Pending',
            'allocation_status' => 'Pending',
        ]);

        return redirect('user/dashboard');
    }

}
