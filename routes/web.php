<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardRouteRenderController;
use App\Http\Controllers\DMEEquipmentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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
    Route::controller(DashboardRouteRenderController::class)
    ->prefix('/user')
    ->group(function () {
        Route::get('/dashboard', 'index')->name('user.dashboard');
        Route::get('/cart', 'cart')->name('user.cart');
        Route::get('/orders', 'orders')->name('user.orders');
        Route::get('/order-history', 'orderHistory')->name('user.order-history');
    });

    Route::controller(CartController::class)
    ->prefix('/user/cart')
    ->group(function () {
        Route::get('/store/{id}', 'store')->name('user.cart.store');
        Route::get('/destroy/{id}', 'destroy')->name('user.cart.destroy');
        Route::get('/clear', 'clear')->name('user.cart.clear');
    });

    Route::controller(OrderController::class)
    ->prefix('/user')
    ->group(function () {
        Route::get('/order/create/{id}', 'create')->name('order.create');
        Route::get('/order/store/{id}', 'store')->name('order.store');
    });

    Route::prefix('/admin')->middleware('admin')->group(function() {
        Route::controller(AdminController::class)
        ->group(function() {
            Route::get('/','index')->name('admin.dashboard');
        });

        Route::controller(ProductController::class)->group(function () {
            Route::get('/create','create')->name('admin.create');
            Route::post('/create', 'store')->name('admin.store');
            
            Route::get('/edit/{id}','edit')->name('admin.edit');
            Route::put('/update/{id}','update')->name('admin.update');

            Route::get('/destroy/{id}', 'destroy')->name('admin.destroy');
            Route::get('/clear-list', 'clearList')->name('admin.clearList');
        });
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
