<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [App\Http\Controllers\FrondendController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\FrondendController::class, 'about'])->name('about');
