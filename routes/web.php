<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::get('/', function () {
    return 'Welkom bij onze bioscoop';
});

Route::get('/films', [FilmController::class, 'index']);
