<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('categories', [\App\Http\Controllers\ApiController::class, 'fetchCategory']);
Route::post('sub-categories', [\App\Http\Controllers\ApiController::class, 'fetchSubCategory']);
Route::post('sub-category-items', [\App\Http\Controllers\ApiController::class, 'fetchSubCategoryItem']);
