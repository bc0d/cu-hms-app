<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Rule;

class RuleAndNoticeController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.rules_card', compact('admin'));
    }

    public function viewRules() {
        $admin = Auth::guard('admins')->user();
        $rules = Rule::all();
        return view('admins.office.rules_list', compact('admin','rules'));
        
    }

    public function viewAddRule() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.rules_add', compact('admin'));
    }

    public function addRule(Request $request) {
        $admin = Auth::guard('admins')->user();
        $data = $request->validate([
            'ruleName' => 'required|string',
            'ruleDesc' => 'required|string',
        ]);
        $rules = new Rule();
        $rules->title = $data['ruleName'];
        $rules->description = $data['ruleDesc'];
        $rules->updatedby = $admin->admin_id;
        $rules->save();
        return redirect()->intended('office/rules/rule-list');
    }
    
    public function removeRule(Request $request) {

        $data = $request->validate(['ruleId' => 'required|string']);
        $rule = Rule::findOrFail($data['ruleId']);
        $rule->delete();
        return redirect()->back();
    
    }

    
    


}
