<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Catalogue\CartController;
use App\Http\Controllers\Catalogue\CategoriesController;
use App\Http\Controllers\Catalogue\ProductsController;
use App\Http\Controllers\Catalogue\SubCategoriesController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::prefix('auth')->controller(AuthController::class)->group(function () {
        Route::get("me", "getUser");
        Route::post("logout", "logout");
    });

    Route::prefix('category')->controller(CategoriesController::class)->group(function () {
        Route::get("/", "index");
    });

    Route::prefix('subCategory')->controller(SubCategoriesController::class)->group(function () {
        Route::get("/", "index");
    });
    Route::prefix('product')->controller(ProductsController::class)->group(function () {
        Route::get("/", "index");
    });

    Route::prefix('cart')->controller(CartController::class)->group(function () {
        Route::get("/", "index");
        Route::post('/', 'store');
    });
});
Route::prefix("auth")->controller(AuthController::class)->group(function () {
    Route::post("login", "login")->name('login');
});
