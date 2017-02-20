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

// Rutas Comunes sin Necesidad de perfil Especifico
Route::get('/home', 'HomeController@index');
Route::get('/resetpw', 'HomeController@resetpw');
Route::post('/resetpw', 'HomeController@cambiopw');

Route::group(['middleware'=>'admin','namespace'=>'Admin'],function(){
// Aqui van las rutas de las vistas para los que usaran los Administrador
	Route::get('/mcargos', 'UserController@getMcargos');
	Route::post('/mcargos', 'UserController@postMcargos');

	Route::get('/mestaciones', 'UserController@getMestaciones');
	Route::post('/mestaciones', 'UserController@postMestaciones');
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
	//Route::post('/editarusuario/{id}', 'UserController@updateUser');
	Route::get('/editarusuario/{id}/eliminar', 'UserController@deleteUser');

	

});

Route::group(['middleware'=>'Registrador','namespace'=>'Registrador'],function(){
	// Aqui van las rutas de las vistas para los que usaran los Registradores
	Route::get('/regbombero', 'RegistratorController@getRegbombero');
	Route::post('/regbombero', 'RegistratorController@postRegbombero');
	Route::get('/regcurso', 'RegistratorController@getRegCurso');
	Route::post('/regcurso', 'RegistratorController@postRegCurso');
	Route::get('/npersonal', 'RegistratorController@getNpersonal');
	Route::post('/npersonal', 'RegistratorController@postNpersonal');

	Route::get('/ncapacitacion', 'RegistratorController@getNcapacitacion');
	Route::post('/ncapacitacion', 'RegistratorController@postNcapacitacion');

	Route::get('/adminpersonal', 'RegistratorController@getAdminpersonal');

	Route::get('/editarpersonal/{id}', 'RegistratorController@editPer');
	Route::post('/editarpersonal/{id}', 'RegistratorController@updatePer');
	Route::get('/reginfraestructura', 'RegistratorController@getReginfraestructura');
	Route::get('/regutilitario', 'RegistratorController@getRegutilitario');
	Route::get('/regautomotor', 'RegistratorController@getRegautomotor');
	Route::get('/regequipos', 'RegistratorController@getRegequipos');
	Route::get('/reguniformes', 'RegistratorController@getReguniformes');
	Route::get('/regmatofc', 'RegistratorController@getRegmatofc');
	Route::get('/regcomunicaciones', 'RegistratorController@getRegcomunicaciones');
	Route::get('/reportespersonal','RegistratorController@ReportesPersonal');
	Route::get('/reportespersonal/{id}','RegistratorController@ReportesPersonal');
});


Route::group(['middleware'=>'Reportes','namespace'=>'Reportes'],function(){
	// Aqui van las rutas de las vistas para los que usaran los reportes

});



