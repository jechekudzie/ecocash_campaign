<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/faqs', [SiteController::class, 'faqs'])->name('faqs');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/getting-started', [SiteController::class, 'gettingStarted'])->name('getting-started');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
