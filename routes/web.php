<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;

// Register route
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

Route::post("/doregister", [authController::class, 'doRegister'])->name('doregister');

// Register route
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');


Route::post("/dologin", [authController::class, 'doLogin'])->name('dologin');

Route::get("/dashboard", function () {
    return view("auth.dashboard");
})->name("dashboard");

Route::post("/logout", [authController::class, 'logOut'])->name('logout');

Route::get("/users", [authController::class, 'showUsers'])->name('showusers');

Route::get("/update/{id}", [authController::class, 'update'])->name('update');

Route::put("/doupdate/{id}", [authController::class, 'doUpdate'])->name('doupdate');

Route::delete("/delete/{id}", [authController::class, 'delete'])->name('delete');
