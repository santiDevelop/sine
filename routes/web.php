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
	Route::get('/adminuser', 'UserController@Adminuser');
	Route::get('/mcbombero', 'UserController@Mcbombero');
	Route::get('/mcargos', 'UserController@Mcargos');
	Route::get('/mpcargos', 'UserController@Mpcargos');
	Route::get('/mtequipos', 'UserController@index');
	Route::get('/mcemergencia', 'UserController@Mcemergencia');


});

Route::get('/home', 'HomeController@index');

