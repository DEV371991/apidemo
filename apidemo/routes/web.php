<?php

use App\Http\Controllers\pagecontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RazorpayController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[pagecontroller::class,'index'])->name('index');
Route::get('create',[ pagecontroller::class,'create'])->name('create');
Route::post('store',[pagecontroller::class,'store'])->name('store');
//Route::post('login',[pagecontroller::class,'login'])->name('login');
Route::post('show',[pagecontroller::class,'show'])->name('show');


Route::get('razorpay', [RazorpayController::class, 'razorpay'])->name('razorpay');
Route::post('razorpaypayment', [RazorpayController::class, 'payment'])->name('payment');
//Route::get('index2',[RazorpayController::class,'index'])->name('index2');


