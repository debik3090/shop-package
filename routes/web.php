<?php

use Illuminate\Support\Facades\Route;
use Vendor\ShopPackage\Http\Controllers\ProductController;

Route::get('/test-from-package', function () {
    return 'ROUTES FROM PACKAGE WORK';
});

Route::get('/products', [ProductController::class, 'index'])
    ->name('shop.products.index');
