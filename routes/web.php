<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('loginPost');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout')->middleware('auth');
Route::post('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/note', [AuthManager::class, 'note'])->name('note'); // GET route for displaying the note form
Route::post('/note', [AuthManager::class, 'notePost'])->name('note.post'); // POST route for handling the note form submission

Route::post('/note', [NoteController::class, 'store'])->name('note.store');
Route::get('/note', [NoteController::class, 'showNotes'])->name('note.showNotes');

Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');

Route::put('/note/{id}', [NoteController::class, 'update'])->name('note.update');

Route::get('profile', function () {
    return view('profile');
})->name('profile');

Route::get('/landing', function () {
    return view('landing');
})->name('landing');