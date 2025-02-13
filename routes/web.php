<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/dashboard', 'Admin\FrontEndController@index')->name('dashboard');
    Route::get('categories', 'Admin\CategoryController@index')->name('categories');
    Route::get('add-category', 'Admin\CategoryController@add')->name('add.category');
    Route::post('insert-category', 'Admin\CategoryController@insert')->name('insert.category');
    Route::get('edit-prod/{id}', [CategoryController::class, 'edit'])->name('edit.prod');
    Route::post('update-category/{id}', [CategoryController::class, 'update'])->name('update.category');
    Route::get('delete-category/{id}', [CategoryController::class, 'delete'])->name('delete.prod');


    Route::get('products', [ProductController::class, 'index'])->name('products');
    Route::get('add-products', [ProductController::class, 'add'])->name('add.products');
    Route::post('insert-product', [ProductController::class, 'insert'])->name('insert.product');
 
 });
