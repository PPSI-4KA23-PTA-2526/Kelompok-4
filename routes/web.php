<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\homeKoprollController;
use App\Http\Controllers\mieayamController;
use App\Http\Controllers\ropangController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/home/koproll',[homeKoprollController::class,'koprol'])->name('homeKoproll');
Route::get('/home/mieayam',[mieayamController::class,'mieayam'])->name('home.mieayam');
Route::get('/home/ropang',[ropangController::class,'ropang'])->name('home.ropang');