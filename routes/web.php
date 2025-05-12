<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\inputPortofolioController;
use App\Http\Controllers\ServiceController;


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

Route::get('/portofolio', [ServicePageController::class, 'portofolio'])->name('portofolio');
Route::get('/portofolio/detail-porto/{slug}', [ServicePageController::class, 'detailPorto'])->name('detail-porto');

Route::get('/product', [ServicePageController::class, 'product'])->name('product');
Route::get('/product/detail-product/{slug}', [ServicePageController::class, 'detailProduct'])->name('detail-product');

Route::get('/admin', function () {
    return view('layouts.admin');})->name('admin');

Route::get('/about', function () {
    return view('about');})->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/portofolio', function () {
    return view('dashboard.portofolio');
})->middleware(['auth', 'verified'])->name('admin_porto');

Route::get('/dashboard/portofolio/input', function () {
    return view('dashboard.input-porto');
})->middleware(['auth', 'verified'])->name('input_porto');

Route::middleware('auth')->group(function () {
    // Route untuk menampilkan form input portofolio
    Route::get('/dashboard/input-porto', [inputPortofolioController::class, 'create'])->name('porto_input');

    // Route untuk menyimpan portofolio
    Route::post('/dashboard/input-porto', [inputPortofolioController::class, 'store'])->name('porto_store');
});

Route::get('/dashboard/product', function () {
    return view('dashboard.product');
})->middleware(['auth', 'verified'])->name('admin_product');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/detail{id}', [ServiceController::class, 'show'])->name('services.detail');


require __DIR__.'/auth.php';
