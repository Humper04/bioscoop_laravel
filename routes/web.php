<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\ReserveringenController;

Route::get('/', function () {
    return view('home');
});

Route::get('/films', [FilmController::class, 'index']);

Route::get('/films', [FilmsController::class, 'index']);
Route::get('/films/{id}', [FilmsController::class, 'show']);
Route::get('/reserveringen', [ReserveringenController::class, 'index']);
Route::get('/reserveringen/create', [ReserveringenController::class, 'create']);
Route::post('/reserveringen', [ReserveringenController::class, 'store']);