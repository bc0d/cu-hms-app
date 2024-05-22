<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SuperUserProfileController extends Controller
{
    public function showSuperUserProfile() {
        
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.profile', compact('admin'));
    }
}
