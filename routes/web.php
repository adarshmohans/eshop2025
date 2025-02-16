<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Frontend\FrontEndController;
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

Route::get('/',[FrontEndController::class, 'index'])->name('index');
Route::get('category',[FrontEndController::class, 'category'])->name('category'); //user category
Route::get('view-category/{slug}',[FrontEndController::class, 'viewcategory'])->name('view.category'); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','isAdmin']], function () { //Admin

    Route::get('/dashboard', 'Admin\FrontEndController@index')->name('dashboard');
    Route::get('categories', 'Admin\CategoryController@index')->name('categories');//admin categories
    Route::get('add-category', 'Admin\CategoryController@add')->name('add.category');
    Route::post('insert-category', 'Admin\CategoryController@insert')->name('insert.category');
    Route::get('edit-prod/{id}', [CategoryController::class, 'edit'])->name('edit.prod');
    Route::post('update-category/{id}', [CategoryController::class, 'update'])->name('update.category');
    Route::get('delete-category/{id}', [CategoryController::class, 'delete'])->name('delete.prod');


    Route::get('products', [ProductController::class, 'index'])->name('products');
    Route::get('add-products', [ProductController::class, 'add'])->name('add.products');
    Route::post('insert-product', [ProductController::class, 'insert'])->name('insert.product');
    Route::get('edit-product/{id}', [ProductController::class, 'edit'])->name('edit.product');
    Route::post('update-product/{id}', [ProductController::class, 'update'])->name('update.product');
    Route::get('delete-product/{id}', [ProductController::class, 'delete'])->name('delete.product');
 
 });
