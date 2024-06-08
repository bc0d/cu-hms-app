<?php

namespace App\Http\Controllers\Hod;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Fee;
use App\Models\Hostel;
use App\Models\RoomRent;
use App\Models\WaterElectricBill;
use App\Models\Department;

class HodFeeAndPaymentController extends Controller
{
    public function showBills() {
        $admin = Auth::guard('admins')->user();
        return view('admins.hod.bills_card', compact('admin'));
    }

    public function roomRentDetails() {
        // Get the authenticated admin user
        $admin = Auth::guard('admins')->user();
        //find the department related to the admin
        $department = Department::where('hod', $admin->admin_id)->first();
        //retrieve the rent details of the students related to the department
        $rents = RoomRent::with('student')->whereHas('student', function ($query) use ($department) {
            $query->where([
                ['status', 'Active'],
                ['department', $department->department_id]
            ]);
        })->get();
        //Return the view with the retrieved data
        return view('admins.hod.bill_room', compact('admin', 'rents'));
    }

    public function waterElectricBills() {
        //get the authenticated user admin
        $admin = Auth::guard('admins')->user();
        //get the department related to the admin
        $department = Department::where('hod', $admin->admin_id)->first();
        //retrieve the bill details of the students related to the department
        $bills = WaterElectricBill::with('student')->whereHas('student', function ($query) use ($department) {
            $query->where([
                ['status', 'Active'],
                ['department',$department->department_id]
            ]);
        })->get();
        //return the view with the retrieved data
        return view('admins.hod.bill_waterelectric', compact('admin', 'bills'));
    }
}

//---This page created for FEE and DUE