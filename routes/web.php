<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index.page');

Route::get('/struktur', function () {
    return view('about');
})->name('struktur.page');

Route::get('/layanan', function () {
    return view('service');
})->name('layanan.page');

Route::get('/tentang', function () {
    return view('project');
})->name('tentang.page');

Route::get('/contact', function () {
    return view('contact');
})->name('contact.page');

// Route::get('/login', function () {
//     return view('login');
// })->name('login.page');

Route::get('/welcome', function () {
    return view('welcome');
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
