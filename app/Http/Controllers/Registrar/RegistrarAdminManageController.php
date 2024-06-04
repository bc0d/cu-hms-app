<?php

namespace App\Http\Controllers\Registrar;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Department;

class RegistrarAdminManageController extends Controller
{
    public function showAdmins() {

        $admin = Auth::guard('admins')->user();
        $admins = Admin::all();
        return view('admins.registrar.admins_list', compact('admin', 'admins'));

    }

    public function viewAdmin($id) {

    }

    public function viewAdminAdd() {

        $admin = Auth::guard('admins')->user();
        $departments = Department::all();
        return view('admins.registrar.admins_add', compact('admin', 'departments'));
    }

    public function adminAdd(Request $request) {

        $messages = [
            'password.confirmed' => 'The password and confirmation password do not match.',
        ];
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:admins,email',
            'department' => 'required|string',
            'designation' => 'required|string',
            'access' => 'required|string',
            'password' => 'required|string|min:8|confirmed'
        ], $messages);
        $data['password'] = Hash::make($data['password']);
        $admin = Admin::create($data);
        return redirect()->back()->with('message', 'Admin added successfully');
    }

    public function removeAdmin(Request $request) {

        $data = $request->validate([
            'admin' => 'required',
        ]);
        $admin = Admin::findOrFail($data['admin']);
        $admin->delete();

        return redirect()->back()->with('message', 'Record deleted');
    }
}
