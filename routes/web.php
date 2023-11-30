<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Registration;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\MobileSawmillController;


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

Route::get('/AdminDashboard', function () {
    return view('admin.AdminDashboard');
});
Route::get('/CheckOwnershipChange', function () {
    return view('admin.CheckOwnershipChange');
});
Route::get('/CheckPermitRequest', function () {
    return view('admin.CheckPermitRequest');
});
Route::get('/CheckRegistration', function () {
    return view('admin.CheckRegistration');
});
Route::get('/CheckRenew', function () {
    return view('admin.CheckRenew');
});
Route::get('/CheckStockBookUpdate', function () {
    return view('admin.CheckStockBookUpdate');
});
Route::get('/CustomerSupport', function () {
    return view('admin.CustomerSupport');
});
Route::get('/Help', function () {
    return view('user.Help');
});
Route::get('/Logout', function () {
    return view('admin.Logout');
});
Route::get('/OwnershipChange', function () {
    return view('user.OwnershipChange');
});
Route::get('/PermitRequest', function () {
    return view('user.PermitRequest');
});
Route::get('/Registration', function () {
    return view('user.Registration');
});
Route::get('/Renew', function () {
    return view('user.Renew');
});
Route::get('/StockBookUpdate', function () {
    return view('user.StockBookUpdate');
});

Route::get('/SBU_LogsTimber', function () {
    return view('user.SBU_LogsTimber');
});
Route::get('/SBU_SawnTimber', function () {
    return view('user.SBU_SawnTimber');
});

Route::get('/UserDashboard', function () {
    return view('user.UserDashboard');
});
Route::get('/UserLogout', function () {
    return view('user.UserLogout');
});


Route::get('/index', [RegistrationController::class, 'index'])->name('registration.index');;
Route::get('/register', [RegistrationController::class, 'register'])->name('registration.register');
Route::post('/index', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/edit/{registration}', [RegistrationController::class, 'edit'])->name('registration.edit');
Route::put('/update/{registration}', [RegistrationController::class, 'update'])->name('registration.update');
Route::delete('/destroy/{registration}', [RegistrationController::class, 'destroy'])->name('registration.destroy');

Route::get('/login', [RegistrationController::class, 'login'])->name('log.login');
Route::post('/check', [RegistrationController::class, 'check'])->name('log.check');
Route::get('/UserDashboard', [RegistrationController::class, 'UserDashboard'])->name('UserDashboard');;

Route::post('/CheckReg',[Registration::class,'store']);

Route::post('/CheckReg',[RegisterUserController::class,'stores']);




