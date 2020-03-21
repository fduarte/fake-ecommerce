<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Products
Route::middleware(['auth'])->group(function() {
    Route::get('/products', 'ProductController@index')->name('product.index');
    Route::get('/product/create', 'ProductController@create')->name('product.create');
    Route::post('/product/store', 'ProductController@store')->name('product.store');
    Route::get('/product/{id}/edit', 'ProductController@edit')->name('product.edit');
    Route::post('/product/update', 'ProductController@update')->name('product.update');
    Route::get('/product/{id}/destroy', 'ProductController@destroy')->name('product.destroy');
});


//Route::get('/', 'ProductController@index')->name('product.index')->middleware('auth');

// Orders
Route::middleware(['auth'])->group(function() {
    Route::get('/orders', 'OrderController@index')->name('order.index');
    Route::get('/order/create', 'OrderController@create')->name('order.create');
    Route::post('/order/store', 'OrderController@store')->name('order.store');
    Route::get('/order/{id}/edit', 'OrderController@edit')->name('order.edit');
    Route::post('/order/update', 'OrderController@update')->name('order.update');
    Route::get('/order/{id}/destroy', 'OrderController@destroy')->name('order.destroy');
});

// Inventory
Route::middleware(['auth'])->group(function() {
    Route::get('/inventory', 'InventoryController@index')->name('inventory.index');
    Route::get('/inventory/create', 'InventoryController@create')->name('inventory.create');
    Route::post('/inventory/store', 'InventoryController@store')->name('inventory.store');
    Route::get('/inventory/{id}/edit', 'InventoryController@edit')->name('inventory.edit');
    Route::post('/inventory/update', 'InventoryController@update')->name('inventory.update');
    Route::get('/inventory/{id}/destroy', 'InventoryController@destroy')->name('inventory.destroy');
});
