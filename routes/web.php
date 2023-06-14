<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArtistController;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [PageController::class, 'index'])->name('home');

Route::resource('artists', ArtistController::class);

