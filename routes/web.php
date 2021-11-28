<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');
Route::get('/credits', [App\Http\Controllers\HomeController::class, 'credit'])->name('credit');
Route::get('/monitoring-plans', [App\Http\Controllers\HomeController::class, 'monitoring_plans'])->name('monitoring-plans');

Route::get('/my-monitors', [App\Http\Controllers\HomeController::class, 'monitors'])->name('monitors');
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');

