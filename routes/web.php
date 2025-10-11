<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\homeKoprollController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/home/koproll',[homeKoprollController::class,'koprol'])->name('homeKoproll');