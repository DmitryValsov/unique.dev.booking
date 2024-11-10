<?php

use Illuminate\Support\Facades\Route;




Auth::routes();

//Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->middleware('auth')->name('index');


Route::get('/booking/', [App\Http\Controllers\Booking\IndexController::class, 'index'])->middleware('auth')->name('booking.index');
Route::get('/booking/date', [App\Http\Controllers\Booking\IndexController::class, 'date'])->middleware('auth')->name('booking.date');
Route::get('/booking/auto', [App\Http\Controllers\Booking\IndexController::class, 'auto'])->middleware('auth')->name('booking.auto');



Route::get('/user', [App\Http\Controllers\User\IndexController::class, 'index'])->middleware('auth')->name('user.index');
