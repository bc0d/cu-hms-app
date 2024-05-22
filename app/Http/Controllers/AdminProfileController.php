<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function showAdminProfile() {
        
        
        return view('admins.admin_profile');
    }

}
