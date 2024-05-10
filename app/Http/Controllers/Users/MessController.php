<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessController extends Controller
{
    public function dashboard()
    {
        // Your logic here
        return view('messdashboard'); // Return the view for the mess dashboard
    }
}

