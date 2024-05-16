<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RuleAndNoticeAdminController extends Controller
{
    public function showCard() {
        return view('admins.superUser.rules_card');
    }

    public function viewRules() {
        return view('admins.superUser.rules_list');
    }

    public function addRule() {
        return view('admins.superUser.rules_add');
    }
}
