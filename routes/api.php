<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/carousel',[CarouselItemsController::class, 'index']);
Route::get('/carousel/{id}',[CarouselItemsController::class, 'show']);
Route::post('/carousel',[CarouselItemsController::class, 'store']);
Route::delete('/carousel/{id}',[CarouselItemsController::class, 'destroy']);

Route::get('/medicine',[MedicinesController::class, 'index']);
Route::get('/medicine/{id}',[MedicinesController::class, 'show']);
Route::post('/medicine',[MedicinesController::class, 'store']);
Route::delete('/medicine/{id}',[MedicinesController::class, 'destroy']);


Route::get('/supplier',[SupplierController::class, 'index']);
Route::get('/supplier/{id}',[SupplierController::class, 'show']);
Route::post('/supplier',[SupplierController::class, 'store']);
Route::delete('/supplier/{id}',[SupplierController::class, 'destroy']);

Route::get('/staff',[StaffController::class, 'index']);
Route::get('/staff/{id}',[StaffController::class, 'show']);
Route::post('/staff',[StaffController::class, 'store']);
Route::delete('/staff/{id}',[StaffController::class, 'destroy']);

Route::get('/manager',[ManagerController::class, 'index']);
Route::get('/manager/{id}',[ManagerController::class, 'show']);
Route::post('/manager',[ManagerController::class, 'store']);
Route::delete('/manager/{id}',[ManagerController::class, 'destroy']);

Route::get('/inventory',[InventoryController::class, 'index']);
Route::get('/inventory/{id}',[InventoryController::class, 'show']);
Route::post('/inventory',[InventoryController::class, 'store']);
Route::delete('/inventory/{id}',[InventoryController::class, 'destroy']);

Route::get('/branch',[BranchController::class, 'index']);
Route::get('/branch/{id}',[BranchController::class, 'show']);
Route::post('/branch',[BranchController::class, 'store']);
Route::delete('/branch/{id}',[BranchController::class, 'destroy']);

Route::get('/stock',[StocksController::class, 'index']);
Route::get('/stock/{id}',[StocksController::class, 'show']);
Route::post('/stock',[StocksController::class, 'store']);
Route::delete('/stock/{id}',[StocksController::class, 'destroy']);
