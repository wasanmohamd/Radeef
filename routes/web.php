<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PasswordController;


Route::get('/', function () {
    return view('landing');
})->name('home');

Route::get('landing', function () {
    return view('landing');
})->name('landing');

Route::middleware('auth')->group(function () {
    // Profile management
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    // Password management
    Route::put('/password', [PasswordController::class, 'update'])->name('password.update');
});

Route::get('/admin/technicalSupport', function () {
    return 'Admin technicalSupport';
})->name('admin.technicalSupport')->middleware('auth');

Route::get('/user/landing', function () {
    return 'User landing';
})->name('user.landing')->middleware('auth');

Auth::routes();

Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/note', [AuthManager::class, 'note'])->name('note');
Route::post('/note', [AuthManager::class, 'notePost'])->name('note.post');

Route::post('/note', [NoteController::class, 'store'])->name('note.store');
Route::get('/note', [NoteController::class, 'showNotes'])->name('note.showNotes');

Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');

Route::put('/note/{id}', [NoteController::class, 'update'])->name('note.update');
