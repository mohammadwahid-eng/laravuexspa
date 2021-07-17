<?php

use Illuminate\Support\Facades\Route;

Route::prefix("admin")->name("admin.")->middleware(['theme:admin'])->group(function() {
    Route::get('/', function () {
        return view("home");
    })->name("home");
});