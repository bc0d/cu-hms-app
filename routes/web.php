<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserComplaintsController;
//use App\Http\Controllers\User\UserMessController;
use App\Http\Controllers\User\UserRoomController;
use App\Http\Controllers\User\UserFeedbackController;
use App\Http\Controllers\User\UserRulesAndNoticeController;
use App\Http\Controllers\User\UserFeeAndPaymentController;
use App\Http\Controllers\User\UserNotificationController;

use App\Http\Controllers\SuperUser\SuperUserDashboardController;
use App\Http\Controllers\SuperUser\SuperUserProfileController;
//use App\Http\Controllers\SuperUser\StudentDetailsAdminController;
use App\Http\Controllers\SuperUser\StudentDetailsAdminController;
use App\Http\Controllers\SuperUser\HostelAdmissionAdminController;
use App\Http\Controllers\SuperUser\HostelVacateAdminController;
use App\Http\Controllers\SuperUser\RoomAllocationAdminController;
use App\Http\Controllers\SuperUser\RoomChangeAdminController;
use App\Http\Controllers\SuperUser\RoomDetailsAdminController;
use App\Http\Controllers\SuperUser\ComplaintsAdminController;
use App\Http\Controllers\SuperUser\FeeAndPaymentAdminController;
use App\Http\Controllers\SuperUser\RuleAndNoticeAdminController;
use App\Http\Controllers\SuperUser\AdminManageController;


use App\Http\Controllers\Registrar\RegistrarDashboardController;
use App\Http\Controllers\Registrar\RegistrarProfileController;
use App\Http\Controllers\Registrar\StudentDetailsRegistrarController;
//use App\Http\Controllers\Registrar\HostelAdmissionRegistrarController;
//use App\Http\Controllers\Registrar\HostelVacateRegistrarController;
//use App\Http\Controllers\Registrar\RoomAllocationRegistrarController;
//use App\Http\Controllers\Registrar\RoomChangeRegistrarController;

use App\Http\Controllers\Registrar\RoomDetailsRegistrarController;
use App\Http\Controllers\Registrar\ComplaintsRegistrarController;
use App\Http\Controllers\Registrar\FeeAndPaymentRegistrarController;
use App\Http\Controllers\Registrar\RuleAndNoticeRegistrarController;
use App\Http\Controllers\Registrar\RegistrarStudentDetailsController;
use App\Http\Controllers\Registrar\RegistrarAdminManageController;
use App\Http\Controllers\Registrar\RegistarRequestToAdminController;




use App\Http\Controllers\Office\OfficeDashboardController;
use App\Http\Controllers\Office\OfficeProfileController;
use App\Http\Controllers\Office\StudentDetailsController;
//use App\Http\Controllers\Office\HostelAdmissionOfficeController;
use App\Http\Controllers\Office\HostelVacateOfficeController;
use App\Http\Controllers\Office\RoomAllocationController;
use App\Http\Controllers\Office\RoomChangeController;
use App\Http\Controllers\Office\RoomDetailsController;
use App\Http\Controllers\Office\ComplaintsController;
use App\Http\Controllers\Office\FeeAndPaymentController;
use App\Http\Controllers\Office\RuleAndNoticeController;

/*mess controllers */

use App\Http\Controllers\Warden\WardenDashboardController;
use App\Http\Controllers\Warden\WardenProfileController;
//use App\Http\Controllers\Warden\WardenComplaintsController;
use App\Http\Controllers\Warden\WardenStudentDetailsController;
use App\Http\Controllers\Warden\HostelAdmissionWardenController;
use App\Http\Controllers\Warden\HostelVacateWardenController;
use App\Http\Controllers\Warden\WardenFeeAndPaymentController;
use App\Http\Controllers\Warden\WardenRoomDetailsController;
use App\Http\Controllers\Warden\WardenRuleAndNoticeController;
use App\Http\Controllers\Warden\ComplaintsWardenController;

use App\Http\Controllers\Hod\HostelAdmissionHodController;
use App\Http\Controllers\Hod\HostelVacateHodController;
use App\Http\Controllers\Hod\StudentDetailsHodController;
use App\Http\Controllers\Hod\HodDashboardController;
use App\Http\Controllers\Hod\HodProfileController;


// use App\Http\Controllers\Mess\DashboardMessController;
// use App\Http\Controllers\Mess\ProfileMessController;
// use App\Http\Controllers\Mess\ComplaintsMessController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;

use App\Http\Controllers\PaymentGatewayController;


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
Route::get('/horizon', function () {
    return view('horizon');
});



Route::get('login', [LoginController::class, 'showStudentLogin']);
Route::post('login', [LoginController::class, 'studentLogin'])->name('login');
Route::post('user-logout', [LoginController::class, 'studentLogout'])->name('logout');

Route::get('user-signup', [RegisterController::class, 'signupPageFirst'])->name('signup');

Route::post('signup/step1', [RegisterController::class, 'signupStep1'])->name('signupstep1');

Route::get('user-signup-dtls', [RegisterController::class, 'signupPageFinal']);

Route::post('signup/step2', [RegisterController::class, 'signupStep2'])->name('signupstep2');



Route::get('user-mail-confirm', function () {
    return view('users.auth.mailconfirm');
});


Route::get('/', function () {
    return view('index');
});

//payment gateway
Route::get('payment-gateway', [PaymentGatewayController::class, 'showPaymentGateway']);
Route::post('payment-gateway/payment', [PaymentGatewayController::class, 'makePayment'])->name('payment.makepay');

//user start
Route::middleware(['auth:students'])->prefix('user')->group(function () {

    //index
    Route::get('dashboard', [UserDashboardController::class, 'showDashboard'])->name('dashboard');

    //profile------------------------------->okay
    Route::prefix('profile')->group(function () {

        //profile
        Route::get('/', [UserProfileController::class, 'showStudentProfile']);
        //Detailed profile
        Route::get('detailed', [UserProfileController::class, 'showMoreDetails']);
        //password reset
        Route::get('password-reset', [ResetPasswordController::class, 'showPasswordReset']);
        Route::post('reset', [ResetPasswordController::class, 'passwordReset'])->name('reset');
    });

    // //qr
    // Route::get('my-qr', function () {
    //     return view('users.qr');
    // });

    //complaint--------------------------------->okay
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
    // Route::prefix('mess')->group(function () {
    //     //complaint-index
    //     Route::get('/', [UserMessController::class, 'showMessSection']);
    //     //mess attendance
    //     Route::get('attendance', [UserMessController::class, 'showMessAttendance']);
    //     //mess-in-out
    //     Route::get('in-out', [UserMessController::class, 'showMessStatus']);
    //     //messbill
    //     Route::get('bill', [UserMessController::class, 'showMessBill']);
    //     //mess-payment
    //     Route::get('payment', [UserMessController::class, 'showMessPayment']);
    // });


    //start of room
    Route::prefix('room')->group(function () {

        //complaint-index
        Route::get('/', [UserRoomController::class, 'showRoomDetails']);
        // //room rent
        // Route::prefix('room-rent')->group(function () {
        //     Route::get('/', [UserRoomController::class, 'showRoomRent']);
        //     Route::get('payment', [UserRoomController::class, 'showRoomRentPayment']);
        //     Route::get('status', [UserRoomController::class, 'showRoomRentStatus']);
        // });
        //room request
        Route::get('request', [UserRoomController::class, 'showRoomReq'])->name('room.callback');
        Route::post('room-req', [UserRoomController::class, 'roomRequest'])->name('room.request');
        Route::post('room-req-paymet', [UserRoomController::class, 'roomAllocationPayment'])->name('room.request.payment');
        //endroom request

        //start room change section
        Route::prefix('change')->group(function () {
            Route::get('request', [UserRoomController::class, 'showRoomChangeRequest']);
            Route::post('request', [UserRoomController::class, 'roomChangeRequest'])->name('room.change.request');
        });
        Route::prefix('vacate')->group(function () {

            Route::get('/', [UserRoomController::class, 'showRoomVacate']);
        });
    });//end of room
    
    //rules and notice card --------------------->okay
    Route::prefix('rules')->group(function () {

        Route::get('card', [UserRulesAndNoticeController::class, 'showCard']);
        Route::get('rule-list', [UserRulesAndNoticeController::class, 'viewRules']);
        Route::get('notice-list', [UserRulesAndNoticeController::class, 'viewNotices']);
    });

    //fee-pending-status
    Route::prefix('bills-payments')->group(function() {

        Route::get('card', [UserFeeAndPaymentController::class, 'showBills']);
        Route::get('rent-card', [UserFeeAndPaymentController::class, 'viewRents']);
        Route::get('rent/{id}', [UserFeeAndPaymentController::class, 'payRoomRent']);
        Route::post('rent-pay', [UserFeeAndPaymentController::class, 'callPaymentGatewayRent'])->name('bills.rent.pay');
        Route::get('bills-card', [UserFeeAndPaymentController::class, 'viewBills']);
        Route::get('bill/{id}', [UserFeeAndPaymentController::class, 'payWaterElectricBill']);
        Route::post('bill-pay', [UserFeeAndPaymentController::class, 'callPaymentGatewayBills'])->name('bills.bill.pay');
    });

    //feedback ------------------->okay
    Route::prefix('feedback')->group(function () {

        Route::get('/', [UserFeedbackController::class, 'showFeedback']);
        //give feedback
        Route::get('give-feedback', [UserFeedbackController::class, 'showAddFeedback']);
        Route::post('submit-feedback', [UserFeedbackController::class, 'addFeedback'])->name('user.addfeedback');
    });

    //notification
    Route::get('notifications', [UserNotificationController::class, 'showNotifications']);

});
//end of user



/*=============================================================================================================================================================*/

/*===================================================================ADMIN-SIDE-ROUTING========================================================================*/

/*=============================================================================================================================================================*/



//Admin logins

Route::get('admin-login', [LoginController::class, 'showAdminLogin']);
Route::post('admin-login', [LoginController::class, 'adminLogin'])->name('admin.login');

Route::post('admin-signout', [LoginController::class, 'adminLogout'])->name('admin.signout');

Route::get('admin-reset', [ResetPasswordController::class, 'showAdminPasswordReset']);
Route::post('admin-reset', [ResetPasswordController::class, 'adminPasswordReset'])->name('admin.reset');

/*
-------------------HOD-------------------------------------------------------------------------------------------------------------------------
*/
Route::middleware(['auth:admins'])->prefix('hod')->group(function () {

    //index
    Route::get('index', [HodDashboardController::class, 'showHodDashboard']);
    Route::get('my-profile', [HodProfileController::class, 'showHodProfile']);


    //profile


    //allocation request
    Route::prefix('allocation')->group(function () {

        Route::get('request', [HostelAdmissionHodController::class, 'showRequests']);
        Route::get('action/{id}', [HostelAdmissionHodController::class, 'admissionAction']);
        Route::post('action', [HostelAdmissionHodController::class, 'admissionApprove'])->name('hod.alloc.action');
    });

    //vacating request
    Route::prefix('vacate')->group(function () {

        Route::get('request', [HostelVacateHodController::class, 'showRequests']);
        Route::get('action', [HostelVacateHodController::class, 'vacateAction']);
    });

    Route::prefix('students-details')->group(function () {
        Route::get('all', [StudentDetailsHodController::class, 'showAllStudentDetails']);
        Route::get('profile-details/{id}', [StudentDetailsHodController::class, 'showProfileDetails']);
    });
});



/* 
----------------Office staff-------------------------------------------------------------------------------------------------------------------------
*/

Route::middleware(['auth:admins'])->prefix('office')->group(function () {

    //index
    Route::get('index', [OfficeDashboardController::class, 'showHodDashboard']);

    Route::get('my-profile', [OfficeProfileController::class, 'showOfficeProfile']);

    //student card
    Route::prefix('student')->group(function () {

        Route::get('card', [StudentDetailsController::class, 'showCard']);
        Route::get('all', [StudentDetailsController::class, 'showAllStudentDetails']);
        Route::get('detail/{id}', [StudentDetailsController::class, 'showStudentProfileDetails']);
        //

        //student filtering
        Route::get('filter', [StudentDetailsController::class, 'filterStudents']);
        Route::get('blocks/{hostelId}', [StudentDetailsController::class, 'getBlocks']);
        Route::post('students', [StudentDetailsController::class, 'getStudents']);
    });

    //rooms details card
    Route::prefix('rooms')->group(function () {

        Route::get('card', [RoomDetailsController::class, 'showCard']);
        Route::get('list', [RoomDetailsController::class, 'roomDetails']);

        //room fltering
        Route::get('filter', [RoomDetailsController::class, 'index']);

        Route::get('/hostels/{hostelId}/blocks', [RoomDetailsController::class, 'getBlocks']);
        Route::get('/blocks/{blockIds}/rooms', [RoomDetailsController::class, 'getRooms']);
        Route::get('/rooms/{roomIds}/beds', [RoomDetailsController::class, 'getBeds']);
        Route::get('/filter-beds', [RoomDetailsController::class, 'filterBeds']);
        Route::get('/blocks/all', [RoomDetailsController::class, 'getAllBlocks']);


    });

    //Complaints
    Route::prefix('complaints')->group(function () {

        Route::get('card', [ComplaintsController::class, 'showComplaintsCard']);
        Route::get('new', [ComplaintsController::class, 'showNewComplaints']);
        Route::get('view/{id}', [ComplaintsController::class, 'showComplaintView']);
        Route::post('edit', [ComplaintsController::class, 'complaintEdit'])->name('complaint.action');
        Route::get('solved', [ComplaintsController::class, 'showSolvedComplaints']);
        Route::get('all', [ComplaintsController::class, 'showAllComplaints']);
    });

    //admission card
   // Route::prefix('admission')->group(function () {

        //Route::get('request', [HostelAdmissionOfficeController::class, 'showRequests']);
       // Route::get('action', [HostelAdmissionOfficeController::class, 'admissionAction']);
   // });

    //room allocation
    Route::prefix('room')->group(function () {

        Route::get('allocation-list', [RoomAllocationController::class, 'showRoomAllocList']);
        Route::get('allocation/{id}', [RoomAllocationController::class, 'roomAllocAction']);
        Route::get('blocks/{block}/rooms', [RoomAllocationController::class, 'getRooms']);
        Route::get('rooms/{room}/beds', [RoomAllocationController::class, 'getBeds']);
        Route::post('allocate', [RoomAllocationController::class, 'asignRoom'])->name('office.room.allocate');
    });

    //room channge card
    Route::prefix('room-change')->group(function () {


        Route::get('request', [RoomChangeController::class, 'showRoomChangeReq']);
        Route::get('action/{id}', [RoomChangeController::class, 'roomChangeAction']);
        Route::post('change', [RoomChangeController::class, 'roomChange'])->name('office.room.change');
    });

    //vacating card
    Route::prefix('vacate')->group(function () {

        Route::get('request', [HostelVacateOfficeController::class, 'showRequests']);
        Route::get('action', [HostelVacateOfficeController::class, 'vacateAction']);
    });

    //rent and bills
    Route::prefix('bills')->group(function () {

        Route::get('/', [FeeAndPaymentController::class, 'showBills']);
        Route::get('room-rent', [FeeAndPaymentController::class, 'roomRentDetails']);
        Route::get('water-electric', [FeeAndPaymentController::class, 'waterElectricBills']);
    });

    //fee card
    Route::prefix('fee')->group(function () {

        //fee maintanance
        Route::get('maintanance', [FeeAndPaymentController::class, 'feeMaintanance']);
        Route::get('add', [FeeAndPaymentController::class, 'showFeeAdd']);
        Route::post('add',[FeeAndPaymentController::class,'feeAdd'])->name('office.fee.add');
        Route::get('edit/{id}', [FeeAndPaymentController::class, 'showFeeEdit']);
        Route::post('edit', [FeeAndPaymentController::class, 'feeEdit'])->name('office.fee.edit');
    });

    //rules and notice card
    Route::prefix('rules')->group(function () {

        Route::get('card', [RuleAndNoticeController::class, 'showCard']);
        Route::get('rule-list', [RuleAndNoticeController::class, 'viewRules']);
        Route::get('rule-add', [RuleAndNoticeController::class, 'viewAddRule']);
        Route::post('add-rule', [RuleAndNoticeController::class, 'addRule'])->name('office.rules.add');
        Route::post('remove-rule', [RuleAndNoticeController::class, 'removeRule'])->name('office.rules.remove');

        Route::get('notice-list', [RuleAndNoticeController::class, 'viewNotices']);
        Route::get('notice-add', [RuleAndNoticeController::class, 'viewAddNotice']);
        Route::post('notice-Add', [RuleAndNoticeController::class, 'addNotice'])->name('office.notice.add');
        Route::post('remove-notice', [RuleAndNoticeController::class, 'removeNotice'])->name('office.notice.remove');
    });
});



/*
---------------------warden---------------------------------------------------------------------------------------------------------------------------
*/

Route::middleware(['auth:admins'])->prefix('warden')->group(function () {
    //dashboard
    Route::get('index', [WardenDashboardController::class, 'showWardenDashboard']);
    //profile
    Route::get('my-profile', [WardenProfileController::class, 'showWardenProfile']);

    //student card
    Route::prefix('student')->group(function () {

        Route::get('card', [WardenStudentDetailsController::class, 'showCard']);
        Route::get('all', [WardenStudentDetailsController::class, 'showAllStudentDetails']);
        Route::get('detail/{id}', [WardenStudentDetailsController::class, 'showStudentProfileDetails']);
    });

    //admission card
    Route::prefix('admission')->group(function () {

        Route::get('request', [HostelAdmissionWardenController::class, 'showRequests']);
        Route::get('action/{id}', [HostelAdmissionWardenController::class, 'admissionAction']);
        Route::post('action', [HostelAdmissionWardenController::class, 'admissionApproval'])->name('warden.admission.approve');
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
        Route::get('rule-add', [WardenRuleAndNoticeController::class, 'viewAddRule']);
        Route::post('add-rule', [WardenRuleAndNoticeController::class, 'addRule'])->name('warden.rules.add');
        Route::post('remove-rule', [WardenRuleAndNoticeController::class, 'removeRule'])->name('warden.rules.remove');



        Route::get('notice-list', [WardenRuleAndNoticeController::class, 'viewNotices']);
        Route::get('notice-add', [WardenRuleAndNoticeController::class, 'viewAddNotice']);
        Route::post('notice-Add', [WardenRuleAndNoticeController::class, 'addNotice'])->name('warden.notice.add');
        Route::post('remove-notice', [WardenRuleAndNoticeController::class, 'removeNotice'])->name('warden.notice.remove');
    });
    /*
    //Complaints registry
    Route::get('complaints', [WardenComplaintsController::class, 'showComplaints']);
*/
    //Complaints
    Route::prefix('complaints')->group(function () {

        Route::get('card', [ComplaintsWardenController::class, 'showComplaintsCard']);
        Route::get('new', [ComplaintsWardenController::class, 'showNewComplaints']);
        Route::get('view/{id}', [ComplaintsWardenController::class, 'showComplaintView']);
        Route::post('edit', [ComplaintsWardenController::class, 'complaintEdit'])->name('complaint.action');
        Route::get('solved', [ComplaintsWardenController::class, 'showSolvedComplaints']);
        Route::get('all', [ComplaintsWardenController::class, 'showAllComplaints']);
    });
});



/* 
----------------Registrar staff-------------------------------------------------------------------------------------------------------------------------
*/


Route::middleware(['auth:admins'])->prefix('registrar')->group(function () {
    //dashboard
    Route::get('index', [RegistrarDashboardController::class, 'showRegistrarDashboard']);
    //profile
    Route::get('my-profile', [RegistrarProfileController::class, 'showRegistrarProfile']);


    //student card
    Route::prefix('student')->group(function () {

        Route::get('filter', [StudentDetailsRegistrarController::class, 'filterStudents']);
        Route::get('blocks/{hostelId}', [StudentDetailsRegistrarController::class, 'getBlocks']);
        Route::post('students', [StudentDetailsRegistrarController::class, 'getStudents']);
        Route::get('detail/{id}', [StudentDetailsRegistrarController::class, 'showProfileDetails']);

       // Route::get('card', [StudentDetailsRegistrarController::class, 'showCard']);
       // Route::get('all', [StudentDetailsRegistrarController::class, 'showAllStudentDetails']);
       // Route::get('detail/{id}', [StudentDetailsRegistrarController::class, 'showStudentProfileDetails']);
    });

    //rooms details card
    Route::prefix('room-details')->group(function () {

        Route::get('card', [RoomDetailsRegistrarController::class, 'showCard']);
        Route::get('list', [RoomDetailsRegistrarController::class, 'roomDetails']);



        //filter
        Route::get('filter', [RoomDetailsRegistrarController::class, 'index']);

        Route::get('/hostels/{hostelId}/blocks', [RoomDetailsRegistrarController::class, 'getBlocks']);
        Route::get('/blocks/{blockIds}/rooms', [RoomDetailsRegistrarController::class, 'getRooms']);
        Route::get('/rooms/{roomIds}/beds', [RoomDetailsRegistrarController::class, 'getBeds']);
        Route::get('/filter-beds', [RoomDetailsRegistrarController::class, 'filterBeds']);
        Route::get('/blocks/all', [RoomDetailsRegistrarController::class, 'getAllBlocks']);
    });

    /*
    //Complaints
    Route::get('complaints', [ComplaintsRegistrarController::class, 'showComplaints']);
*/
    //Complaints
    Route::prefix('complaints')->group(function () {

        Route::get('card', [ComplaintsRegistrarController::class, 'showComplaintsCard']);
        Route::get('new', [ComplaintsRegistrarController::class, 'showNewComplaints']);
        Route::get('view/{id}', [ComplaintsRegistrarController::class, 'showComplaintView']);
        Route::post('edit', [ComplaintsRegistrarController::class, 'complaintEdit'])->name('complaint.action');
        Route::get('solved', [ComplaintsRegistrarController::class, 'showSolvedComplaints']);
        Route::get('all', [ComplaintsRegistrarController::class, 'showAllComplaints']);
    });

    //admission card
   // Route::prefix('admission')->group(function () {

        //Route::get('request', [HostelAdmissionRegistrarController::class, 'showRequests']);
       // Route::get('action', [HostelAdmissionRegistrarController::class, 'admissionAction']);
   // });


    //room allocation
   // Route::prefix('room')->group(function () {

       // Route::get('allocation-list', [RoomAllocationRegistrarController::class, 'showRoomAllocList']);
       // Route::get('allocation', [RoomAllocationRegistrarController::class, 'roomAllocAction']);
   // });


    //room channge card
    //Route::prefix('room-change')->group(function () {


        //Route::get('request', [RoomChangeRegistrarController::class, 'showRoomChangeReq']);
        //Route::get('action', [RoomChangeRegistrarController::class, 'roomChangeAction']);
    //});


    //vacating card
   // Route::prefix('vacate')->group(function () {

        //Route::get('request', [HostelVacateRegistrarController::class, 'showRequests']);
       // Route::get('action', [HostelVacateRegistrarController::class, 'vacateAction']);
   // });




       //fee card ---------->okay
       Route::prefix('fee')->group(function () {
        //bills
        Route::get('card', [FeeAndPaymentRegistrarController::class, 'showBills']);
        Route::get('room-rent', [FeeAndPaymentRegistrarController::class, 'roomRentDetails']);
        Route::get('water-electric', [FeeAndPaymentRegistrarController::class, 'waterElectricBills']);
        //fee maintanance
        Route::get('maintanance', [FeeAndPaymentRegistrarController::class, 'feeMaintanance']);
        Route::get('updation', [FeeAndPaymentRegistrarController::class, 'feeUpdate']);
        Route::get('add', [FeeAndPaymentRegistrarController::class, 'showFeeAdd']);
        Route::post('add',[FeeAndPaymentRegistrarController::class,'feeAdd'])->name('registrar.fee.add');
        Route::get('edit/{id}', [FeeAndPaymentRegistrarController::class, 'showFeeEdit']);
        Route::post('edit', [FeeAndPaymentRegistrarController::class, 'feeEdit'])->name('registrar.fee.edit');
    });

    //rules and notice card
    Route::prefix('rules')->group(function () {

        Route::get('card', [RuleAndNoticeRegistrarController::class, 'showCard']);
        Route::get('rule-list', [RuleAndNoticeRegistrarController::class, 'viewRules']);
        Route::get('rule-add', [RuleAndNoticeRegistrarController::class, 'viewAddRule']);
        Route::post('add-rule', [RuleAndNoticeRegistrarController::class, 'addRule'])->name('registrar.rules.add');
        Route::post('remove-rule', [RuleAndNoticeRegistrarController::class, 'removeRule'])->name('registrar.rules.remove');



        Route::get('notice-list', [RuleAndNoticeRegistrarController::class, 'viewNotices']);
        Route::get('notice-add', [RuleAndNoticeRegistrarController::class, 'viewAddNotice']);
        Route::post('notice-Add', [RuleAndNoticeRegistrarController::class, 'addNotice'])->name('registrar.notice.add');
        Route::post('remove-notice', [RuleAndNoticeRegistrarController::class, 'removeNotice'])->name('registrar.notice.remove');
    });
    

    //students details filter
    Route::get('student-details', [RegistrarStudentDetailsController::class, 'showStudentDetails']);
    Route::post('list', [RegistrarStudentDetailsController::class, 'viewStudentDetails']);
    Route::get('blocks/{hostel}', [RegistrarStudentDetailsController::class, 'getBlocks']);
    Route::post('student-details', [RegistrarStudentDetailsController::class, 'filterStudents'])->name('registrar.student.list');

            //managing admins ---------------->okay
    Route::prefix('admins')->group(function () {

        Route::get('manage', [RegistrarAdminManageController::class, 'showAdmins']);
        Route::get('view-admin/{id}', [RegistrarAdminManageController::class, 'viewAdmin']);
        Route::get('add', [RegistrarAdminManageController::class, 'viewAdminAdd']);
        Route::post('add', [RegistrarAdminManageController::class, 'adminAdd'])->name('registrar.admin.add');
        Route::post('remove', [RegistrarAdminManageController::class, 'removeAdmin'])->name('registrar.admin.remove');
    });
     Route::post('request-admin', [RegistarRequestToAdminController::class, 'requestadmin'])->name('registrar.admin.request');
});


/* 
----------------Superuser staff------------------------------------------------------------------------------------------------------------------------------
*/

Route::middleware(['auth:admins'])->prefix('super-user')->group(function () {

    //dashboard
    Route::get('index', [SuperUserDashboardController::class, 'showSuperUserDashboard']);

    //profile
    Route::get('my-profile', [SuperUserProfileController::class, 'showSuperUserProfile']);

    //student card ----------------->okay
    Route::prefix('student')->group(function () {

        Route::get('filter', [StudentDetailsAdminController::class, 'filterStudents']);
        Route::get('blocks/{hostelId}', [StudentDetailsAdminController::class, 'getBlocks']);
        Route::post('students', [StudentDetailsAdminController::class, 'getStudents']);
        Route::get('detail/{id}', [StudentDetailsAdminController::class, 'showProfileDetails']);
    });

    //rooms details card --------------->okay
    Route::prefix('room-details')->group(function () {
        //filter
        Route::get('filter', [RoomDetailsAdminController::class, 'index']);
        Route::get('/hostels/{hostelId}/blocks', [RoomDetailsAdminController::class, 'getBlocks']);
        Route::get('/blocks/{blockIds}/rooms', [RoomDetailsAdminController::class, 'getRooms']);
        Route::get('/rooms/{roomIds}/beds', [RoomDetailsAdminController::class, 'getBeds']);
        Route::get('/filter-beds', [RoomDetailsAdminController::class, 'filterBeds']);
        Route::get('/blocks/all', [RoomDetailsAdminController::class, 'getAllBlocks']);
    });

    //Complaints ------------->okay
    Route::prefix('complaints')->group(function () {

        Route::get('card', [ComplaintsAdminController::class, 'showComplaintsCard']);
        Route::get('new', [ComplaintsAdminController::class, 'showNewComplaints']);
        Route::get('view/{id}', [ComplaintsAdminController::class, 'showComplaintView']);
        Route::post('edit', [ComplaintsAdminController::class, 'complaintEdit'])->name('complaint.action');
        Route::get('solved', [ComplaintsAdminController::class, 'showSolvedComplaints']);
        Route::get('all', [ComplaintsAdminController::class, 'showAllComplaints']);
    });

    //admission card ------------------->okay
    Route::prefix('admission')->group(function () {

        Route::get('request', [HostelAdmissionAdminController::class, 'showRequests']);
        Route::get('action/{id}', [HostelAdmissionAdminController::class, 'admissionAction']);
        Route::post('action', [HostelAdmissionAdminController::class. 'admissionApproval'])->name('superuser.admission.approve');
    });

    //room allocation --------------->okay
    Route::prefix('room')->group(function () {

        Route::get('allocation-list', [RoomAllocationAdminController::class, 'showRoomAllocList']);
        Route::get('allocation', [RoomAllocationAdminController::class, 'roomAllocAction']); 
        Route::get('blocks/{block}/rooms', [RoomAllocationAdminController::class, 'getRooms']);
        Route::get('rooms/{room}/beds', [RoomAllocationAdminController::class, 'getBeds']);
        Route::post('allocate', [RoomAllocationAdminController::class, 'asignRoom'])->name('superuser.room.allocate');
    });

    //room channge card -------------->okay
    Route::prefix('room-change')->group(function () {

        Route::get('request', [RoomChangeAdminController::class, 'showRoomChangeReq']);
        Route::get('action/{id}', [RoomChangeAdminController::class, 'roomChangeAction']);
        Route::post('change', [RoomChangeAdminController::class, 'roomChange'])->name('superuser.room.change');
    });

    //vacating card
    Route::prefix('vacate')->group(function () {

        Route::get('request', [HostelVacateAdminController::class, 'showRequests']);
        Route::get('action', [HostelVacateAdminController::class, 'vacateAction']);
        
    });

    //fee card ---------->okay
    Route::prefix('fee')->group(function () {
        //bills
        Route::get('card', [FeeAndPaymentAdminController::class, 'showBills']);
        Route::get('room-rent', [FeeAndPaymentAdminController::class, 'roomRentDetails']);
        Route::get('water-electric', [FeeAndPaymentAdminController::class, 'waterElectricBills']);
        //fee maintanance
        Route::get('maintanance', [FeeAndPaymentAdminController::class, 'feeMaintanance']);
        Route::get('updation', [FeeAndPaymentAdminController::class, 'feeUpdate']);
        Route::get('add', [FeeAndPaymentAdminController::class, 'showFeeAdd']);
        Route::post('add',[FeeAndPaymentAdminController::class,'feeAdd'])->name('office.fee.add');
        Route::get('edit/{id}', [FeeAndPaymentAdminController::class, 'showFeeEdit']);
        Route::post('edit', [FeeAndPaymentAdminController::class, 'feeEdit'])->name('office.fee.edit');
    });

    //rules and notice card ------------------>okay
    Route::prefix('rules')->group(function () {

        Route::get('card', [RuleAndNoticeAdminController::class, 'showCard']);
        Route::get('rule-list', [RuleAndNoticeAdminController::class, 'viewRules']);
        Route::get('rule-add', [RuleAndNoticeAdminController::class, 'viewAddRule']);
        Route::post('add-rule', [RuleAndNoticeAdminController::class, 'addRule'])->name('super-user.rules.add');
        Route::post('remove-rule', [RuleAndNoticeAdminController::class, 'removeRule'])->name('super-user.rules.remove');
        Route::get('notice-list', [RuleAndNoticeAdminController::class, 'viewNotices']);
        Route::get('notice-add', [RuleAndNoticeAdminController::class, 'viewAddNotice']);
        Route::post('notice-Add', [RuleAndNoticeAdminController::class, 'addNotice'])->name('super-user.notice.add');
        Route::post('remove-notice', [RuleAndNoticeAdminController::class, 'removeNotice'])->name('super-user.notice.remove');
    });

    //managing admins ---------------->okay
    Route::prefix('admins')->group(function () {

        Route::get('manage', [AdminManageController::class, 'showAdmins']);
        Route::get('view-admin/{id}', [AdminManageController::class, 'viewAdmin']);
        Route::get('add', [AdminManageController::class, 'viewAdminAdd']);
        Route::post('add', [AdminManageController::class, 'adminAdd'])->name('superuser.admin.add');
        Route::post('remove', [AdminManageController::class, 'removeAdmin'])->name('superuser.admin.remove');
    });
});


// /*---------mess dashboard-----------
// */
// Route::middleware(['auth:admins'])->prefix('mess')->group(function () {
//     //dashboard
//     Route::get('index', [DashboardMessController::class, 'showMessDashboard']);
//     //profile
//     Route::get('my-profile', [ProfileMessController::class, 'showMessProfile']);

//     Route::prefix('take-attendance')->group(function () {
//         Route::get('/', function () {
//             return view('admins.mess.attendance_take');
//         });
//         Route::get('scan-qr', function () {
//             return view('admins.mess.scan_qr');
//         });
//         Route::get('profile', function () {
//             return view('admins.mess.attendance_profile');
//         });
//     });

//     Route::prefix('mess-menu')->group(function () {
//         Route::get('/', function () {
//             return view('admins.mess.menu');
//         });
//         Route::get('view', function () {
//             return view('admins.mess.menu_view');
//         });
//         Route::get('edit', function () {
//             return view('admins.mess.menu_edit');
//         });
//     });

//     Route::prefix('purchase-and-bills')->group(function () {
//         Route::get('/', function () {
//             return view('admins.mess.bill_and_purchase');
//         });
//         Route::get('purchase-bill', function () {
//             return view('admins.mess.bill_purchase');
//         });
//         Route::get('student-bill', function () {
//             return view('admins.mess.bill_student');
//         });
//     });

//     Route::get('view-attendance', function () {
//         return view('admins.mess.attendance_view');
//     });
//     Route::prefix('rules-and-notices')->group(function () {
//         Route::get('/', function () {
//             return view('admins.mess.rules_notices_card');
//         });
//         Route::get('rules-list', function () {
//             return view('admins.mess.rules_list');
//         });
//         Route::get('rules-add', function () {
//             return view('admins.mess.rules_add');
//         });
//         Route::get('notices-list', function () {
//             return view('admins.mess.notice_list');
//         });
//         Route::get('notices-add', function () {
//             return view('admins.mess.notice_add');
//         });
//     });

//     //Complaints
//     Route::prefix('complaints')->group(function () {

//         Route::get('card', [ComplaintsMessController::class, 'showComplaintsCard']);
//         Route::get('new', [ComplaintsMessController::class, 'showNewComplaints']);
//         Route::get('view/{id}', [ComplaintsMessController::class, 'showComplaintView']);
//         Route::post('edit', [ComplaintsMessController::class, 'complaintEdit'])->name('mess.complaint.action');
//         Route::get('solved', [ComplaintsMessController::class, 'showSolvedComplaints']);
//         Route::get('all', [ComplaintsMessController::class, 'showAllComplaints']);
//     });
// });
