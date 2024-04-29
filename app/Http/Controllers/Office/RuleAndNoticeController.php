<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RuleAndNoticeController extends Controller
{
    public function showCard() {
        return view('admins.office.rules_card');
    }

    public function viewRules() {
        return view('admins.office.rules_list');
    }

    public function addRule() {
        return view('admins.office.rules_add');
    }
}
