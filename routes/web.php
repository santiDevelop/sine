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

Route::get('/home', 'HomeController@index');
Route::get('/adminuser', 'HomeController@Adminuser');
Route::get('/mcbombero', 'HomeController@Mcbombero');
Route::get('/mcargos', 'HomeController@Mcargos');
Route::get('/mpcargos', 'HomeController@Mpcargos');
Route::get('/mtequipos', 'HomeController@Mtequipos');
Route::get('/mcemergencia', 'HomeController@Mcemergencia');
Route::get('/resetpw', 'HomeController@Resetpw');