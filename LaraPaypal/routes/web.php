<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('paywithpaypal', [App\Http\Controllers\PaypalController::class, 'payWithPaypal'])->name('paywithpaypal');
Route::post('paypal', [App\Http\Controllers\PaypalController::class, 'postPaymentWithpaypal'])->name('paypal');
Route::get('paypal', [App\Http\Controllers\PaypalController::class, 'getPaymentStatus'])->name('status');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
