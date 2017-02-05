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

	Route::get('/mcargos', 'UserController@getMcargos');
	Route::post('/mcargos', 'UserController@postMcargos');
	Route::get('/adminuser', 'UserController@getAdminuser');
	Route::post('/adminuser', 'UserController@postAdminuser');
	Route::get('/mcbombero', 'UserController@getMcbombero');
	Route::post('/mcbombero', 'UserController@postMcbombero');
	Route::get('/mpcargos', 'UserController@getMpcargos');
	Route::post('/mpcargos', 'UserController@postMpcargos');
	Route::get('/mtequipos', 'UserController@getMtequipos');
	Route::post('/mtequipos', 'UserController@postMtequipos');
	Route::get('/mcemergencia', 'UserController@getMcemergencia');
	Route::post('/mcemergencia', 'UserController@postMcemergencia');
	Route::get('/editarusuario/{id}', 'UserController@editUser');
	Route::post('/editarusuario/{id}', 'UserController@updateUser');

});
	
Route::get('/home', 'HomeController@index');

