<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Market\DeliveryController;
use App\Http\Controllers\Admin\Market\Discount\{
    CommonController,
    CouponController,
    SpecialController,
};
use App\Http\Controllers\Admin\Market\Showcase\{
    BrandController,
    CategoryController,
    CommentController,
};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| begein_Admin
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('home');
    Route::prefix('market')->name('market.')->group(function () {
        Route::prefix('showcase')->name('showcase.')->group(function () {
            Route::prefix('category')->name('category.')->group(function () {
                Route::resource('', CategoryController::class);
            });
            Route::prefix('brand')->name('brand.')->group(function () {
                Route::resource('', BrandController::class);
            });
            Route::prefix('comment')->name('comment.')->group(function () {
                Route::resource('', CommentController::class)->only([
                    'index', 'show',
                ]);
            });
        });
        Route::prefix('delivery')->name('delivery.')->group(function () {
            Route::resource('', DeliveryController::class);
        });
        Route::prefix('discount')->name('discount.')->group(function () {
            Route::prefix('coupon')->name('coupon.')->group(function () {
                Route::resource('', CouponController::class);
            });
            Route::prefix('common')->name('common.')->group(function () {
                Route::resource('', CommonController::class);
            });
            Route::prefix('special')->name('special.')->group(function () {
                Route::resource('', SpecialController::class);
            });
        });
    });
});
/*
|--------------------------------------------------------------------------
| end_Admin
|--------------------------------------------------------------------------
*/
