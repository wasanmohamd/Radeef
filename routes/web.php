<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PasswordController;

use Illuminate\Support\Facades\Route;
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

Route::get('/admin/technicalsupport', function () {
    return 'Admin technicalsupport';
})->name('admin.technicalsupport')->middleware('auth');

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


// Todo Routes
Route::prefix('todos')->as('todos.')->controller(TodoController::class)->group(function(){
    Route::get('index', 'index')->name('index');
    Route::post('store', 'store')->name('store');
    Route::get('create', 'create')->name('create');
    Route::get('show/{id}', 'show')->name('show');
    Route::get('{id}/edit', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::delete('destroy', 'destroy')->name('destroy');
    Route::get('/taskprogress', 'taskProgress')->name('taskprogress');
}
// Task Controller Routes
Route::get('/', [TaskController::class, 'index'])->name('index');
Route::post('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
Route::post('/tasks/{task}/incomplete', [TaskController::class, 'incomplete'])->name('tasks.incomplete');
Route::get('/task-progress', [TaskController::class, 'progress'])->name('task.progress');
Route::get('/task-progress', [TaskController::class, 'taskProgress'])->name('task.progress');

Route::get('/formtechnical', function () {
    return view('formtechnical');
})->name('formtechnical');

Route::get('/taskprogress', function () {
    return view('taskprogress');
})->name('taskprogress');

Route::post('/inquiry', [InquiryController::class, 'store'])->name('inquiry.store');


 Route::get('/sendEmail',[EmailController::class]);

 Route::get('/technicalSupport', [InquiryController::class, 'index'])->name('inquiries.index');

 // Show email form
 Route::get('/write-email/{id}', [InquiryController::class, 'showEmailForm'])->name('writingpage.email');
 
 // Send email
 Route::post('/send-email/{id}', [InquiryController::class, 'sendEmail'])->name('send.email');
 Route::get('/inquiries', [InquiryController::class, 'index'])->name('inquiries.index');
Route::post('/inquiries/{id}/send-email', [InquiryController::class, 'sendEmail'])->name('inquiries.sendEmail');

// List inquiries
Route::get('/technicalSupport', [InquiryController::class, 'index'])->name('inquiries.index');
 
// Export inquiries
Route::get('/technicalSupport/export', [InquiryController::class, 'export'])->name('technicalSupport.export');
