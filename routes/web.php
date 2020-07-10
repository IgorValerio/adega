<?php

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


Route::get('/', 'AdegaController@home');

Route::get('/about', 'AdegaController@about');

Route::get('/login', 'UsuariosController@loginView')->name('login');

Route::post('/login', 'UsuariosController@login');

Route::get('/logout', 'UsuariosController@logout');

Route::get('/register', 'UsuariosController@registerView');

Route::post('/register', 'UsuariosController@store');

Route::get('/panel', 'UsuariosController@panel')->middleware('auth');

Route::get('/panel/orders', 'UsuariosController@orders')->middleware('auth');

Route::get('/panel/address', 'UsuariosController@address')->middleware('auth');

Route::get('/panel/address_edit', 'UsuariosController@address_edit')->middleware('auth');

Route::get('/panel/account_edit', 'UsuariosController@account_edit')->middleware('auth');

Route::get('/shoppingCart', 'AdegaController@shoppingCart');

Route::post('/newsletter', 'NewsletterController@registerNewsletter');

Route::get('/product', 'ProductController@showProduct');

Route::get('/products/wines', 'ProductController@wineList');



Route::get('/products/kits', 'ProductController@kitsList');

Route::get('/products/distilleds', 'ProductController@distilledsList');



