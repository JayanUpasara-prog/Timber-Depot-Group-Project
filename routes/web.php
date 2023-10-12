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
    return view('welcome');
});

Route::get('/AdminDashboard', function () {
    return view('AdminDashboard');
});
Route::get('/CheckOwnershipChange', function () {
    return view('CheckOwnershipChange');
});
Route::get('/CheckPermitRequest', function () {
    return view('CheckPermitRequest');
});
Route::get('/CheckRegistration', function () {
    return view('CheckRegistration');
});
Route::get('/CheckRenew', function () {
    return view('CheckRenew');
});
Route::get('/CheckStockBookUpdate', function () {
    return view('CheckStockBookUpdate');
});
Route::get('/CustomerSupport', function () {
    return view('CustomerSupport');
});
Route::get('/Help', function () {
    return view('Help');
});
Route::get('/Logout', function () {
    return view('Logout');
});
Route::get('/OwnershipChange', function () {
    return view('OwnershipChange');
});
Route::get('/PermitRequest', function () {
    return view('PermitRequest');
});
Route::get('/Registration', function () {
    return view('Registration');
});
Route::get('/Renew', function () {
    return view('Renew');
});
Route::get('/StockBookUpdate', function () {
    return view('StockBookUpdate');
});
Route::get('/UserDashboard', function () {
    return view('UserDashboard');
});
Route::get('/UserLogout', function () {
    return view('UserLogout');
});



