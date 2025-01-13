<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
