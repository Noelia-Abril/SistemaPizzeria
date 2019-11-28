<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth/login');
});
Route::resource('almacen/cliente','ClienteController');
Route::resource('almacen/pizza','PizzaController');
Route::resource('almacen/ingrediente','IngredienteController');
Route::resource('almacen/inicio','InicioController');
Route::resource('almacen/empleado','EmpleadoController');
Route::resource('venta/menu','menuController@index');
Route::resource('pantalla/acercaDe','AcercaDeController@index');
Route::auth();
Route::get('/home', 'HomeController@index');

//Route::get('acercaDe','AcercaDeController@index'); cuando esta fuera solo en views