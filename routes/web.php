<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Authentication
Route::get('auth/login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');
Route::post('auth/authenticate', [\App\Http\Controllers\Auth\AuthController::class, 'authenticate'])->name('authenticate');
Route::post('auth/logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');
Route::get('auth/register', [\App\Http\Controllers\Auth\AuthController::class, 'register'])->name('register');
Route::post('auth/register_store', [\App\Http\Controllers\Auth\AuthController::class, 'register_store'])->name('register.store');

Route::get('parent-category/{name}/products', [\App\Http\Controllers\Admin\GeneralController::class, 'parentCategory'])->name('parent_category.products');
Route::get('category/{name}/products', [\App\Http\Controllers\Admin\GeneralController::class, 'category'])->name('category.products');
Route::get('sub-category/{name}/products', [\App\Http\Controllers\Admin\GeneralController::class, 'subCategory'])->name('sub_category.products');
Route::get('sub-category-item/{name}/products', [\App\Http\Controllers\Admin\GeneralController::class, 'subCategoryItem'])->name('sub_category_item.products');
Route::get('product-details/{product}', [\App\Http\Controllers\Admin\GeneralController::class, 'productDetails'])->name('product.details');
Route::get('/', [\App\Http\Controllers\Admin\GeneralController::class, 'home']);
Route::get('/all-products', [\App\Http\Controllers\Nordiccell\HomeController::class, 'allProduct'])->name('all-product');



Route::post('/add/{product}/cart', [\App\Http\Controllers\Nordiccell\CartController::class, 'addCart'])->name('add_cart');
Route::get('/show/cart', [\App\Http\Controllers\Nordiccell\CartController::class, 'showCart'])->name('show_cart');
Route::get('/cart/{cart}/delete', [\App\Http\Controllers\Nordiccell\CartController::class, 'removeCart'])->name('remove_cart');
Route::get('/order', [\App\Http\Controllers\Nordiccell\OrderController::class, 'order'])->name('order');

Route::get('/cart-count', [\App\Http\Controllers\Nordiccell\CartController::class, 'getCartCount']);
