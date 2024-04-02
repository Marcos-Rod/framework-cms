<?php

use App\Controllers\Admin\AdminController;
use App\Controllers\Admin\ConfigurationController;
use App\Controllers\AuthController;
use App\Route;



/*** Rutas del admin ****/
Route::get('admin', [AdminController::class, 'index']);

if (AuthController::isLoggedIn()) {
    Route::get(FOLDER_ADMIN . 'configuration', [ConfigurationController::class, 'index']);
    Route::post(FOLDER_ADMIN . 'configuration/store', [ConfigurationController::class, 'store']);
}

Route::get(FOLDER_ADMIN . ':slug', [AdminController::class, 'index']);
Route::post(FOLDER_ADMIN . 'login', [AuthController::class, 'login']);
Route::post(FOLDER_ADMIN . 'logout', [AuthController::class, 'logout']);

Route::dispatch();
