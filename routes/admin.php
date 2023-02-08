<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::group(['prefix' => 'api'], function () {
    Route::apiResources([
        'user' => App\Http\Controllers\Admin\UserController::class,
        'module' => App\Http\Controllers\Admin\ModuleController::class,
        'useraccess' => App\Http\Controllers\Admin\UseraccessController::class,
        'sidemenu' => App\Http\Controllers\Admin\SidemenuController::class,
        'icons' => App\Http\Controllers\Admin\IconsController::class,
        'sequence' => App\Http\Controllers\Admin\SequenceController::class,
    ]);
});