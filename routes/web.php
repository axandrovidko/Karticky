<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login'); // Nezabudni vytvoriť resources/views/profile.blade.php
})->name('login');


Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/collection', function () {
    return view('collection');
})->name('collection');

Route::get('/game', function () {
    return view('game');
})->name('game');

Route::get('/login', [AccountController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AccountController::class, 'login']);

Route::get('/register', [AccountController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AccountController::class, 'register']);

Route::post('/game/{id}/update-score', [GameController::class, 'updateScore']);

Route::post('/game/{id}/join', [GameController::class, 'joinGame']);
