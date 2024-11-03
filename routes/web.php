<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');


Route::get('/booking/', [App\Http\Controllers\Booking\IndexController::class, 'index'])->name('booking.index');
Route::get('/booking/date', [App\Http\Controllers\Booking\IndexController::class, 'date'])->name('booking.date');
Route::get('/booking/auto', [App\Http\Controllers\Booking\IndexController::class, 'auto'])->name('booking.auto');
