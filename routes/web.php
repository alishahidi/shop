<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Ckeditor\CkeditorController;
use App\Http\Controllers\Admin\Content\{
    ContentCategoryController,
    FaqController,
    MenuController
};
use App\Http\Controllers\Admin\Market\DeliveryController;
use App\Http\Controllers\Admin\Market\Discount\{
    CommonDiscountController,
    CouponDiscountController,
    SpecialDiscountController,
};
use App\Http\Controllers\Admin\Market\Order\{
    AllOrderController,
    CanceledOrderController,
    NewOrderController,
    OrderController,
    ReturnedOrderController,
    SendingOrderController,
    UnpaidOrderController,
};
use App\Http\Controllers\Admin\Market\Payment\{
    AttendancePaymentController,
    OfflinePaymentController,
    OnlinePaymentController,
    PaymentController
};
use App\Http\Controllers\Admin\Market\Showcase\{
    BrandController,
    CategoryController,
    CommentController,
    ProductController,
    ProductGalleryController,
    PropertyController,
    StoreController,
    StoreDecreaseController,
    StoreIncreaseController,
};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| begein_Admin
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('home');
    Route::prefix('ckeditor')->name('ckeditor.')->group(function () {
        Route::post('/upload', [CkeditorController::class, 'upload'])->name('upload');
    });
    Route::prefix('market')->name('market.')->group(function () {
        Route::prefix('showcase')->name('showcase.')->group(function () {
            Route::prefix('category')->name('category.')->group(function () {
                Route::resource('', CategoryController::class);
            });
            Route::prefix('propery')->name('property.')->group(function () {
                Route::resource('', PropertyController::class);
            });
            Route::prefix('brand')->name('brand.')->group(function () {
                Route::resource('', BrandController::class);
            });
            Route::prefix('store')->name('store.')->group(function () {
                Route::resource('', StoreController::class);
                Route::get('/increase', [StoreIncreaseController::class, 'index'])->name('increase');
                Route::get('/decrease', [StoreDecreaseController::class, 'index'])->name('decrease');
            });
            Route::prefix('comment')->name('comment.')->group(function () {
                Route::resource('', CommentController::class)->only([
                    'index', 'show',
                ]);
            });
            Route::prefix('product')->name('product.')->group(function () {
                Route::resource('', ProductController::class);
                Route::prefix('gallery')->name('gallery.')->group(function () {
                    Route::resource('', ProductGalleryController::class);
                });
            });
        });
        Route::prefix('delivery')->name('delivery.')->group(function () {
            Route::resource('', DeliveryController::class);
        });
        Route::prefix('order')->name('order.')->group(function () {
            Route::prefix('new')->name('new.')->group(function () {
                Route::resource('', NewOrderController::class)->only([
                    'index', 'show'
                ]);
            });
            Route::prefix('sending')->name('sending.')->group(function () {
                Route::resource('', SendingOrderController::class)->only([
                    'index', 'show'
                ]);
            });
            Route::prefix('unpaid')->name('unpaid.')->group(function () {
                Route::resource('', UnpaidOrderController::class)->only([
                    'index', 'show'
                ]);
            });
            Route::prefix('returned')->name('returned.')->group(function () {
                Route::resource('', ReturnedOrderController::class)->only([
                    'index', 'show'
                ]);
            });
            Route::prefix('canceled')->name('canceled.')->group(function () {
                Route::resource('', CanceledOrderController::class)->only([
                    'index', 'show'
                ]);
            });
            Route::prefix('status')->name('status.')->group(function () {
                Route::get('/order', [OrderController::class, 'orderStatus'])->name('order');
                Route::get('/send', [OrderController::class, 'sendStatus'])->name('send');
            });
            Route::get('/all', [OrderController::class, 'index'])->name('all');
            Route::get('/cancel', [OrderController::class, 'cancel'])->name('cancel');
        });
        Route::prefix('payment')->name('payment.')->group(function () {
            Route::prefix('online')->name('online.')->group(function () {
                Route::resource('', OnlinePaymentController::class)->only([
                    'index', 'show'
                ]);
            });
            Route::prefix('offline')->name('offline.')->group(function () {
                Route::resource('', OfflinePaymentController::class)->only([
                    'index', 'show'
                ]);
            });
            Route::prefix('attendance')->name('attendance.')->group(function () {
                Route::resource('', AttendancePaymentController::class)->only([
                    'index', 'show'
                ]);
            });
            Route::get('/all', [PaymentController::class, 'index'])->name('all');
            Route::get('/confirm', [PaymentController::class, 'confirm'])->name('confirm');
        });
        Route::prefix('discount')->name('discount.')->group(function () {
            Route::prefix('coupon')->name('coupon.')->group(function () {
                Route::resource('', CouponDiscountController::class);
            });
            Route::prefix('common')->name('common.')->group(function () {
                Route::resource('', CommonDiscountController::class);
            });
            Route::prefix('special')->name('special.')->group(function () {
                Route::resource('', SpecialDiscountController::class);
            });
        });
    });

    Route::prefix('content')->name('content.')->group(function () {
        Route::prefix('category')->name('category.')->group(function () {
            Route::resource('', ContentCategoryController::class);
        });
        Route::prefix('comment')->name('comment.')->group(function () {
            Route::resource('', CommentController::class);
        });
        Route::prefix('faq')->name('faq.')->group(function () {
            Route::resource('', FaqController::class);
        });
        Route::prefix('menu')->name('menu.')->group(function () {
            Route::resource('', MenuController::class);
        });
    });
});
/*
|--------------------------------------------------------------------------
| end_Admin
|--------------------------------------------------------------------------
*/
