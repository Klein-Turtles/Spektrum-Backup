<?php

use App\Http\Controllers\adminPortoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\inputPortofolioController;


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
Route::get('/services/selengkapnya', [ServicePageController::class, 'layananPopuler'])->name('layananPopuler');

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

    Route::get('/dashboard/portofolio', [adminPortoController::class, 'portoShow'])->name('admin_porto');
    Route::get('/dashboard/portofolio/{id}/edit', [adminPortoController::class, 'edit'])->name('edit_porto');
    Route::put('/dashboard/portofolio/{id}', [adminPortoController::class, 'update'])->name('update_porto');
});

Route::get('/dashboard/product', function () {
    return view('dashboard.product');
})->middleware(['auth', 'verified'])->name('admin_product');

Route::get('/dashboard/service', function () {
    return view('dashboard.adminservice.service');
})->middleware(['auth', 'verified'])->name('admin_service');

Route::get('/dashboard/input-service', function () {
    return view('dashboard.adminservice.create');
})->middleware(['auth', 'verified'])->name('admin_input_service');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
