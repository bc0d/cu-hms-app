<?php

namespace App\Http\Controllers\Registrar;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Block;
use Illuminate\Http\Request;

class RegistrarStudentDetailsController extends Controller
{
    public function showStudentDetails()
    {

        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.student_detail_form', compact('admin'));
    }
    public function filterStudents(Request $request)
    {    $admin = Auth::guard('admins')->user();
        $hostel = $request->input('hostel');
        $blockIds = $request->input('blocks');

        $query = Student::with(['bed.room.block.hostel']);

        if ($hostel && $hostel !== 'all') {
            $query->whereHas('bed.room.block.hostel', function($q) use ($hostel) {
                $q->where('hostel_id', $hostel);
            });
        }

        if ($blockIds) {
            $query->whereHas('bed.room.block', function($q) use ($blockIds) {
            $q->whereIn('block_id', $blockIds );
        });
        }

        $students = $query->get();
        dd($students);

        return view('admins.registrar.student_detail_form', compact('students','admin'));
    }
    public function getBlocks($hostel)
    {
        $blocks = Block::where('hostel_id', $hostel)->get(['block_id', 'block_name']);
        return response()->json($blocks);
    }


    public function viewStudentDetails(Request $request)
    {
        $data=$request->validate([

        ]);

        $admin = Auth::guard('admins')->user();
        $students = Student::orderBy('adm_no')->get();
        return view('admins.registrar.student_list', compact('admin', 'students'));
    }

}
