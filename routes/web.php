<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardRouteRenderController;
use App\Http\Controllers\DMEEquipmentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'app.index')->name('app.home');

Route::get('/dme-equipments', [DMEEquipmentController::class, 'index'])->name('app.products');

Route::view('/caregivers', 'app.caregivers')->name('app.caregivers');

Route::view('/resources/about', 'app.resources.about')->name('app.resources.about');

Route::view('/resources/blogs', 'app.resources.blogs')->name('app.resources.blogs');

Route::view('/login-register', 'app.login-register')
    ->name('app.login-register');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(DashboardRouteRenderController::class)->middleware(['auth', 'verified'])->group(function () {
        Route::get('/user/dashboard', 'index')->name('user.dashboard');
        Route::get('/user/cart', 'cart')->name('user.cart');
        Route::get('/user/orders', 'orders')->name('user.orders');
        Route::get('/user/order-history', 'orderHistory')->name('user.order-history');
    });

    Route::controller(CartController::class)->group(function () {
        Route::get('/user/cart/store/{id}', 'store')->name('user.cart.store');
        Route::get('/user/cart/destroy/{id}', 'destroy')->name('user.cart.destroy');
        Route::get('/user/cart/clear', 'clear')->name('user.cart.clear');
    });

    Route::controller(OrderController::class)->group(function () {
        Route::get('/user/order/create/{id}', 'create')->name('order.create');
        Route::get('/user/order/store/{id}', 'store')->name('order.store');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
