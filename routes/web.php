<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/product/{id}', function ($id) {
    // TODO: データベースで検索
    $message = "商品IDは {$id} です。";
    return view('product.show', ['message' => $message]);
});
