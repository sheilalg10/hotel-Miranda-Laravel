<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;

Route::resource('activities', ActivityController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
   return view('aboutUs'); 
});

Route::get('/rooms', function () {
   return view('rooms'); 
});

Route::get('/offers', function () {
   return view('offers'); 
});

Route::get('/contact', function () {
   return view('contact'); 
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
