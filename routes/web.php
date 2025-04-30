<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicePageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/services-{page}', [ServicePageController::class, 'service'])->name('services.show');
Route::get('/products-{page}', [ServicePageController::class, 'product'])->name('products.show');

Route::get('/portofolio', function () {
    return view('portofolio');})->name('portofolio');

Route::get('/about', function () {
    return view('about');})->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
