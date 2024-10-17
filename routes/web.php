<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlantController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('my-plants', PlantController::class);