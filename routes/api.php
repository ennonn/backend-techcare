<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarouselItemsController;
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
Route::controller(AuthController::class)->group(function () {
    Route::post('/login',       'login')->name('user.login');
    Route::post('/logout',      'logout');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(StaffController::class)->group(function () {
    Route::get('/staff',             'index');
    Route::get('/staff/{id}',         'show');
    Route::post('/staff',            'store');
    Route::put('/staff/{id}',       'update');
    Route::delete('/staff/{id}',   'destroy');
});

Route::controller(ManagerController::class)->group(function () {
    Route::get('/manager',           'index');
    Route::get('/manager/{id}',       'show');
    Route::post('/manager',          'store');
    Route::put('/manager/{id}',     'update');
    Route::delete('/manager/{id}', 'destroy');
});

Route::get('/carousel',[CarouselItemsController::class, 'index']);
Route::get('/carousel/{id}',[CarouselItemsController::class, 'show']);
Route::post('/carousel',[CarouselItemsController::class, 'store']);
Route::put('/carousel/{id}',[CarouselItemsController::class, 'update']);
Route::delete('/carousel/{id}',[CarouselItemsController::class, 'destroy']);

// Route::get('/user',[UserController::class, 'index']);
// Route::get('/user/{id}',[UserController::class, 'show']);
// Route::post('/user',[UserController::class, 'store'])->name('user.store');
// Route::put('/user/{id}',[UserController::class, 'update'])->name('user.update');
// Route::put('/user/email/{id}',[UserController::class, 'email'])->name('user.email');
// Route::put('/user/password/{id}',[UserController::class, 'password'])->name('user.password');
// Route::delete('/user/{id}',[UserController::class, 'destroy']);

Route::get('/medicine',[MedicinesController::class, 'index']);
Route::get('/medicine/{id}',[MedicinesController::class, 'show']);
Route::post('/medicine',[MedicinesController::class, 'store']);
Route::put('/medicine/{id}',[MedicinesController::class, 'update']);
Route::delete('/medicine/{id}',[MedicinesController::class, 'destroy']);


Route::get('/supplier',[SupplierController::class, 'index']);
Route::get('/supplier/{id}',[SupplierController::class, 'show']);
Route::post('/supplier',[SupplierController::class, 'store']);
Route::put('/supplier/{id}',[SupplierController::class, 'update']);
Route::delete('/supplier/{id}',[SupplierController::class, 'destroy']);

Route::get('/inventory',[InventoryController::class, 'index']);
Route::get('/inventory/{id}',[InventoryController::class, 'show']);
Route::post('/inventory',[InventoryController::class, 'store']);
Route::put('/inventory/{id}',[InventoryController::class, 'update']);
Route::delete('/inventory/{id}',[InventoryController::class, 'destroy']);

Route::get('/branch',[BranchController::class, 'index']);
Route::get('/branch/{id}',[BranchController::class, 'show']);
Route::put('/branch/{id}',[BranchController::class, 'update']);
Route::post('/branch',[BranchController::class, 'store']);
Route::delete('/branch/{id}',[BranchController::class, 'destroy']);

Route::get('/stock',[StocksController::class, 'index']);
Route::get('/stock/{id}',[StocksController::class, 'show']);
Route::put('/stock/{id}',[StocksController::class, 'update']);
Route::post('/stock',[StocksController::class, 'store']);
Route::delete('/stock/{id}',[StocksController::class, 'destroy']);
