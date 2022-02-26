<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UrlController;

require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function () {
    // Pages
    // Route::view('/', 'dashboard')->name('dashboard');

    // dashboard
    // Route::get('/',[DashboardController::class, 'index'])->name('dashboard');
    Route::get('/',[UrlController::class, 'index'])->name('dashboard');
    Route::get('/report',[ReportController::class,'index'])->name('report.index');
    Route::post('/short-url-create',[UrlController::class, 'store'])->name('url.store');
    Route::get('/{code}',[UrlController::class, 'show'])->name('url.show');





});
