<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Department;
use App\Models\Course;
use App\Models\Student;
use App\Models\Block;
use Illuminate\Http\Request;

class StudentDetailsController extends Controller
{
    public function showCard()
    {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.student_list_card', compact('admin'));
    }

    public function showAllStudentDetails()
    {
        // Get the authenticated admin user
        $admin = Auth::guard('admins')->user();

        // Check the admin's access type and fetch students accordingly
        if ($admin->access === 'mens') {
            // Fetch all male students
            $students = Student::where('gender', 'male')->get();
        } elseif ($admin->access === 'womens') {
            // Fetch all female students
            $students = Student::where('gender', 'female')->get();
        } else {
            // Fetch all students if no specific access type is specified
            $students = Student::all();
        }



        // Return the view with the students and admin data
        return view('admins.office.student_list', compact('students', 'admin'));
    }

    public function showStudentProfileDetails($id)
    {


        // Get the authenticated admin user
        $admin = Auth::guard('admins')->user();
        $student = Student::findOrFail($id);
        // Find the course related to the student
        $course = Course::findOrFail($student->course);
        // Find the department related to the course
        $department = Department::where('department_id', $course->department_id)->first();


        // Retrieve the course name and department name
        $courseName = $course->course_name;
        $departmentName = $department->department_name;
        return view('admins.registrar.student_detail', compact('admin', 'student', 'courseName', 'departmentName'));
    }
    /*
    public function showAllStudentDetails() {
        // Get the authenticated admin user
        $admin = Auth::guard('admins')->user();
        $students = Student::all(); // Fetch all students
        // Check if the authenticated admin has "mens" access
        if ($admin->access === 'mens') {
            // Fetch all male students
            $students = Student::where('gender', 'male')->get();
            
            // Return the view with the male students and admin data
            return view('admins.office.student_list', compact('students', 'admin'));
        } 
        elseif ($admin->access === 'womens'){
            $students = Student::where('gender', 'female')->get();
                
                // Return the view with the male students and admin data
                return view('admins.office.student_list', compact('students', 'admin'));
            } 
    }
*/
    /*
   public function showAllStudentList() {
      
        $students = Student::all(); // Fetch all students
        $admin = Auth::guard('admins')->user();
        return view('admins.office.student_list', compact('students', 'admin'));
    }*/

    public function showDetails()
    {

        $admin = Auth::guard('admins')->user();
        return view('admins.office.student_detail', compact('admin'));
    }
    public function showList()
    {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.student_list', compact('admin'));
    }


    public function filterStudents() {
        
        $admin = Auth::guard('admins')->user();
        return view('admins.office.student_filter', compact('admin'));
    }
    
    public function getBlocks($hostelId)
    {
        if ($hostelId === 'all') {
            return response()->json([]);
        }

        $blocks = Block::where('hostel_id', $hostelId)->get();
        return response()->json($blocks);
    }

    public function getStudents(Request $request)
    {
        $blockIds = $request->input('blocks');


        if (in_array('all', $blockIds)){
            $students = Student::with(['bed.room.block.hostel'])->get();
        } else {
            $students = Student::whereHas('bed.room.block', function($query) use ($blockIds) {
                $query->whereIn('block_id', $blockIds);
            })->with(['bed.room.block.hostel'])->get();
        }
        return response()->json($students);
    }




}
