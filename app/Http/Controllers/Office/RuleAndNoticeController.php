<?php

namespace App\Http\Controllers\Office;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Rule;
use App\Models\Notice;

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

    public function viewNotices() {
        $admin = Auth::guard('admins')->user();
        $notices = Notice::all();
        return view('admins.office.notice_list',compact('admin','notices'));
    }

    public function viewAddNotice() {
        $admin = Auth::guard('admins')->user();
        return view('admins.office.notice_add',compact('admin'));
    }

    public function addNotice(Request $request) {
        $admin = Auth::guard('admins')->user();
        $noticeData=$request->validate([
            'newNotice' => 'required',
            'noticeSubject' => 'required|string',

        ]);
    

        $file = $request->file('newNotice');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'-'.$noticeData['noticeSubject'].'.'.$extension;
        $path = 'data/notice/';
        $file->move($path, $filename);

        $notice = new Notice();
        $notice->title = $request->noticeSubject;
        $notice->publishedby = $admin->admin_id;
        $notice->path = $path.$filename;
        $notice->save();

        return redirect('office/rules/notice-list');

    }
   

    public function removeNotice(Request $request) {

        $data = $request->validate(['noticeId' => 'required|string']);
        $notice = Notice::findOrFail($data['noticeId']);
        $notice->delete();
        return redirect()->back();
    
    }

    
    


}
