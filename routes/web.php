<?php

use App\Models\SideMenu;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
if(Schema::hasTable('side_menus')) {
    $sidemenu = SideMenu::select('route')->get();
    foreach ($sidemenu as $menu_item) {
        Route::get('/{menu_item}', [App\Http\Controllers\GeneratemenuController::class, 'index'])->name('index');
    }
}


