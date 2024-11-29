<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Welkom bij onze bioscoop';
});

Route::get('/films', function () {
    return 'Hier vind je alle films';
});
