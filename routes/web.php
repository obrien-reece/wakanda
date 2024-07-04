<?php

use App\Http\Controllers\ShoppingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('shop');
});

Route::group(['as' => 'shopping.'], function() {
    Route::get('/', [ShoppingController::class, 'index'])->name('index');
});
