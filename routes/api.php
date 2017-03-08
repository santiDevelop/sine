<?php

use Illuminate\Http\Request;



Route::get('/reportespersonal/{id}/estaciones','Registrador\RegistratorController@BuscarEstacion');
Route::get('/BuscarListaEquip/{id}','Registrador\RegistratorController@BuscarListaEquip');
