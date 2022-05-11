<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\MainController;
//use App\Http\Controllers\MyFirstController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes([
    'reset'=>false,
    'confirm'=>false,
    'verify'=>false,
]);

//Регистрация
Route::name('user.') ->group(function (){
    Route::view('/private', 'private')->middleware('auth')->name('private');
    Route::get('/login', function () {
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('login');
    })->name('login');
    Route::post('/login',);
});

Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/help', [MainController::class, 'help'])->name('help');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
//Route::get('/login', [MainController::class, 'login'])->name('login');
//Route::get('/registration', [MainController::class, 'registration'])->name('registration');


Route::get('/home', [MainController::class, 'main'])->name('home');
Route::get('/basket', [BasketController::class, 'basket'])->name('basket');
Route::get('/basket/place', [BasketController::class, 'basketPlace'])->name('basketPlace');
Route::post('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basketAdd');
Route::post('/basket/remove/{id}', [BasketController::class, 'basketRemove'])->name('basketRemove');

Route::get('/{cat}', [MainController::class, 'showCategory'])->name('showCategory');
Route::get('/{cat}/{product_id}', [ProductController::class, 'showProduct'])->name('showProduct');



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


