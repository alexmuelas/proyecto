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

Auth::routes(['verify' => true]);

Route::get('set_language/{lang}', 'Controller@setLanguage')->name('set_language');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addmoney', 'PlayerController@addmoney')->name('addmoney');
Route::get('/packs/{pack}/comprar', 'PacksController@comprado');

//Tabla users
Route::get('/users', 'UsersController@table_users')->name('users');
Route::get('/editmyuser', 'UsersController@edit_my_user')->name('edit_my_user');

Route::put('/usersedit', 'UsersController@update');



//Tabla players
Route::get('/player', 'PlayerController@table_player')->name('player');


//Rutas de PayPal
Route::post('paypal/confirm', 'ProductController@confirm')->name('paypal-confirm');
Route::post('paypal/pay', 'PaypalController@payPaypal')->name('paypal-pay');
Route::get('paypal/status', 'PaypalController@getStatus')->name('paypal-status');

Route::post('download', 'PdfController@download')->name('descargarFactura');
