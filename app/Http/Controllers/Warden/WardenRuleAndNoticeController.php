<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WardenRuleAndNoticeController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.rules_card',compact('admin'));
    }

    public function viewRules() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.rules_list',compact('admin'));
    }

    public function addRule() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.rules_add',compact('admin'));
    }
    public function addNotice() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.notice_add',compact('admin'));
    }
    public function viewNotices() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.notice_list',compact('admin'));
    }
}
