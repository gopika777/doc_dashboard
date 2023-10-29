<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\AuthController;
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

Route::post('/',[appointmentcontroller::class,'save'])->name('save.appointment');

Route::get('/doctor/login',function(){
    return view("Doctor.Auth.login");
})->name('doctor.login');

Route::get('/doctor/signup',function(){
    return view("Doctor.Auth.signup");
})->name('doctor.signup');

Route::get('/doctor/dashboard',function() {
    return view('Doctor.Layout.dashboard');
});

Route::post('/doctor/signup',[AuthController::class,'savedoc'])->name('doctor.signup.save');
Route::post('/doctor/login/save',[AuthController::class,'DocLogin'])->name('doctor.login.save');
