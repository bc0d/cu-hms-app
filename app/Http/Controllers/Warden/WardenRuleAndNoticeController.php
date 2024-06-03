<?php

namespace App\Http\Controllers\Warden;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Rule;
use App\Models\Notice;

class WardenRuleAndNoticeController extends Controller
{
    public function showCard() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.rules_card',compact('admin'));
    }

    public function viewRules() {
        $admin = Auth::guard('admins')->user();
        if($admin->access === 'mens') {
            $rules = Rule::where('hostel_id', '1')->get();
            return view('admins.warden.rules_list',compact('admin','rules'));
        } else {
            $rules = Rule::where('hostel_id', '2')->get();
            return view('admins.warden.rules_list',compact('admin','rules'));
        }
        
    }

    public function viewAddRule() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.rules_add', compact('admin'));
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
        if($admin->access === 'mens') {
            $rules->hostel_id = '1';
        } else {
            $rules->hostel_id = '2';
        }
        $rules->save();
        return redirect()->back()->with('message', 'Rule added');
    }
    
    public function removeRule(Request $request) {

        $data = $request->validate(['ruleId' => 'required|string']);
        $rule = Rule::findOrFail($data['ruleId']);
        $rule->delete();
        return redirect()->back()->with('message', 'Rule removed');
    
    }

    public function viewNotices() {
        $admin = Auth::guard('admins')->user();
        if($admin->access === 'mens') {
            $notices = Notice::where('hostel_id', '1')->get();
            return view('admins.warden.notice_list',compact('admin','notices'));
        } else {
            $notices = Notice::where('hostel_id', '2')->get();
            return view('admins.warden.notice_list',compact('admin','notices'));
        }
    }

    public function viewAddNotice() {
        $admin = Auth::guard('admins')->user();
        return view('admins.warden.notice_add',compact('admin'));
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
        if($admin->access === 'mens') {
            $notice->hostel_id = '1';
        } else {
            $notice->hostel_id = '2';
        }
        $notice->save();

        return redirect()->back()->with('message', 'Notice added');

    }
   

    public function removeNotice(Request $request) {

        $data = $request->validate(['noticeId' => 'required|string']);
        $notice = Notice::findOrFail($data['noticeId']);
        $notice->delete();
        return redirect()->back()->with('message', 'Notice removed');
    
    }
}
