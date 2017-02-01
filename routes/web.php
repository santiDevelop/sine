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


Route::group(['middleware'=>'admin','namespace'=>'Admin'],function(){
	Route::get('/adminuser', 'UserController@adminuser');
	Route::get('/mcbombero', 'UserController@mcbombero');
	Route::get('/mcargos', 'UserController@mcargos');
	Route::get('/mpcargos', 'UserController@mpcargos');
	Route::get('/mtequipos', 'UserController@mtequipos');
	Route::get('/mcemergencia', 'UserController@mcemergencia');
	Route::get('/crearusuario', 'CreateUser@crearusuario');
	

});
	
Route::get('/home', 'HomeController@index');

