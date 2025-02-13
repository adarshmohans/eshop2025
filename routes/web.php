<?php

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
 
 });
