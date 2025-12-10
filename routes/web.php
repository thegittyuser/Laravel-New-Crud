<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;

// Register route
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

Route::post("/doregister", [authController::class, 'doRegister'])->name('doregister');

// Register route
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');


Route::post("/dologin", [authController::class, 'doLogin'])->name('dologin');
