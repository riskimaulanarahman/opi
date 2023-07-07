<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::group(['prefix' => 'api'], function () {
    Route::apiResources([
        'dataodc' => App\Http\Controllers\Module\DataodcController::class,
        'datasignal' => App\Http\Controllers\Module\OdcdetailController::class,
        'dataodp' => App\Http\Controllers\Module\OdpdetailController::class,
    ]);

    Route::get('panelodc/{id}/{modulename}',[App\Http\Controllers\Module\PanelodcController::class, 'getList']); //show pivot
    Route::get('datasignal/{id}/{modulename}',[App\Http\Controllers\Module\OdcdetailController::class, 'getList']); //get list
    Route::get('dataodp/{id}/{modulename}',[App\Http\Controllers\Module\OdpdetailController::class, 'getList']); //get list
    Route::post('searchodp',[App\Http\Controllers\Module\OdpdetailController::class, 'searchodp']); //get list

    Route::post('getpanelodc',[App\Http\Controllers\Module\PanelodcController::class, 'getData']); //get data
    Route::post('updatestatuspanel',[App\Http\Controllers\Module\PanelodcController::class, 'updatestatuspanel']); //get data

});