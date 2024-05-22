<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class OfficeProfileController extends Controller
{
    public function showOfficeProfile() {
        
        $admin = Auth::guard('admins')->user();
        
        return view('admins.office.office_profile', compact('admin'));
    }
}
