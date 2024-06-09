<?php

namespace App\Http\Controllers\Registrar;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\RequestAdmin;
use Illuminate\Http\Request;

class RegistarRequestToAdminController extends Controller
{
    public function requestadmin(Request $request) {
        
        $admin = Auth::guard('admins')->user();








        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255', // Title is required, must be a string, and should not exceed 255 characters
            'category' => 'required|string', // Category is required and must be a string
            'message' => 'required|string' // Message is required and must be a string
        ]);

        // Create the request admin entry using the validated data
        RequestAdmin::create([
            'admin_id' => Auth::id(), // Get the ID of the currently authenticated admin
            'title' => $validatedData['title'], // Assign the validated title
            'category' => $validatedData['category'], // Assign the validated category
            'message' => $validatedData['message'] // Assign the validated message
        ]);

        // Redirect back to the previous page with a success message
        return redirect()->back()->with('message', 'Request submitted successfully!');
    } 
}




