<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\InventoryController;
use App\Http\Controllers\Api\MedicinesController;
use App\Http\Controllers\Api\SupplierController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Public APIs
Route::post('/login',[AuthController::class,'login' ])->name('user.login');
// Route::post('/user', [UserController::class,'store'])->name('user.store');


//Privagte APIs
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/logout',[AuthController::class,'logout' ]);

    Route::controller(UserController::class)->group(function () {
        Route::get('/user',                       'index');
        Route::get('/user/{id}',                  'show');
        Route::put('/user/{id}',                 'update')->name('user.update');
        Route::put('/user/email/{id}',            'email')->name('user.email');
        Route::put('/user/password/{id}',      'password')->name('user.password');
        Route::delete('/user/{id}',             'destroy');
    });

    Route::controller(InventoryController::class)->group(function () {
        Route::get('/inventory',                  'index');
        Route::get('/inventory/{id}',              'show');
        Route::post('/inventory',                 'store');
        Route::put('/inventory/{id}',            'update');
        Route::delete('/inventory/{id}',        'destroy');
    });

    Route::controller(MedicinesController::class)->group(function () {
        Route::get('/medicine',                  'index');
        Route::get('/medicine/{id}',              'show');
        Route::post('/medicine',                 'store');
        Route::put('/medicine/{id}',            'update');
        Route::delete('/medicine/{id}',        'destroy');
    });

    Route::controller(SupplierController::class)->group(function () {
        Route::get('/supplier',                  'index');
        Route::get('/supplier/{id}',              'show');
        Route::post('/supplier',                 'store');
        Route::put('/supplier/{id}',            'update');
        Route::delete('/supplier/{id}',        'destroy');
    });

     // User Specific APIs
     Route::get('/profile/show',         [ProfileController::class, 'show']);
     Route::put('/profile/image',        [ProfileController::class, 'image'])->name('profile.image');

     Route::post('/user', [UserController::class,'store'])->name('user.store');
     
});



