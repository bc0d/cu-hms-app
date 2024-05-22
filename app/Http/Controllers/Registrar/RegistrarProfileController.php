<?php

namespace App\Http\Controllers\Registrar;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegistrarProfileController extends Controller
{
    public function showRegistrarProfile() {
        
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.profile', compact('admin'));
    }
}
