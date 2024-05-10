<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Users\UserController;

use App\Http\Controllers\Office\StudentDetailsController;
use App\Http\Controllers\Office\HostelAdmissionOfficeController;
use App\Http\Controllers\Office\HostelVacateOfficeController;
use App\Http\Controllers\Office\RoomAllocationController;
use App\Http\Controllers\Office\RoomChangeController;
use App\Http\Controllers\Office\RoomDetailsController;
use App\Http\Controllers\Office\ComplaintsController;
use App\Http\Controllers\Office\FeeAndPaymentController;
use App\Http\Controllers\Office\RuleAndNoticeController;
/*mess controllers */


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


Route::prefix('user')->group(function () {
    //index
    Route::get('index', function () {
        return view('users.index');
    });
    //profile
    Route::get('profile', function() {
        return view('users.profile');
    });
    //Detailed profile
    Route::get('moreprofile',function(){
        return view('users.profileDetailed');
    });
    //password rest
    Route::get('password-reset',function(){
        return view('users.password_reset');
    });

    //qr
    Route::get('my-qr',function(){
        return view('users.qr');
    });

    //complaint
    Route::prefix('complaints')->group(function () {
        //complaint-index
        Route::get('/',function(){
            return view('users.complaints_index');
        });
        

        //complaint register
        Route::get('register',function(){
            return view('users.complaint_register');
        });

        //my-complaint
        Route::get('my-complaints',function(){
            return view('users.complaints_my');
        });
         
    //end of complaint
    });

    //notice board

    //mess
    Route::prefix('mess')->group(function () {
        //complaint-index
        Route::get('/',function(){
            return view('users.mess_index');
        });

        //mess attendance
        Route::get('attendance',function(){
            return view('users.attendance');
        });
        

        //mess-in-out
        Route::get('in-out',function(){
            return view('users.mess_in_out');
        });

        //messbill
        Route::get('bill',function(){
            return view('users.mess_bill');
        });

        //mess-payment
        Route::get('payment',function(){
            return view('users.mess_payment');
        });

        
    //end of mess   
    
    });
    //start of room
    Route::prefix('room')->group(function () {
        //complaint-index
        Route::get('/',function(){
            return view('users.room_index');
        });
    
        //room rent
        Route::prefix('room-rent')->group(function () {
            Route::get('/',function(){
                return view('users.room_rent');
            });
            Route::get('payment',function(){
                return view('users.room_rent_payment');
            });
            Route::get('status',function(){
                return view('users.room_rent_status');
            });
        });
        
        
        //other-bill-room
        Route::get('other-bill',function(){
            return view('users.room_other_bill');
        }); 
        
    });//end of room

    //room change
    Route::get('room-change',function(){
        return view('users.room_change');
    }); 
    //notice
    Route::get('notice',function(){
        return view('users.notice');
    });
    //fee-pending-status
    Route::get('fee-pending-status',function(){
        return view('users.fee_pending_status');
    });
    //feedback
    Route::prefix('feedback')->group(function () {
        
        Route::get('/',function(){
            return view('users.feedback_index');
        });
        //give feedback
        Route::get('give-feedback',function(){
            return view('users.feedback_give');
        });
    });
       
    //notification
    Route::get('notification',function(){
        return view('users.notification');
    }); 
    Route::get('test',function(){
        return view('users.feeed');
    }); 
//end of user
}); 


/*

//mess bill and roomrent payment
Route::prefix('user/payment')->group(function () {
    Route::get('',function(){
        return view('users.paymentlink');
    })->name('paymentlink');
    Route::get('paymentlink',function(){
        return view('users.paymentlink');
    })->name('paymentlink');
    
    
    //mess bill calculate and pay
  
});
*/




 


Route::get('feedback',function(){
    return view('users.feedback');
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








