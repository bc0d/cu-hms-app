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
Route::get('user-home', function() {
    return view('users.homePage');
});
Route::get('user-profile', function() {
    return view('users.profile');
});
Route::get('user-profile-detials',function(){
    return view('users.profiledetialed');
});
Route::get('testing',function(){
    return view('users.testing');
});
Route::get('feedback',function(){
    return view('users.feedback');
})->name('feedback');
Route::get('payment-link',function(){
    return view('users.paymentlink');
})->name('paymentlink');
Route::get('complaint',function(){
    return view('users.complaint');
})->name('complaint');
Route::get('messbill',function(){
    return view('users.messbill');
})->name('messbillfp');
Route::get('notificationfull',function(){
    return view('users.notificationfull');
});
Route::get('attendance',function(){
    return view('users.attendance');
});


