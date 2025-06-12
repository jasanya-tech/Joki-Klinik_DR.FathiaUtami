<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'welcome'])->name('home');


Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.post');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');




Route::prefix('doctors')->group(function () {
    Route::get('/', [DoctorController::class, 'index'])->name('doctors.index'); // Regex to allow alphanumeric characters, dashes, and underscores
    Route::get('/{id}', [DoctorController::class, 'show'])->name('doctors.show');
    Route::get('/{id}/appoinment', [DoctorController::class, 'appoinment'])->middleware('check.user')->name('doctors.appoinment');
    Route::post('/appoinment', [DoctorController::class, 'appoinmentStore'])->middleware('check.user')->name('doctors.appoinment.store');
});

Route::get('/booking/{id}/pdf', [BookingController::class, 'pdf'])->name('booking.pdf');

Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/{slug}', [BlogController::class, 'show'])->name('blog.show');
});

Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::put('/profile/update', [AuthController::class, 'updateProfile'])->middleware(['auth'])->name('profile.update');
Route::put('/profile/password', [AuthController::class, 'updatePassword'])->name('password.update');