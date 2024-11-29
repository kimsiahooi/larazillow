<?php

use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::get('/hello', [IndexController::class, 'show']);

Route::resource('listing', ListingController::class);

Route::get('login', [AuthContoller::class, 'create'])->name('login');
Route::post('login', [AuthContoller::class, 'store'])->name('login.store');
Route::delete('logout', [AuthContoller::class, 'destroy'])->name('logout');
