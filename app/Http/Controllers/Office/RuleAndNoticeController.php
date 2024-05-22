<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RuleAndNoticeController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.rules_card', compact('admin'));
    }

    public function viewRules() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.rules_list', compact('admin'));
    }

    public function addRule() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.rules_add', compact('admin'));
    }
}
