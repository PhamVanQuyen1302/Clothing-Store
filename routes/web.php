<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ImageController;
use App\Http\Controllers\admin\OrderContrller;
use App\Http\Controllers\admin\OrderStatusController;
use App\Http\Controllers\admin\PaymentController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\client\AjaxController;
use App\Http\Controllers\client\AuthClienController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\OderController;
use App\Http\Controllers\client\ProductFillterController;
use App\Http\Middleware\RoleRedirect;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/{id}/user-infor', [HomeController::class, 'userInfor'])->name('home.infor');
Route::get('/{id}/product-detail', [HomeController::class, 'productDetail'])->name('home.detail');
Route::put('/{id}/update', [HomeController::class, 'update'])->name('home.update');
Route::get('/{id}/product-fillter', [ProductFillterController::class, 'productFiller'])->name('fillter.index');
Route::get('/filter_data', [AjaxController::class, 'filterData'])->name('filter_data.index');
Route::match(['get', 'post'], 'add/cart', [AjaxController::class, 'addCart'])->name('cart.add');
Route::match(['get', 'post'], 'dele/cart', [AjaxController::class, 'deleteCart'])->name('cart.dele');
Route::get('cart', [AjaxController::class, 'addToCart'])->name('cart.list');
Route::post('comments', [AjaxController::class, 'comment'])->name('comments.store');
Route::get('check-out', [OderController::class, 'save'])->name('cart.save');
Route::get('check-out/success', [OderController::class, 'success'])->name('checkout.success');
Route::post('/checkout', [OderController::class, 'processCheckout'])->name('checkout.process');
Route::get('{id}/your-order', [HomeController::class, 'yourOrder'])->name('home.yourOrder');
Route::get('{id}/cancel-order', [HomeController::class, 'cancel'])->name('home.cancel');

Route::group(['prefix' => 'auth'], function () {
    Route::match(['get', 'post'], 'login', [AuthClienController::class, 'login'])->name('auth.login')->middleware('guest');
    Route::match(['get', 'post'], 'register', [AuthClienController::class, 'register'])->middleware('guest');
    Route::match(['get', 'post'], 'logout', [AuthClienController::class, 'logout'])->name('auth.logout');
    Route::get('forgotpassword', [AuthClienController::class, 'forgotpassword'])->middleware('guest');
});


Route::prefix('admin')
    ->as('admin.')
    ->middleware('role.redirect')
    ->group(function () {

        Route::get('/dashboarh', [DashboardController::class, 'index'])->name('dashboarh');

        Route::prefix('categories')
            ->as('categories.')
            ->group(function () {
                Route::get('/',                 [CategoryController::class, 'index'])->name('index');
                Route::get('create',            [CategoryController::class, 'create'])->name('create');
                Route::post('store',            [CategoryController::class, 'store'])->name('store');
                Route::get('show/{id}',         [CategoryController::class, 'show'])->name('show');
                Route::get('{id}/edit',         [CategoryController::class, 'edit'])->name('edit');
                Route::put('{id}/update',       [CategoryController::class, 'update'])->name('update');
                Route::get('{id}/destroy',   [CategoryController::class, 'destroy'])->name('destroy');
            });

        Route::prefix('users')
            ->as('users.')
            ->group(function () {
                Route::get('/',                 [UserController::class, 'index'])->name('index');
                Route::get('create',            [UserController::class, 'create'])->name('create');
                Route::post('store',            [UserController::class, 'store'])->name('store');
                Route::get('show/{id}',         [UserController::class, 'show'])->name('show');
                Route::get('{id}/edit',         [UserController::class, 'edit'])->name('edit');
                Route::put('{id}/update',       [UserController::class, 'update'])->name('update');
                Route::get('{id}/destroy',   [UserController::class, 'destroy'])->name('destroy');
            });

        Route::prefix('products')
            ->as('products.')
            ->group(function () {
                Route::get('/',                 [ProductController::class, 'index'])->name('index');
                Route::get('create',            [ProductController::class, 'create'])->name('create');
                Route::post('store',            [ProductController::class, 'store'])->name('store');
                Route::get('show/{id}',         [ProductController::class, 'show'])->name('show');
                Route::get('{id}/edit',         [ProductController::class, 'edit'])->name('edit');
                Route::put('{id}/update',       [ProductController::class, 'update'])->name('update');
                Route::get('{id}/destroy',   [ProductController::class, 'destroy'])->name('destroy');
            });

        Route::prefix('images')
            ->as('images.')
            ->group(function () {
                Route::get('/',                 [ImageController::class, 'index'])->name('index');
                Route::get('create',            [ImageController::class, 'create'])->name('create');
                Route::post('store',            [ImageController::class, 'store'])->name('store');
                Route::get('{id}/edit',         [ImageController::class, 'edit'])->name('edit');
                Route::put('{id}/update',       [ImageController::class, 'update'])->name('update');
                Route::get('{id}/destroy',   [ImageController::class, 'destroy'])->name('destroy');
            });
        Route::prefix('roles')
            ->as('roles.')
            ->group(function () {
                Route::get('/',                 [RoleController::class, 'index'])->name('index');
                Route::get('create',            [RoleController::class, 'create'])->name('create');
                Route::post('store',            [RoleController::class, 'store'])->name('store');
                Route::get('{id}/edit',         [RoleController::class, 'edit'])->name('edit');
                Route::put('{id}/update',       [RoleController::class, 'update'])->name('update');
                Route::get('{id}/destroy',   [RoleController::class, 'destroy'])->name('destroy');
            });

        Route::prefix('orders')
            ->as('orders.')
            ->group(function () {
                Route::get('/',                 [OrderContrller::class, 'index'])->name('index');
                Route::get('{id}/show',         [OrderContrller::class, 'show'])->name('show');
                Route::post('update',         [OrderContrller::class, 'update'])->name('update');
            });

        Route::prefix('order-status')
            ->as('order-status.')
            ->group(function () {
                Route::get('/',                 [OrderStatusController::class, 'index'])->name('index');
                Route::get('create',            [OrderStatusController::class, 'create'])->name('create');
                Route::post('store',            [OrderStatusController::class, 'store'])->name('store');
                Route::get('{id}/edit',         [OrderStatusController::class, 'edit'])->name('edit');
                Route::put('{id}/update',       [OrderStatusController::class, 'update'])->name('update');
                Route::get('{id}/destroy',   [OrderStatusController::class, 'destroy'])->name('destroy');
            });
        Route::prefix('payments')
            ->as('payments.')
            ->group(function () {
                Route::get('/',                 [PaymentController::class, 'index'])->name('index');
                Route::get('create',            [PaymentController::class, 'create'])->name('create');
                Route::post('store',            [PaymentController::class, 'store'])->name('store');
                Route::get('{id}/edit',         [PaymentController::class, 'edit'])->name('edit');
                Route::put('{id}/update',       [PaymentController::class, 'update'])->name('update');
                Route::get('{id}/destroy',   [PaymentController::class, 'destroy'])->name('destroy');
            });
    });
