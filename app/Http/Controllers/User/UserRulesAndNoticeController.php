<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Rule;
use App\Models\Notice;

class UserRulesAndNoticeController extends Controller
{
    public function showCard() {
        $student = Auth::guard('students')->user();
        return view('users.rules_and_notice', compact('student'));
    }

    public function viewRules() {
        $student = Auth::guard('students')->user();
        $rules = Rule::all();
        return view('users.rules_list', compact('student','rules'));
    }

    public function viewNotices() {
        $student = Auth::guard('students')->user();
        $notices = Notice::all();
        return view('users.notice_list',compact('student','notices'));
    }

    
}
