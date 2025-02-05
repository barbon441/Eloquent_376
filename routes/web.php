<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// แยกออกมาให้ถูกต้อง
Route::get('/products', [ProductController::class, 'index']);
