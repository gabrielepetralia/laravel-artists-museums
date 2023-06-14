<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\MuseumController;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [PageController::class, 'index'])->name('home');

Route::resource('artists', ArtistController::class);
Route::resource('museums', MuseumController::class);

