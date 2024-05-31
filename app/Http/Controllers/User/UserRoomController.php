<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Department;
use App\Models\RoomAllocation;
use App\Models\FeeDetail;
use App\Models\Bed;
use App\Models\Transaction;
use App\Models\RoomChange;
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

    public function showRoomDetails() {

        $student = Auth::guard('students')->user();
        $bed = Bed::with('room.block.hostel')->findOrFail($student->bed_id);
        return view('users.room_details', compact('student', 'bed'));
    }

    public function showRoomReq() {

        $student = Auth::guard('students')->user();
        $department = Department::where('department_id', $student->department)->first();
        $roomAlloc = RoomAllocation::where('student_id', $student->student_id)->first();
        $transaction = Transaction::firstWhere([
            'student_id' => $student->student_id,
            'purpose' => 'Hostel Admission'
        ]);
        if(!is_Null($transaction)) {
            $roomAlloc->payment_status = $transaction->status;
            $roomAlloc->transaction_id = $transaction->transaction_id;
            $roomAlloc->save();
        }
        $fee = FeeDetail::where('fee_title', 'like', '%Admission%')->get();
        $total = 0.0;
        foreach($fee as $val) {
            $total = $total + $val->amount;
        }
        return view('users.room_request', compact('student', 'department', 'roomAlloc', 'fee', 'total'));
    }

    public function roomRequest(Request $request) {

        $student = Auth::guard('students')->user();

        $data = $request->validate([
            'hostel' => 'required|string',
        ]);

        RoomAllocation::create([
            'student_id' => $student->student_id,
            'department_id' => $student->department,
            'hostel' => $data['hostel'],
            'dep_verification_status' => 'Pending',
            'warden_verification_status' => 'Pending',
            'payment_status' => 'Pending',
            'allocation_status' => 'Pending',
        ]);

        return redirect()->back()->with('message', 'Room Requested');
    }

    public function roomAllocationPayment(Request $request) {

        $student = Auth::guard('students')->user();
        $data = $request->validate([
            'student_id' => 'required|string',
            'purpose' => 'required|string',
            'amount' => 'required|numeric',
        ]);
        
        $paymentDetails = [
            'student_id' => $data['student_id'],
            'purpose' => $data['purpose'],
            'amount' => $data['amount'],
            'callback_url' => route('room.callback'),
        ];

        session()->flash('paymentDetails', $paymentDetails);
        return redirect('/payment-gateway');
    }

    public function showRoomChangeRequest() {

        $student = Auth::guard('students')->user();
        return view('users.room_change', compact('student'));
    }

    public function roomChangeRequest(Request $request) {

        $student = Auth::guard('students')->user();
        $data = $request->validate([
            'preference' => 'required|string',
            'reason' => 'required|string',
        ]);
        $bed = Bed::findOrFail($student->bed_id);
        $roomChange = new RoomChange();
        $roomChange->student_id = $student->student_id;
        $roomChange->current_room = $bed->room_id;
        $roomChange->request = $data['preference'];
        $roomChange->reason = $data['reason'];
        $roomChange->status = 'Pending';
        $roomChange->save();

        return redirect()->back()->with('message', 'Room change request submited successfully!!');
    }

    public function showRoomVacate() {

        $student = Auth::guard('students')->user();
        return view('users.room_vacate', compact('student'));
    }

}
