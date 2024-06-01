<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Notification;

class UserNotificationController extends Controller
{
    public function showNotifications() {

        $student = Auth::guard('students')->user();
        $notifications = Notification::where('student_id', $student->student_id)->latest()->get();

        return view('users.notifications', compact('student', 'notifications'));
    }
}
