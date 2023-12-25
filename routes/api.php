<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\InventoryController;
use App\Http\Controllers\Api\ManagerController;
use App\Http\Controllers\Api\MedicinesController;
use App\Http\Controllers\Api\StaffController;
use App\Http\Controllers\Api\StocksController;
use App\Http\Controllers\Api\SupplierController;
use App\Http\Controllers\Api\BranchController;
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
Route::post('/user', [UserController::class,'store'])->name('user.store');


//Privagte APIs
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout',[AuthController::class,'logout' ]);

    Route::controller(UserController::class)->group(function () {
        Route::get('/user',                       'index');
        Route::get('/user/{id}',                  'show');
        Route::put('/user/{id}',                 'update')->name('user.update');
        Route::put('/user/email/{id}',            'email')->name('user.email');
        Route::put('/user/password/{id}',      'password')->name('user.password');
        Route::delete('/user/{id}',             'destroy');
    });

    Route::controller(StaffController::class)->group(function () {
        Route::get('/staff',                      'index');
        Route::get('/staff/{id}',                  'show');
        Route::post('/staff',                     'store');
        Route::put('/staff/{id}',                'update');
        Route::delete('/staff/{id}',            'destroy');
    });

    Route::controller(ManagerController::class)->group(function () {
        Route::get('/manager',                    'index');
        Route::get('/manager/{id}',                'show');
        Route::post('/manager',                   'store');
        Route::put('/manager/{id}',              'update');
        Route::delete('/manager/{id}',          'destroy');
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

    Route::controller(BranchController::class)->group(function () {
        Route::get('/branch',                   'index');
        Route::get('/branch/{id}',               'show');
        Route::put('/branch/{id}',             'update');
        Route::post('/branch',                  'store');
        Route::delete('/branch/{id}',         'destroy');
    });

    Route::controller(StocksController::class)->group(function () {
        Route::get('/stock',                    'index');
        Route::get('/stock/{id}',                'show');
        Route::put('/stock/{id}',              'update');
        Route::post('/stock',                   'store');
        Route::delete('/stock/{id}',          'destroy');

    });

});



