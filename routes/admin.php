<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\LeaderController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\LocalizationController;


//Route::group(['middleware' => ['localisation']], function () {

Route::post( 'login/authenticate', [\App\Http\Controllers\Admin\AuthController::class, 'authenticate'])->name('admin.authenticate');
Route::get( 'login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('admin.login');
Route::get('logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');
//Route::group(['middleware' => ['role:admin']], function () {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::resource('parent_categories', \App\Http\Controllers\Admin\ParentCategoryController::class);
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('sub_categories', \App\Http\Controllers\Admin\SubCategoryController::class);
    Route::resource('sub_category_items', \App\Http\Controllers\Admin\SubCategoryItemController::class);
    Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
    Route::resource('sub_products', \App\Http\Controllers\Admin\SubProductController::class);
    Route::resource('product_images', \App\Http\Controllers\Admin\ProductImageController::class);
    Route::get('product/{product}/images', [\App\Http\Controllers\Admin\GeneralController::class, 'index'])->name('products.images');
    Route::get('product/{product}/sub_products', [\App\Http\Controllers\Admin\GeneralController::class, 'subProduct'])->name('products.sub_products');
    Route::get('users', [\App\Http\Controllers\Admin\GeneralController::class, 'users'])->name('users');
    Route::delete('user/delete', [\App\Http\Controllers\Admin\GeneralController::class, 'userDestroy'])->name('user.destroy');
    Route::put('admin/users/{id}', [\App\Http\Controllers\Admin\GeneralController::class,'userChangeStatus'])->name('admin.changeStatus');



//});

