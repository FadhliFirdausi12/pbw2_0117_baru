<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Mail;
use App\Http\Middleware\RoleMiddleware;

Route::get('/test-email', function () {
    Mail::raw('This is a test email!', function ($message) {
        $message->to('recipient@example.com')
            ->subject('Test Email');
    });

    return 'Email sent!';
});

Route::middleware(['auth'])->group(function () {
    // Rute untuk menampilkan form edit profil
    Route::get('/admin/editProfile', [ProfileController::class, 'editProfile'])->name('admin.editProfile');

    // Rute untuk mengupdate profil
    Route::post('/admin/update-profile', [ProfileController::class, 'updateProfile'])->name('admin.update-profile');
    Route::post('/logout', [ProfileController::class, 'logout'])->name('logout');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('event/list', [EventController::class, 'listEvent'])->name('event.list');
Route::resource('event', EventController::class);

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);

Route::get('/admin', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/mytask', function () {
    return view('admin/mytask');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
});


Route::get('/list', function () {
    return view('admin/list');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
});

Route::get('/Forgot your password?', function () {
    return view('resetPw');
});

Route::get('/setting', function () {
    return view('admin/setting');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/redirect-tasks', [AdminController::class, 'redirectBasedOnTasks'])->name('redirect.tasks');

require __DIR__.'/auth.php';
