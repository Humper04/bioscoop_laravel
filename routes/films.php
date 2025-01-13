<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\FilmsController;

// Route::get('/films', [FilmController::class, 'index']);
Route::get('/films', [FilmsController::class, 'index']);
Route::get('/films/{id}', [FilmsController::class, 'show']);
