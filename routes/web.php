<?php

use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserAccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::get('/hello', [IndexController::class, 'show'])->middleware('auth');

Route::resource('listing', ListingController::class)->only(['create', 'store', 'edit', 'update', 'destroy'])->middleware(('auth'));
Route::resource('listing', ListingController::class)->except(['create', 'store', 'edit', 'update', 'destroy']);

Route::get('login', [AuthContoller::class, 'create'])->name('login');
Route::post('login', [AuthContoller::class, 'store'])->name('login.store');
Route::delete('logout', [AuthContoller::class, 'destroy'])->name('logout');

Route::resource('user-account', UserAccountController::class)->only(['create', 'store']);
