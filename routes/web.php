<?php

use App\Http\Controllers\ApplyNowController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'Index'])->name('home');
Route::get('/about', [PageController::class, 'About'])->name('about');
Route::get('/instructor', [PageController::class, 'Instructor'])->name('instructor');
Route::get('/class-fees', [PageController::class, 'ClassFees'])->name('class-fees');

Route::post('/apply-now', [ApplyNowController::class, 'store'])
    ->middleware('throttle:10,1')
    ->name('apply-now');
