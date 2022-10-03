<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;

Route::group(['prefix'=>'customer'],function(){
    //Frontend Routes  
    Route::group(['middleware' => ['customer']], function () {
        Route::get('/', [IndexController::class,'index'])->name('indexHome');
        Route::get('/about', [IndexController::class,'about'])->name('about');
        Route::get('/services', [IndexController::class,'services'])->name('services');
        Route::get('/shop', [IndexController::class, 'shop'])->name('shop');
        Route::get('/shopGrid', [IndexController::class, 'shopGrid'])->name('shopGrid');
        Route::get('/blog', [IndexController::class, 'blog'])->name('blog');
        Route::get('/blogGrid', [IndexController::class, 'blogGrid'])->name('blogGrid');
        Route::get('/blogDetails', [IndexController::class, 'blogDetails'])->name('blogDetails');
        Route::get('/cart/{id}', [IndexController::class, 'cart'])->name('cart');
        Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
        Route::get('/servicesDetails', [IndexController::class, 'servicesDetails'])->name('servicesDetails');
        Route::get('/checkOut', [IndexController::class, 'checkOut'])->name('checkOut');
        Route::get('/productDetails/{id}', [IndexController::class, 'productDetails'])->name('productDetails');
        Route::get('/modalView/{id}', [IndexController::class, 'modalView'])->name('modalView');
    });
});