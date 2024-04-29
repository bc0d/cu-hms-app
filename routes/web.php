<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Office\StudentDetailsController;
use App\Http\Controllers\Office\HostelAdmissionOfficeController;
use App\Http\Controllers\Office\HostelVacateOfficeController;
use App\Http\Controllers\Office\RoomAllocationController;
use App\Http\Controllers\Office\RoomChangeController;
use App\Http\Controllers\Office\RoomDetailsController;
use App\Http\Controllers\Office\ComplaintsController;
use App\Http\Controllers\Office\FeeAndPaymentController;
use App\Http\Controllers\Office\RuleAndNoticeController;

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
    return view('users.index');
});

Route::get('home', function () {
    return view('users.homePage');
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