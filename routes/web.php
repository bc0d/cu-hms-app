<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserComplaintsController;
use App\Http\Controllers\User\UserMessController;
use App\Http\Controllers\User\UserRoomController;

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


use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;




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
Route::post('user-logout', [LoginController::class, 'studentLogout'])->name('logout');

Route::get('user-signup', [RegisterController::class, 'signupPageFirst'])->name('signup');

Route::post('signup/step1', [RegisterController::class, 'signupStep1'])->name('signupstep1');

Route::get('user-signup-dtls', [RegisterController::class, 'signupPageFinal']);

Route::post('signup/step2', [RegisterController::class, 'signupStep2'])->name('signupstep2');



Route::get('user-mail-confirm', function() {
    return view('users.mailconfirm');
});


Route::get('/', function() {
    return view('index');
});




Route::middleware(['auth:students'])->prefix('user')->group(function () {

    //index
    Route::get('dashboard', [UserDashboardController::class, 'showDashboard'])->name('dashboard');
    Route::prefix('profile')->group(function () {

        //profile
        Route::get('/', [UserProfileController::class, 'showStudentProfile']);
        //Detailed profile
        Route::get('detailed', [UserProfileController::class, 'showMoreDetails']);
        //password reset
        Route::get('password-reset', [ResetPasswordController::class, 'showPasswordReset']);
        Route::post('reset', [ResetPasswordController::class, 'passwordReset'])->name('reset');
    });

    
    

    //qr
    Route::get('my-qr',function(){
        return view('users.qr');
    });

    //complaint
    Route::prefix('complaints')->group(function () {

        //complaint-index
        Route::get('/', [UserComplaintsController::class, 'showComplaintSection']);
        //complaint register
        Route::get('register', [UserComplaintsController::class, 'showComplaintRegister']);
        Route::post('register-complaint', [UserComplaintsController::class, 'registerComplaint'])->name('register-complaint');
        //my-complaint
        Route::get('my-complaints', [UserComplaintsController::class, 'showMyComplaints']);
    });

    //notice board

    //mess
    Route::prefix('mess')->group(function () {

        //complaint-index
        Route::get('/', [UserMessController::class, 'showMessSection']);
        //mess attendance
        Route::get('attendance', [UserMessController::class, 'showMessAttendance']);
        //mess-in-out
        Route::get('in-out', [UserMessController::class, 'showMessStatus']);
        //messbill
        Route::get('bill', [UserMessController::class, 'showMessBill']);
        //mess-payment
        Route::get('payment', [UserMessController::class, 'showMessPayment']);    
    });


    //start of room
    Route::prefix('room')->group(function () {

        //complaint-index
        Route::get('/', [UserRoomController::class, 'showRoomSection']);
        //room rent
        Route::prefix('room-rent')->group(function () {

            Route::get('/', [UserRoomController::class, 'showRoomRent']);
            Route::get('payment', [UserRoomController::class, 'showRoomRentPayment']);
            Route::get('status', [UserRoomController::class, 'showRoomRentStatus']);
        });

        //other-bill-room
        Route::get('other-bill', [UserRoomController::class, 'showOtherBill']); 
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