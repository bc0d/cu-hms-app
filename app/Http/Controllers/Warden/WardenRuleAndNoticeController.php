<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WardenRuleAndNoticeController extends Controller
{
    public function showCard() {
        return view('admins.warden.rules_card');
    }

    public function viewRules() {
        return view('admins.warden.rules_list');
    }

    public function addRule() {
        return view('admins.warden.rules_add');
    }
    public function addNotice() {
        return view('admins.warden.notice_add');
    }
    public function viewNotices() {
        return view('admins.warden.notice_list');
    }
}
