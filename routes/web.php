<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return ('Selamat Datang Pada Tampilan Awal Agta');
});

Route::get('/category/food-beverage', [ProductController::class, 'food']);
Route::get('/category/beauty-health', [ProductController::class, 'beauty']);
Route::get('/category/home-care', [ProductController::class, 'home']);
Route::get('/category/baby-kid', [ProductController::class, 'baby']);

Route::get('/user/{name}/ID/{id}', [UserController::class, 'user_name']);

Route::get('/transaksi/{hari}', [SalesController::class, 'transaksi_sales']);
