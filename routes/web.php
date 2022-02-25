<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\ProfileController;

require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function () {
    // Pages
    // Route::view('/', 'dashboard')->name('dashboard');

    // dashboard
    Route::get('/',[DashboardController::class, 'index'])->name('dashboard');





});
