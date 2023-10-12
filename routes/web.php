<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $image = '/img/dc-logo.png';
    $comics = config('comics.comics');
    return view('home', compact('image', 'comics'));
})->name('home');

Route::get('/movies', function () {
    $image = '/img/dc-logo.png';
    $movie = "qui ci sono i movies";
    return view('movies', compact('movie', 'image'));
})->name('movies');

Route::get('/games', function () {
    $image = '/img/dc-logo.png';
    $games = "qui ci sono i games";
    return view('games', compact('games', 'image'));
})->name('games');