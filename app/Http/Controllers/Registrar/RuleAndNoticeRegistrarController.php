<?php

namespace App\Http\Controllers\Registrar;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RuleAndNoticeRegistrarController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.rules_card', compact('admin'));
    }

    public function viewRules() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.rules_list', compact('admin'));
    }

    public function addRule() {
        $admin = Auth::guard('admins')->user();
        return view('admins.registrar.rules_add', compact('admin'));
    }
}
