<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GunungController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk CRUD Gunung
Route::resource('gunungs', GunungController::class);
