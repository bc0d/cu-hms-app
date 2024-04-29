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

/* 
----------------Office staff-----------------------
*/

Route::prefix('office')->group(function () {

    //index
    Route::get('index', function() {
        return view('admins.office.dashboard');
    });

    //student card
    Route::prefix('student')->group(function () {
        
        Route::get('card', [StudentDetailsController::class, 'showCard']);
        Route::get('list', [StudentDetailsController::class, 'showList']);
        Route::get('detail', [StudentDetailsController::class, 'showDetails']);
    });

    //rooms details card
    Route::prefix('room-details')->group(function () {

        Route::get('card', [RoomDetailsController::class, 'showCard']);
        Route::get('list', [RoomDetailsController::class, 'roomDetails']);

    });
    

    //Complaints
    Route::get('complaints', [ComplaintsController::class, 'showComplaints']);

    //admission card
    Route::prefix('admission')->group(function () {

        Route::get('request', [HostelAdmissionOfficeController::class, 'showRequests']);
        Route::get('action', [HostelAdmissionOfficeController::class, 'admissionAction']);
        
    });


    //room allocation
    Route::prefix('room')->group(function () {

        Route::get('allocation-list', [RoomAllocationController::class, 'showRoomAllocList']);
        Route::get('allocation', [RoomAllocationController::class, 'roomAllocAction']);

    });
    

    //room channge card
    Route::prefix('room-change')->group(function () {


        Route::get('request', [RoomChangeController::class, 'showRoomChangeReq']);
        Route::get('action', [RoomChangeController::class, 'roomChangeAction']);

    });
    

    //vacating card
    Route::prefix('vacate')->group(function () {
        
        Route::get('request', [HostelVacateOfficeController::class, 'showRequests']);
        Route::get('action', [HostelVacateOfficeController::class, 'vacateAction']);

    });
    

    //fee card
    Route::prefix('fee')->group(function () {

        Route::get('card', [FeeAndPaymentController::class, 'showCard']);
        Route::get('room-rent', [FeeAndPaymentController::class, 'roomRentDetails']);

        //fee maintanance
        Route::get('maintanance', [FeeAndPaymentController::class, 'feeMaintanance']);
        Route::get('updation', [FeeAndPaymentController::class, 'feeUpdate']);

    });

    //rules and notice card
    Route::prefix('rules')->group(function () {

        Route::get('card', [RuleAndNoticeController::class, 'showCard']);
        Route::get('rule-list', [RuleAndNoticeController::class, 'viewRules']);
        Route::get('rule-add', [RuleAndNoticeController::class, 'addRule']);
    });
    

});





