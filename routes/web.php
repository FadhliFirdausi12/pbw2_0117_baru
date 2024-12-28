<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Mail;

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

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('tasks', TaskController::class);
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

Route::get('/task', [TaskController::class, 'index'])->name('task');

Route::get('/mytask', function () {
    return view('admin/mytask');
});

Route::get('/task', function () {
    return view('admin/task');
});

Route::get('/list', function () {
    return view('admin/list');
});

Route::get('/edit', function () {
    return view('admin/edit');
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

require __DIR__.'/auth.php';
