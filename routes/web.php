<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberAuthController;
use App\Http\Controllers\PlantController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('my-plants', PlantController::class);
Route::get('/member/login', [MemberAuthController::class, 'showLoginForm'])->name('member.login');
Route::post('/member/login', [MemberAuthController::class, 'login']);