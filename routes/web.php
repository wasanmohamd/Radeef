<?php
<<<<<<< HEAD

<<<<<<< HEAD
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
=======
// use App\Http\Controllers\ProfileController;
=======
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthManager;
>>>>>>> 308c7be3ec1c6eec6c853ea99a3b8f491aef0ff2
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
>>>>>>> 14d4461c1cb0c30ca8df625acbe894c2b5780918

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

<<<<<<< HEAD
Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');

=======
<<<<<<< HEAD
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');




// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
=======
Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerpost'])->name('register.post');

>>>>>>> 14d4461c1cb0c30ca8df625acbe894c2b5780918
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('loginPost');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout')->middleware('auth');
Route::post('/logout', [AuthManager::class, 'logout'])->name('logout');

<<<<<<< HEAD
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
=======
>>>>>>> 308c7be3ec1c6eec6c853ea99a3b8f491aef0ff2
>>>>>>> 14d4461c1cb0c30ca8df625acbe894c2b5780918
