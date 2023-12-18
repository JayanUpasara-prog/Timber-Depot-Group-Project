<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Registration;

use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\MobileSawmillController;

use App\Http\Controllers\ContactController;

use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\RegisteredUserController;



//chariya
use App\Http\Controllers\PermitRequestController;

//ownership change by HarshanatH
use App\Http\Controllers\OwnershipChangeController;

// Rest of your code...



/*thilii*/
use App\Http\Controllers\RatingController;

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
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage.homepage');
});

Route::get('/inner-page1', function () {
    return view('homepage.inner-page1');
});
Route::get('/inner-page2', function () {
    return view('homepage.inner-page2');
});
Route::get('/inner-page3', function () {
    return view('homepage.inner-page3');
});


Route::get('/inner-page4', function () {
    return view('homepage.inner-page4');
});
Route::get('/inner-page5', function () {
    return view('homepage.inner-page5');
});
Route::get('/inner-page6', function () {
    return view('homepage.inner-page6');
});
Route::get('/inner-page7', function () {
    return view('homepage.inner-page7');
});
Route::get('/inner-page8', function () {
    return view('homepage.inner-page8');
});
Route::get('/inner-page9', function () {
    return view('homepage.inner-page9');
});
Route::get('/faq', function () {
    return view('homepage.faq');
});

// Route::get('/AdminDashboard', function () {
//     return view('admin.AdminDashboard');
// });
// Route::get('/CheckOwnershipChange', function () {
//     return view('admin.CheckOwnershipChange');
// });
// Route::get('/CheckPermitRequest', function () {
//     return view('admin.CheckPermitRequest');
// });
// Route::get('/CheckRegistration', function () {
//     return view('admin.CheckRegistration');
// });
// Route::get('/CheckRenew', function () {
//     return view('admin.CheckRenew');
// });
// Route::get('/CheckStockBookUpdate', function () {
//     return view('admin.CheckStockBookUpdate');
// });
// Route::get('/CustomerSupport', function () {
//     return view('admin.CustomerSupport');
// });
// Route::get('/Help', function () {
//     return view('user.Help');
// });
Route::get('/Logout', function () {
    return view('admin.Logout');
});


// Route::get('/OwnershipChange', function () {
//     return view('user.OwnershipChange');
// });
// Route::get('/PermitRequest', function () {
//     return view('user.PermitRequest');
// });
// Route::get('/Registration', function () {
//     return view('user.Registration');
// });
// Route::get('/Renew', function () {
//     return view('user.Renew');
// });
// Route::get('/StockBookUpdate', function () {
//     return view('user.StockBookUpdate');
// });

// Route::get('/SBU_LogsTimber', function () {
//     return view('user.SBU_LogsTimber');
// });
// Route::get('/SBU_SawnTimber', function () {
//     return view('user.SBU_SawnTimber');
// });

// Route::get('/UserDashboard', function () {
//     return view('user.UserDashboard');
// });
// Route::get('/UserLogout', function () {
//     return view('user.UserLogout');
// });

//register part
Route::get('/register', [RegistrationController::class, 'register'])->name('reg.register');//->middleware('alreadyLoggedIn');
Route::post('/store', [RegistrationController::class, 'store'])->name('reg.store');

Route::middleware(['isLoggedIn'])->group(function () {
Route::get('/CheckRegistration', [RegistrationController::class, 'CheckRegistration'])->name('CheckRegistration');
Route::get('/Help', [RegistrationController::class, 'Help'])->name('Help');
Route::get('/OwnershipChange', [RegistrationController::class, 'OwnershipChange'])->name('OwnershipChange');
Route::get('/PermitRequest', [RegistrationController::class, 'PermitRequest'])->name('PermitRequest');
Route::get('/Registration', [RegistrationController::class, 'Registration'])->name('Registration');
//Route::get('/Renew', [RegistrationController::class, 'Renew'])->name('Renew');
Route::get('/Renew', [RegisteredUserController::class, 'showProfile'])->name('user.renew');
Route::post('/Renew/Submit', [RegisteredUserController::class, 'submitRenewal'])->name('renew.submit');

Route::get('/RenewCheckout', [RegisteredUserController::class, 'showRenewCheckout'])->name('user.renewCheckout');


Route::get('/SB_LogsTimber', [RegistrationController::class, 'SB_LogsTimber'])->name('SB_LogsTimber');
Route::get('/SB_SawnTimber', [RegistrationController::class, 'SB_SawnTimber'])->name('SB_SawnTimber');
Route::get('/SB_UpdateLogsTimber', [RegistrationController::class, 'SB_UpdateLogsTimber'])->name('SB_UpdateLogsTimber');
Route::get('/SB_UpdateSawnTimber', [RegistrationController::class, 'SB_UpdateSawnTimber'])->name('SB_UpdateSawnTimber');
Route::get('/StockBookUpdate', [RegistrationController::class, 'StockBookUpdate'])->name('StockBookUpdate');
Route::get('/UserDashboard', [RegistrationController::class, 'UserDashboard'])->name('UserDashboard');
Route::get('/UserLogout', [RegistrationController::class, 'UserLogout'])->name('UserLogout');
});


//Admin part
Route::middleware(['admin'])->group(function () {
Route::get('/index', [RegistrationController::class, 'index'])->name('reg.index');
Route::delete('/destroy/{registration}', [RegistrationController::class, 'destroy'])->name('reg.destroy');
});
Route::get('/edit/{registration}', [RegistrationController::class, 'edit'])->name('reg.edit');
Route::put('/update/{registration}', [RegistrationController::class, 'update'])->name('reg.update');

//madhura
Route::middleware(['admin'])->group(function () {
Route::get('/CheckRegistration', [Registration::class, 'CheckRegistration'])->name('CheckRegistration');
Route::get('view_record/{id}', [Registration::class, 'view_record']);
Route::get('/reject/{id}',[Registration::class,'reject']);
Route::get('/accept/{id}',[RegisteredUserController::class,'saveUsers'])->name('CheckRegistration');
Route::post('/send', [RegisteredUserController::class, 'send'])->name('reject.send');
Route::get('ViewRegisteredRecords', [RegisteredUserController::class, 'ViewRegisteredRecords']);
Route::get('ViewRecords/{id}', [RegisteredUserController::class, 'ViewRecords']);
Route::post('acceptance/{id}', [RegisteredUserController::class, 'handleAcceptance'])->name('acceptance.handle');
//Route::post('acceptance/{id}', [RegisteredUserController::class, 'saveUsers'])->name('CheckRegistration');

//Route::get('CriminalView/{id}', [Registration::class, 'CheckUser']);

//Route::get('CheckUser/{idno}', [Registration::class, 'CheckUser']);
//Route::get('CheckUser/{id}', [Registration::class, 'CheckUser']);
// Route::get('admin/CriminalView/{userId}/{idno}', [Registration::class, 'CriminalView'])->name('admin.CriminalView');

// web.php
Route::get('/CriminalView/{idno}', [Registration::class, 'CriminalView'])->name('admin.CriminalView');
});

// chariya
Route::get('/ViewPermitRequest', [PermitRequestController::class, 'ViewPermitRequest']);
Route::post('/storepermit', [PermitRequestController::class, 'storepermit'])->name('storepermit');
Route::get('/ViewPermitRequests', [PermitRequestController::class, 'viewPermit']);
Route::get('/ViewPermitRecords/{id}', [PermitRequestController::class, 'viewPermitRecord']);
Route::get('/acceptPermit/{id}',[PermitRequestController::class,'savePermits'])->name('ViewPermitRequests');
Route::get('/reject/{id}',[PermitRequestController::class,'reject']);
Route::post('/send', [PermitRequestController::class, 'send'])->name('reject.send');




Route::middleware(['admin'])->group(function () {
Route::get('/CheckRenew', [RegistrationController::class, 'CheckRenew'])->name('CheckRenew');
Route::get('/CheckOwnershipChange', [RegistrationController::class, 'CheckOwnershipChange'])->name('CheckOwnershipChange');
Route::get('/CheckPermitRequest', [RegistrationController::class, 'CheckPermitRequest'])->name('CheckPermitRequest');
Route::get('/CheckStockBookUpdate', [RegistrationController::class, 'CheckStockBookUpdate'])->name('CheckStockBookUpdate');
Route::get('/CustomerSupport', [RegistrationController::class, 'CustomerSupport'])->name('CustomerSupport');
Route::get('/WildCriminals', [RegistrationController::class, 'WildCriminals'])->name('admin.WildCriminals');
Route::post('/WildCriminalsPost', [RegistrationController::class, 'WildCriminalsPost'])->name('admin.WildCriminalsPost');
Route::get('/CriminalView', [RegistrationController::class, 'CriminalView'])->name('admin.CriminalView');
Route::delete('/destroyCriminal/{criminal}', [RegistrationController::class, 'destroyCriminal'])->name('admin.destroyCriminal');

Route::get('/Support', [RegistrationController::class, 'Support'])->name('admin.Support');

});


//login part
Route::get('/login', [RegistrationController::class, 'login'])->name('log.login');//->middleware('alreadyLoggedIn');
Route::post('/check', [RegistrationController::class, 'check'])->name('log.check');

//user dashboard
Route::get('/UserDashboard', [RegistrationController::class, 'UserDashboard'])->name('UserDashboard')->middleware('isLoggedIn');

//admin dashboard
Route::get('/AdminDashboard', [RegistrationController::class, 'AdminDashboard'])->name('AdminDashboard')->middleware('isLoggedIn')->middleware('admin');


//logout
Route::get('/logout', [RegistrationController::class, 'logout']);

//forget password
Route::get('/forget-password', [ForgetPasswordController::class, 'forgetPassword'])->name('forget.password');
Route::post('/forget-password', [ForgetPasswordController::class, 'forgetPasswordPost'])->name('forget.password.post');
Route::get('/reset-password/{token}', [ForgetPasswordController::class, 'resetPassword'])->name('reset.password');
Route::post('/reset-password', [ForgetPasswordController::class, 'resetPasswordPost'])->name('reset.password.post');

Route::post('/CheckReg',[Registration::class,'stores']);
//Route::post('/CheckReg',[RegisterUserController::class,'stores']);


//contact form
Route::get('/homepage', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/homepage', [ContactController::class, 'sendMail'])->name('contact.send');

//payment routes
use App\Http\Controllers\PaymentController;
Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('show.payment.form');
Route::post('/process-payment', [PaymentController::class, 'processPayment'])->name('process.payment');

//ayendra
//notice routes
Route::get('/noticePage', function () {
    return view('admin.notice');
});
use App\Http\Controllers\NoticeController;
Route::post('/submit-notice', [NoticeController::class, 'store'])->name('submit.notice');
Route::get('/inner-page2', [noticeController::class, 'viewNotice']);


//Search routes
//Route::get('/CheckRegistration', [Registration::class, 'showCheckRegistration'])->name('check.registration');
Route::get('/search',[Registration::class, 'showCheckRegistration'])->name('check.registration.search');
//view registered user search by id,idno,fname
Route::get('/search1',[RegisteredUserController::class, 'search'])->name('search1');
// index blade search function
Route::get('/search2', [RegistrationController::class, 'search'])->name('search2');
// Check Ownership blade search function

Route::get('/admin/CheckOwnershipChange', [OwnershipChangeController::class, 'getOwnershipChangeRequests'])->name('search4');

// view_record search and highlight
Route::get('/searchUsers', [Registration::class, 'searchUsers'])->name('searchUsers');
//View Permit request search 
Route::get('/admin/ViewPermitRequests', [PermitRequestController::class, 'getViewPermitRequests'])->name('admin.search5');




Route::get('/admin/AdminViewRating',  [RatingController::class, 'search'])->name('admin.AdminViewRating');

// Route::get('/pay', function () {
//     return view('user.checkout');
// });

// criminal blade search function
Route::get('/search3', [RegistrationController::class, 'showCheckCriminal'])->name('search3');


Route::get('/user/checkout', [Registration::class, 'registrationSuccess'])->name('registration.success');


//Route::get('/user/UserDashboard', [Registration::class, 'dashboard'])->name('UserDashboard');

Route::get('/edit-profile-picture', [RegistrationController::class, 'editProfilePicture'])->name('edit.profile.picture');
Route::post('/update-profile-picture', [RegistrationController::class, 'updateProfilePicture'])->name('update.profile.picture');


// Route::put('/CheckRegistration', [OwnershipChangeController::class, 'update']);
// Route::post('/update-registeruser', 'OwnershipChangeController@updateregisteruser')->name('update.registeruser');
// Route::put('/update/{registration}', [OwnershipChangeController::class, 'update'])->name('registeruser.update');
// Route::get('/UpdateOwnership', [OwnershipChangeController::class, 'UpdateOwnership']); 
// ->name('UpdateOwnership');
Route::post('store_data', [OwnershipChangeController::class, 'store_data']);
Route::get('/CheckOwnershipChange', [OwnershipChangeController::class, 'CheckOwnershipChange'])->name('CheckOwnershipChange');
Route::get('/update_ownership/{userid}', [OwnershipChangeController::class, 'update_ownership']);
//Route::get('AutoShowData/{userid}', [OwnershipChangeController::class, 'AutoShowData']);

//Anusar
Route::post('/ownership-change', [OwnershipChangeController::class, 'updateRegisteredUser'])
    ->name('ownership-change.update-registered-user');


//Stockbook Update by HarshanatH
use App\Http\Controllers\LogsTimberController;

Route::post('/SB_LogsTimber', [LogsTimberController::class, 'store'])->name('logstimbers.store');


//thilini
Route::get('/create', [RatingController::class, 'create'])->name('user.create');
Route::post('/user/store', [RatingController::class, 'store'])->name('user.store');
Route::get('/', [RatingController::class, 'ViewRating']);
// web.php



Route::get('/AdminViewRating', [RatingController::class, 'AdminViewRating']);
Route::get('/ratings', [RatingController::class, 'AdminViewRating'])->name('admin.AdminViewRating');
Route::delete('/admin/deleteRating/{id}', [RatingController::class, 'deleteRating'])->name('admin.deleteRating');

Route::get('/homepage/homepage', [RatingController::class, 'ViewRating'])->name('homepage.homepage');

