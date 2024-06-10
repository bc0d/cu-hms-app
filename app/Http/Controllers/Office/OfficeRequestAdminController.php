<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RequestAdmin;

class OfficeRequestAdminController extends Controller
{
    public function showRequestForm() {

        $admin = Auth::guard('admins')->user();
        return view('admins.office.request_admin_form', compact('admin'));
    }

    public function requestadmin(Request $request) {
        // Validate the request data
        $validatedData = $request->validate([
            'admin_id' => 'required',
            'title' => 'required',
            'category' => 'required',
            'message' => 'required|string',
        ]);

        // Create the request admin entry using the validated data
        $adminReq = new RequestAdmin();
        $adminReq->admin_id = $validatedData['admin_id'];
        $adminReq->title = $validatedData['title'];
        $adminReq->category = $validatedData['category'];
        $adminReq->message = $validatedData['message'];
        $adminReq->save();
        // Redirect back to the previous page with a success message
        return redirect()->back()->with('message', 'Request submitted successfully!');
    } 
}
