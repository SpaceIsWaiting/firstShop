<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\MyFirstController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [MainController::class, 'main'])->name('home');
Route::get('/products', [MainController::class, 'products'])->name('products');
Route::get('/cart', [MainController::class, 'cart'])->name('cart');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/help', [MainController::class, 'help'])->name('help');
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/registration', [MainController::class, 'registration'])->name('registration');
//Route::get('/', [MyFirstController::class, 'main']);
//Route::get('/about', [MyFirstController::class, 'about']);
//Route::get('/sign-in', [MyFirstController::class, 'signIn']);
//Route::get('/review', [MyFirstController::class, 'review'])->name('review');
//Route::post('/review/check', [MyFirstController::class, 'review_check']);
//Route::get('/products', [ProductController::class, 'products']);#отображение товаров
//Route::get('/products/create', [ProductController::class, 'create']);#создание товаров
//Route::get('/products/update', [ProductController::class, 'update']);#редактирование товаров
//Route::get('/products/delete', [ProductController::class, 'delete']);#удаление товаров
//Route::get('/products/restore', [ProductController::class, 'restore']);#восстановление товаров
//Route::get('/products/first_or_create', [ProductController::class, 'first_or_create']);#создание или показ
//Route::get('/products/update_or_create', [ProductController::class, 'update_or_create']);#редактирование или показ

//Auth::routes();


