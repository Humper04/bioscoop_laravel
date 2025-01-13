<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::get('/', function () {
    return view('home');
});

Route::get('/films', [FilmController::class, 'index']);
