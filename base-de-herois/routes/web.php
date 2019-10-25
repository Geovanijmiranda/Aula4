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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function() {
  
   Route::get('/usuario', 'usuarioController@getUsuarios')->name('usuarios');
   Route::get('/usuario2', 'usuarioController@getUsuarios2')->name('usuarios2');
   Route::get('herois/lista', 'HeroiController@getListaController')->name('lista');
   Route::get('herois/novo', 'HeroiController@create')->name('novo');
   Route::post('herois/salva', 'HeroiController@store')->name('salva');

});
