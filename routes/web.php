<?php

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
Route::get('/home', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');
//get('signup','SuppliersController@create')->name('signup');
//resource('suppliers','SuppliersController');
Route::get('/signup', 'SuppliersController@create')->name('signup');
Route::resource('suppliers','SuppliersController');
//Route::get('/suppliers','SuppliersController@index')->name('suppliers.index');
//Route::get('/suppliers/{id}', 'SuppliersController@show')->name('suppliers.show');
//Route::get('/suppliers/create','SuppliersController@create')->name('suppliers.create');
//Route::post('/suppliers','SuppliersController@store')->name('suppliers.store');

//Route::patch('/supplier/{supplier}', 'SupplierController@update');
//Route::delete('/supplier/{supplier}', 'SupplierController@destory');
