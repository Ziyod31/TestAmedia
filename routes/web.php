<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth'])->group(function() {
    Route::get('/', [App\Http\Controllers\ApplicationController::class, 'create']);
    Route::post('/', [App\Http\Controllers\ApplicationController::class, 'store'])->name('send');


    Route::middleware(['manager'])->group(function(){
        Route::get('/manager', [App\Http\Controllers\ApplicationController::class, 'index']);
    });

    Route::get('/logout', [Auth\LoginController::class, 'logout'])->name('logout');
});