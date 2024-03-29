<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('index');
});

Route::get('user-login', function () {
    return view('users.login');
});

Route::get('user-signup', function () {
    return view('users.signup_basic');
});

Route::get('user-signup-dtls', function () {
    return view('users.signup_details');
});

Route::get('user-mail-confirm', function() {
    return view('users.mailconfirm');
});





Route::get('admin-login', function() {
    return view('login');
});



Route::get('hod-index', function() {
    return view('admins.hod.dashboard');
});

Route::get('hod-request-allocation', function() {
    return view('admins.hod.allocation_req');
});

Route::get('hod-allocation-action', function() {
    return view('admins.hod.allocation_req_action');
});

Route::get('hod-request-vacating', function() {
    return view('admins.hod.vacate_req');
});

Route::get('hod-vacating-action', function() {
    return view('admins.hod.vacate_req_action');
});

Route::get('hod-students-list', function() {
    return view('admins.hod.students_list');
});

Route::get('hod-student-detail', function() {
    return view('admins.hod.student_detail');
});