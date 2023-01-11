<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

// Go to Home Dashboard
Route::get('/', [App\Http\Controllers\DashboardController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\DashboardController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\DashboardController::class, 'updatePassword'])->name('updatePassword');
Route::get('{any}', [App\Http\Controllers\DashboardController::class, 'index'])->name('index');


// Unused
// Language Translation
// Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);