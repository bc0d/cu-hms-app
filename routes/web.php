<?php

use Illuminate\Support\Facades\Route;




use App\Http\Controllers\SuperUser\StudentDetailsAdminController;
use App\Http\Controllers\SuperUser\HostelAdmissionAdminController;
use App\Http\Controllers\SuperUser\HostelVacateAdminController;
use App\Http\Controllers\SuperUser\RoomAllocationAdminController;
use App\Http\Controllers\SuperUser\RoomChangeAdminController;
use App\Http\Controllers\SuperUser\RoomDetailsAdminController;
use App\Http\Controllers\SuperUser\ComplaintsAdminController;
use App\Http\Controllers\SuperUser\FeeAndPaymentAdminController;
use App\Http\Controllers\SuperUser\RuleAndNoticeAdminController;



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



use App\Http\Controllers\Warden\WardenComplaintsController;
use App\Http\Controllers\Warden\WardenStudentDetailsController;
use App\Http\Controllers\warden\HostelAdmissionWardenController;
use App\Http\Controllers\warden\HostelVacateWardenController;
use App\Http\Controllers\warden\WardenFeeAndPaymentController;
use App\Http\Controllers\warden\WardenRoomDetailsController;
use App\Http\Controllers\warden\WardenRuleAndNoticeController;

use App\Http\Controllers\Hod\HostelAdmissionHodController;
use App\Http\Controllers\Hod\HostelVacateHodController;
use App\Http\Controllers\Hod\StudentDetailsHodController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;



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




Route::get('user-login', [LoginController::class, 'showStudentLogin']);
Route::post('user-login', [LoginController::class, 'studentLogin'])->name('login');

Route::get('user-signup', [RegisterController::class, 'signupPageFirst']);

Route::post('signup/step1', [RegisterController::class, 'signupStep1'])->name('signupstep1');

Route::get('user-signup-dtls', [RegisterController::class, 'signupPageFinal']);

Route::post('signup/step2', [RegisterController::class, 'signupStep2'])->name('signupstep2');

Route::get('user-mail-confirm', function() {
    return view('users.mailconfirm');
});

Route::middleware(['auth:students'])->prefix('user')->group(function() {
    Route::get('dashboard', function() {
        return view('index');
    })->name('dashboard');
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





/*=============================================================================================================================================================*/

/*===================================================================ADMIN-SIDE-ROUTING========================================================================*/

/*=============================================================================================================================================================*/



//Admin logins

Route::get('admin-login', [LoginController::class, 'showAdminLogin']);
Route::post('admin-login', [LoginController::class, 'adminLogin'])->name('admin.login');

/*
-------------------HOD----------------
*/
Route::prefix('hod')->group(function () {

    //index
    Route::get('index', function() {
        return view('admins.hod.dashboard');
    });

    //allocation request
    Route::prefix('allocation')->group(function () {

        Route::get('request', [HostelAdmissionHodController::class, 'showRequests']);
        Route::get('action', [HostelAdmissionHodController::class, 'admissionAction']);
        
    });

    //vacating request
    Route::prefix('vacate')->group(function () {
        
        Route::get('request', [HostelVacateHodController::class, 'showRequests']);
        Route::get('action', [HostelVacateHodController::class, 'vacateAction']);

    });

    Route::prefix('students-details')->group(function () {

        Route::get('list', [StudentDetailsHodController::class, 'showList']);
        Route::get('profile-details', [StudentDetailsHodController::class, 'profileDetails']);

    });
    
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



/*
---------------------warden-----------------------
*/

Route::prefix('warden')->group(function() {
    //dashboard
    Route::get('index', function() {
        return view('admins.warden.dashboard');
    });

    //student card
    Route::prefix('student')->group(function () {
        
        Route::get('card', [WardenStudentDetailsController::class, 'showCard']);
        Route::get('list', [WardenStudentDetailsController::class, 'showList']);
        Route::get('detail', [WardenStudentDetailsController::class, 'showDetails']);
    });
    
    //admission card
    Route::prefix('admission')->group(function () {

        Route::get('request', [HostelAdmissionWardenController::class, 'showRequests']);
        Route::get('action', [HostelAdmissionWardenController::class, 'admissionAction']);
        
    });

    //vacating card
    Route::prefix('vacate')->group(function () {
        
        Route::get('request', [HostelVacateWardenController::class, 'showRequests']);
        Route::get('action', [HostelVacateWardenController::class, 'vacateAction']);

    });

    //rooms details card
    Route::prefix('room-details')->group(function () {

        Route::get('card', [WardenRoomDetailsController::class, 'showCard']);
        Route::get('list', [WardenRoomDetailsController::class, 'roomDetails']);

    });

    //fee card
    Route::prefix('fee')->group(function () {

        Route::get('card', [WardenFeeAndPaymentController::class, 'showCard']);
        Route::get('room-rent', [WardenFeeAndPaymentController::class, 'roomRentDetails']);

        //fee maintanance
        Route::get('maintanance', [WardenFeeAndPaymentController::class, 'feeMaintanance']);
        Route::get('updation', [WardenFeeAndPaymentController::class, 'feeUpdate']);

    });

    //rules and notice card
    Route::prefix('rules')->group(function () {

        Route::get('card', [WardenRuleAndNoticeController::class, 'showCard']);
        Route::get('rule-list', [WardenRuleAndNoticeController::class, 'viewRules']);
        Route::get('rule-add', [WardenRuleAndNoticeController::class, 'addRule']);
        Route::get('notice-list',[WardenRuleAndNoticeController::class, 'viewNotices']);
        Route::get('notice-add',[WardenRuleAndNoticeController::class, 'addNotice']);
    });

    //Complaints registry
    Route::get('complaints', [WardenComplaintsController::class, 'showComplaints']);

});



/* 
----------------Superuser staff-----------------------
*/

Route::prefix('super-user')->group(function () {

    //index
    Route::get('index', function() {
        return view('admins.superUser.dashboard');
    });

    //student card
    Route::prefix('student')->group(function () {
        
        Route::get('card', [StudentDetailsAdminController::class, 'showCard']);
        Route::get('list', [StudentDetailsAdminController::class, 'showList']);
        Route::get('detail', [StudentDetailsAdminController::class, 'showDetails']);
    });

    //rooms details card
    Route::prefix('room-details')->group(function () {

        Route::get('card', [RoomDetailsAdminController::class, 'showCard']);
        Route::get('list', [RoomDetailsAdminController::class, 'roomDetails']);

    });
    

    //Complaints
    Route::get('complaints', [ComplaintsAdminController::class, 'showComplaints']);

    //admission card
    Route::prefix('admission')->group(function () {

        Route::get('request', [HostelAdmissionAdminController::class, 'showRequests']);
        Route::get('action', [HostelAdmissionAdminController::class, 'admissionAction']);
        
    });


    //room allocation
    Route::prefix('room')->group(function () {

        Route::get('allocation-list', [RoomAllocationAdminController::class, 'showRoomAllocList']);
        Route::get('allocation', [RoomAllocationAdminController::class, 'roomAllocAction']);

    });
    

    //room channge card
    Route::prefix('room-change')->group(function () {


        Route::get('request', [RoomChangeAdminController::class, 'showRoomChangeReq']);
        Route::get('action', [RoomChangeAdminController::class, 'roomChangeAction']);

    });
    

    //vacating card
    Route::prefix('vacate')->group(function () {
        
        Route::get('request', [HostelVacateAdminController::class, 'showRequests']);
        Route::get('action', [HostelVacateAdminController::class, 'vacateAction']);

    });
    

    //fee card
    Route::prefix('fee')->group(function () {

        Route::get('card', [FeeAndPaymentAdminController::class, 'showCard']);
        Route::get('room-rent', [FeeAndPaymentAdminController::class, 'roomRentDetails']);

        //fee maintanance
        Route::get('maintanance', [FeeAndPaymentAdminController::class, 'feeMaintanance']);
        Route::get('updation', [FeeAndPaymentAdminController::class, 'feeUpdate']);

    });

    //rules and notice card
    Route::prefix('rules')->group(function () {

        Route::get('card', [RuleAndNoticeAdminController::class, 'showCard']);
        Route::get('rule-list', [RuleAndNoticeAdminController::class, 'viewRules']);
        Route::get('rule-add', [RuleAndNoticeAdminController::class, 'addRule']);
    });
    

});


/*---------mess dashboard-----------
*/ 
Route::prefix('mess-index')->group(function () {

    Route::get('/', function() {
        return view('admins.mess.dashboard');
    });
    Route::prefix('take-attendance')->group(function () {
        Route::get('/', function() {
            return view('admins.mess.attendance_take');
        });
        Route::get('scan-qr', function() {
            return view('admins.mess.scan_qr');
        });
        Route::get('profile', function() {
            return view('admins.mess.attendance_profile');
        });
        
    });
    
    Route::prefix('mess-menu')->group(function () {
        Route::get('/', function() {
        return view('admins.mess.menu');
        });
        Route::get('view', function() {
            return view('admins.mess.menu_view');
        });
        Route::get('edit', function() {
                return view('admins.mess.menu_edit');
        });
    });
    
    Route::prefix('purchase-and-bills')->group(function () {
        Route::get('/', function() {
            return view('admins.mess.bill_and_purchase');
        });
        Route::get('purchase-bill', function() {
            return view('admins.mess.bill_purchase');
        });
        Route::get('student-bill', function() {
            return view('admins.mess.bill_student');
        });
        
    });
    
    Route::get('view-attendance', function() {
        return view('admins.mess.attendance_view');
    });
    Route::prefix('rules-and-notices')->group(function () {
        Route::get('/', function() {
            return view('admins.mess.rules_notices_card');                                    
        });
        Route::get('rules-list', function() {
            return view('admins.mess.rules_list');                                    
        });
        Route::get('rules-add', function() {
            return view('admins.mess.rules_add');                                    
        });
        Route::get('notices-list', function() {
            return view('admins.mess.notice_list');
        });
        Route::get('notices-add', function() {
            return view('admins.mess.notice_add');
        });
    });

    Route::get('complaints', function() {
        return view('admins.mess.complaints');
    });
   

});
