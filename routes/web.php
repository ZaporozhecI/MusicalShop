<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello', ['title'=>'Hello world!']);
});
use App\Http\Controllers\CategoryController;
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);

use App\Http\Controllers\ProductController;
Route::get('/product', [ProductController::class, 'index']);
Route::get('/order/{id}', [ProductController::class, 'show']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product', [ProductController::class, 'store']);
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/product/update/{id}', [ProductController::class, 'update']);
Route::get('/product/destroy/{id}', [ProductController::class, 'destroy']);
