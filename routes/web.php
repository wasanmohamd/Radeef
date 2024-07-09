<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/register', [App\Http\Controllers\AuthManager::class , 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\AuthManager::class , 'register.post'])->name('register.post');

Route::get('/login', [App\Http\Controllers\AuthManager::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthManager::class, 'loginpost'])->name('login.post');



