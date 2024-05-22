<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RuleAndNoticeAdminController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.rules_card', compact('admin'));
    }

    public function viewRules() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.rules_list', compact('admin'));
    }

    public function addRule() {
        $admin = Auth::guard('admins')->user();
        return view('admins.superUser.rules_add', compact('admin'));
    }
}
