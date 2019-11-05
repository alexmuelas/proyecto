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
Route::get('/showmyuser', 'UsersController@show_my_user')->name('show_my_user');
Route::get('/user/{user}/edit', 'UsersController@edit_user')->name('edit_user');
Route::get('/new_user', 'UsersController@new_user')->name('new_user');
Route::post('/create_user', 'UsersController@store');

Route::put('/usersedit', 'UsersController@update');
Route::put('/user/{user}', 'UsersController@update_user');


Route::delete('/users/{user}', 'UsersController@destroy');

Route::get('/changepassword', 'UsersController@change_password')->name('change_password');
Route::put('/user/{user}', 'UsersController@updatePass')->name('actualizarPass');





//Tabla players
Route::get('/player', 'PlayerController@table_player')->name('player');
Route::get('/new_player', 'PlayerController@new_player')->name('new_player');
Route::post('/create_player', 'PlayerController@store');
Route::get('/player/{player}/edit', 'PlayerController@edit_player')->name('edit_player');

Route::put('/player/{player}', 'PlayerController@update_player');



Route::delete('/player/{player}', 'PlayerController@destroy');
//Rutas de PayPal
Route::post('paypal/confirm', 'ProductController@confirm')->name('paypal-confirm');
Route::post('paypal/pay', 'PaypalController@payPaypal')->name('paypal-pay');
Route::get('paypal/status', 'PaypalController@getStatus')->name('paypal-status');

Route::post('download', 'PdfController@download')->name('descargarFactura');
