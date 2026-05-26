<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;

Route::controller(GroupController::class)->group(function () {
    Route::redirect('/', '/catalog');
    Route::get('/catalog', 'index')->name('catalog.index');
    Route::get('/catalog/category/{id}', 'category')->name('catalog.category');
    Route::get('/catalog/product/{id}', 'product')->name('catalog.product');
});
