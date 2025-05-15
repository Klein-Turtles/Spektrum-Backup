<?php

use App\Http\Controllers\adminPortoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\inputPortofolioController;
use App\Http\Controllers\productPageController;

Route::get('/', function () {
    return view('home');
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

Route::get('/about', function () {
    return view('about');})->name('about');

Route::get('/services', [ServicePageController::class, 'service'])->name('services');
Route::get('/services/detail-service/{slug}', [ServicePageController::class, 'detailService'])->name('detail-service');


Route::get('/products', [productPageController::class, 'product'])->name('product');
Route::get('/products/detail-product/{slug}', [productPageController::class, 'detailProduct'])->name('detail-product');


Route::get('/portofolio', [ServicePageController::class, 'portofolio'])->name('portofolio');
Route::get('/portofolio/detail-porto/{slug}', [ServicePageController::class, 'detailPorto'])->name('detail-porto');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//Routing Dashboard For product
Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    
    // Halaman utama daftar produk
    Route::get('/product', [productPageController::class, 'index'])->name('admin_product');

    // Form untuk input produk baru
    Route::get('/input-product', [productPageController::class, 'create'])->name('product_input');

    // Proses penyimpanan produk baru
    Route::post('/input-product', [productPageController::class, 'store'])->name('product_store');

    // Form untuk edit produk berdasarkan ID
    Route::get('/product/{product}/edit', [productPageController::class, 'edit'])->name('edit_product');

    // Proses update data produk
    Route::put('/product/{product}', [productPageController::class, 'update'])->name('update_product');

    // Proses penghapusan produk
    Route::delete('/product/{products}/hapus', [productPageController::class, 'destroy'])->name('destroy_product');
});

//Batas








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


//routing dashboard Service

Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    // Halaman utama daftar layanan
    Route::get('/service', [ServicePageController::class, 'index'])->name('admin_service');

    // Form input layanan
    Route::get('/input-service', [ServicePageController::class, 'create'])->name('service_input');

    // Proses simpan layanan
    Route::post('/input-service', [ServicePageController::class, 'store'])->name('service_store');

    // Form edit layanan
    Route::get('/service/{layanan}/edit', [ServicePageController::class, 'edit'])->name('edit_service');

    // Proses update layanan
    Route::put('/service/{layanan}', [ServicePageController::class, 'update'])->name('update_service');

    // Hapus layanan
    Route::delete('/service/{layanan}/hapus', [ServicePageController::class, 'destroy'])->name('destroy_service');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
