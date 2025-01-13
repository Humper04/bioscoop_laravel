<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReserveringenController;

Route::get('/reserveringen', [ReserveringenController::class, 'index']);
Route::get('/reserveringen/create', [ReserveringenController::class, 'create']);
Route::post('/reserveringen', [ReserveringenController::class, 'store']);
