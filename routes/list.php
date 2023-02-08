<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('list-module',[App\Http\Controllers\ListController::class, 'listModule']);
Route::post('list-employee',[App\Http\Controllers\ListController::class, 'listEmployee']);
Route::post('list-sidemenu',[App\Http\Controllers\ListController::class, 'listSideMenu']);
Route::post('list-icon',[App\Http\Controllers\ListController::class, 'listIcon']);
Route::post('list-sequence',[App\Http\Controllers\ListController::class, 'listSequence']);
