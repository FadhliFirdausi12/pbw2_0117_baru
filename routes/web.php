<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


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
