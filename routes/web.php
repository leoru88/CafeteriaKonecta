<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/producto/index', 'App\Http\Controllers\productosController@index')->name('admin.producto.index');
Route::get('/admin/producto/create', 'App\Http\Controllers\productosController@create')->name('admin.producto.create');
Route::post('/admin/producto/store', 'App\Http\Controllers\productosController@store')->name('admin.producto.store');
Route::get('/admin/producto/{productoId}/edit ', 'App\Http\Controllers\productosController@edit ')->name('admin.producto.edit');



Route::put('/admin/producto/{productoId}/update', 'App\Http\Controllers\productosController@update')->name('admin.producto.update');




Route::delete('/admin/producto/{productoId}/destroy', 'App\Http\Controllers\ProductosController@destroy')->name('admin.producto.destroy');
Route::get('/admin/producto/sell', 'App\Http\Controllers\SellController@sell')->name('admin.producto.sell');
Route::post('/admin/producto/almacenar', 'App\Http\Controllers\SellController@almacenar')->name('admin.producto.almacenar');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
