<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReportController;
use App\Http\Controllers\UrlController;

require __DIR__.'/auth.php';

Route::get('/error-message',[ReportController::class,'error'])->name('report.error');

Route::middleware(['auth'])->group(function () {
    Route::get('/',[UrlController::class, 'index'])->name('dashboard');
    Route::post('/short-url-create',[UrlController::class, 'store'])->name('url.store');
    Route::get('/report',[ReportController::class,'index'])->name('report.index');
});
Route::get('/{code}',[UrlController::class, 'show'])->name('url.show');





