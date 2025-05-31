<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});





Route::prefix('doctors')->group(function () {
    Route::get('/', function () { return view('user.doctors.index'); })->name('doctors.index'); // Regex to allow alphanumeric characters, dashes, and underscores
    Route::get('/{id}', function ($slug) {
        return view('user.doctors.show', ['slug' => $slug]);
    })->name('doctors.show');
});
Route::prefix('blog')->group(function () {
    Route::get('/blog', function () {
    return view('user.blog.index');
})->name('blog.index');
});