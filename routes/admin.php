<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;
use Illuminate\Support\Facades\Route;

Route::prefix("admin")->name("admin.")->middleware(['theme:admin'])->group(function() {

    Route::middleware(['guest:admin'])->group(function () {
        Route::get("/login", [LoginController::class, 'create'])->name('login');
        Route::post("/login", [LoginController::class, 'store']);

        Route::get("/register", [RegisterController::class, 'create'])->name('register');
        Route::post("/register", [RegisterController::class, 'store']);
    });

    Route::middleware(['auth:admin'])->group(function () {
        Route::view('/', 'home')->name("home");
        Route::post("/logout", [LoginController::class, 'destroy'])->name('logout');
    });
});