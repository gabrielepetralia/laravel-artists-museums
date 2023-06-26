<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\MuseumController;
use App\Http\Controllers\ArtworkController;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [PageController::class, 'index'])->name('home');

Route::resource('artists', ArtistController::class);
Route::resource('museums', MuseumController::class);
Route::resource('artworks', ArtworkController::class);
Route::get('museums_distance/{param}', [MuseumController::class, 'museums_distance'])->name('museums_distance');
