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

Route::get('/', 'PagesController@index')->name('welcome');
Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::get('/cart', 'PagesController@cart')->name('cart');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//contact form
Route::post('/store', 'ContactController@store')->name('contact.store');




//admin
Route::get('/admin', 'admin\AdminController@admincontact')->name('admin');
Route::get('/admin-productinfo', 'admin\AdminController@adminproduct')->name('product');
Route::post('/admin-product', 'admin\AdminController@productstore')->name('store');

//search
Route::get('/search', 'SearchController@search')->name('search');
