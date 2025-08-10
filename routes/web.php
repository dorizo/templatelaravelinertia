<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [App\Http\Controllers\FrondendController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\FrondendController::class, 'about'])->name('about');
Route::get('/vision-mission', [App\Http\Controllers\FrondendController::class, 'visionMission'])->name('vision-mission');
Route::get('/basic-workflow', [App\Http\Controllers\FrondendController::class, 'basicWorkflow'])->name('basic-workflow');
Route::get('/support-service', [App\Http\Controllers\FrondendController::class, 'supportService'])->name('support-service');
Route::get('/our-services', [App\Http\Controllers\FrondendController::class, 'ourServices'])->name('our-services');
Route::get('/our-team', [App\Http\Controllers\FrondendController::class, 'ourTeam'])->name('our-team');
Route::get('/contact', [App\Http\Controllers\FrondendController::class, 'contact'])->name('contact');