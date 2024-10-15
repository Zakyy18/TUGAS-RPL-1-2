<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MountainController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/mountains', [MountainController::class, 'index'])->name('mountains.index');

