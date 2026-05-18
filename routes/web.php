<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product/{id}', function ($id) {
    // TODO: データベースで検索
    $message = "商品IDは {$id} です。";
    return view('product.show', ['message' => $message]);
});
