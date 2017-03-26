<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\maestro_cat_emergencia;
use App\crearpersonals;
use App\crear_estados;
use App\maestro_cuerpo_bomberos;
use App\CrearEstaciones;
use App\estados;
use PDF;
use DB;
class gestion_casos extends Model
{
      public static  $rules=[
    'mcbombero_id'=>'required|integer',
    'estacion_id'=>'required|integer',
    'tipo_id'=>'required|integer',
    ];


    public static  $messages=[
    'mcbombero_id.required'=>'El Cuerpo de bombero es requerido.',
    'estacion_id.required'=>'La Estacion es requerida.',
    'tipo_id.required'=>'El tipo de equipamiento es requerido.',
        ]; 

        public static function buscar(){

  	$tipo=maestro_cat_emergencia::all();
  	$personal=crearpersonals::all();
  	$mcbomberos=maestro_cuerpo_bomberos::all();
    $ultimo=gestion_casos::orderby('id','desc')->first();
    if($ultimo!=null){
      $numero=($ultimo->id)+1;
       } else { $numero=1;}
  	$estaciones=CrearEstaciones::where('mcbombero_id',auth()->user()->cbombero)->get();
  	//$elementos=elementos_tipo_equipamiento::all();
  	$fecha=date('Y-m-d');
 	$estados=estados::all();


  	return view ('gestion_casos.regcasos')->with(compact('personal','mcbomberos','fecha','tipo','numero','estaciones','estados'));

  }


}
