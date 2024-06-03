<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintsWardenController extends Controller
{
    public function showComplaintsCard() {

        $admin = Auth::guard('admins')->user();
        return view('admins.warden.complaints_card', compact('admin'));
    }

    public function showNewComplaints() {

        $admin = Auth::guard('admins')->user();
        if($admin->access === 'mens') {
            $complaints = Complaint::where([
                ['status', 'Pending'],
                ['hostel_id', '1']
            ])->get();
            return view('admins.warden.complaints_list', compact('admin', 'complaints'));
        } else {
            $complaints = Complaint::where([
                ['status', 'Pending'],
                ['hostel_id', '2']
            ])->get();
            return view('admins.warden.complaints_list', compact('admin', 'complaints'));
        }
        
    }

    public function showSolvedComplaints() {

        $admin = Auth::guard('admins')->user();
        if($admin->access === 'mens') {
            $complaints = Complaint::where([
                ['status', 'Solved'],
                ['hostel_id', '1']
            ])->get();
            return view('admins.warden.complaints_list', compact('admin', 'complaints'));
        } else {
            $complaints = Complaint::where([
                ['status', 'Solved'],
                ['hostel_id', '2']
            ])->get();
            return view('admins.warden.complaints_list', compact('admin', 'complaints'));
        }
    }

    public function showAllComplaints() {

        $admin = Auth::guard('admins')->user();
        if($admin->access === 'mens') {
            $complaints = Complaint::where('hostel_id', '1')->get();
            return view('admins.warden.complaints_list', compact('admin', 'complaints'));
        } else {
            $complaints = Complaint::where('hostel_id', '2')->get();
            return view('admins.warden.complaints_list', compact('admin', 'complaints'));
        }
    }

    public function showComplaintView($id) {

        $admin = Auth::guard('admins')->user();
        $complaint = Complaint::findOrFail($id);

        if ($complaint->status === 'Pending') {

            $complaint->status = 'Viewed';
            $complaint->save();
        }
        

        return view('admins.warden.complaint', compact('admin', 'complaint'));
    }

    public function complaintEdit(Request $request) {

        $admin = Auth::guard('admins')->user();

        $data = $request->validate([
            'status' => 'required|string',
            'comment' => 'required|string',
            'id' => 'required|string|exists:complaints,complaint_id', // Add exists rule
        ]);

        Complaint::where('complaint_id', $data['id'])->update([
            'status' => $data['status'],
            'closedby' => $admin->admin_id,
            'comment' => $data['comment'],
        ]);

        return redirect()->back()->with('success', 'Complaint updated successfully.');
    }
}
