<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TechnicalSupportController;
use App\Http\Controllers\Api\EmailController;

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

Route::middleware('auth')->group(function () {
    // Note routes
    Route::get('/note', [NoteController::class, 'index'])->name('note.index');
    Route::post('/note', [NoteController::class, 'store'])->name('note.store');
    Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');
    Route::put('/note/{id}', [NoteController::class, 'update'])->name('note.update');
});

// Todo Routes
Route::prefix('todos')->as('todos.')->group(function(){
    Route::get('index', [TodoController::class, 'index'])->name('index');
    Route::post('store', [TodoController::class, 'store'])->name('store');
    Route::get('create', [TodoController::class, 'create'])->name('create');
    Route::get('show/{id}', [TodoController::class, 'show'])->name('show');
    Route::get('{id}/edit', [TodoController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [TodoController::class, 'update'])->name('update');
    Route::delete('destroy', [TodoController::class, 'destroy'])->name('destroy');
    Route::get('taskprogress', [TodoController::class, 'taskProgress'])->name('taskprogress');
});

// Task Controller Routes
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
Route::post('/tasks/{task}/incomplete', [TaskController::class, 'incomplete'])->name('tasks.incomplete');
Route::get('/task-progress', [TaskController::class, 'progress'])->name('tasks.progress');

// Technical Support Routes
Route::get('/admin/technicalsupport', [TechnicalSupportController::class, 'index'])->name('admin.technicalsupport');

// Email Routes
Route::get('/sendEmail', [EmailController::class, 'sendEmail'])->name('send.email');

// Inquiry Routes
Route::post('/inquiry', [InquiryController::class, 'store'])->name('inquiry.store');
Route::get('/inquiries', [InquiryController::class, 'index'])->name('inquiries.index');
Route::post('/inquiries/{id}/send-email', [InquiryController::class, 'sendEmail'])->name('inquiries.sendEmail');

// Export Inquiries
Route::get('/technicalSupport/export', [TechnicalSupportController::class, 'export'])->name('technicalSupport.export');

// Other Routes
Route::get('/formtechnical', function () {
    return view('formtechnical');
})->name('formtechnical');

Route::get('/taskprogress', function () {
    return view('taskprogress');
})->name('taskprogress');

?>