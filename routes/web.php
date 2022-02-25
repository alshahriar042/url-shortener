<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UrlsController;

require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function () {
    // Pages
    // Route::view('/', 'dashboard')->name('dashboard');

    // dashboard
    // Route::get('/',[DashboardController::class, 'index'])->name('dashboard');
    Route::get('/',[UrlsController::class, 'index'])->name('dashboard');
    Route::post('/short-url-create',[UrlsController::class, 'store'])->name('url.store');
    Route::get('/{code}',[UrlsController::class, 'show'])->name('url.show');





});
