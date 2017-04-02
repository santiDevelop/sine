<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\maestro_cat_emergencia;
use App\CrearPersonals;
use App\crear_estados;
use App\maestro_cuerpo_bomberos;
use App\CrearEstaciones;
use App\estados;
use App\gestion_casos_det;
use PDF;
use DB;
class gestion_casos extends Model
{
      public static  $rules=[
    'mcbombero_id'=>'required|integer',
    'estacion_id'=>'required|integer',
    'emergencia_id'=>'required|integer|not_in:0',
    'condicion'=>'required|integer',
    'hora'=>'required',
    'estado'=>'required',
    'municipio'=>'required',
    'parroquia'=>'required',
    'nro_personas'=>'required',
    'nro_heridos'=>'required',
    'nro_decesos'=>'required',
    'descripcion'=>'required',
    'fecha'=>'required',
    ];


    public static  $messages=[
    'mcbombero_id.required'=>'El Cuerpo de bombero es requerido.',
    'estacion_id.required'=>'La Estacion es requerida.',
    'emergencia_id.required'=>'El tipo de Emergencia es requerido.',
    'emergencia_id.not_in'=>'Debe Seleccionar un tipo de emergencia, de no encontrar la necesaria contacte al administrador del sistema.',
    'condicion.required'=>'Seleccione la Condicion del caso.',
    'hora.required'=>'La hora de atencion del caso es requerida.',
    'estado.required'=>'El estado donde ocurrio el evento es requerido.',
    'municipio.required'=>'El municipio donde ocurrio el evento es requerido',
    'parroquia.required'=>'El parroquia donde ocurrio el evento es requerido',
    'nro_personas.required'=>'El numero de personas afectadas es requerido.',
    'nro_heridos.required'=>'El numero de personas heridas es requerido de no poseer escriba "0".',
    'nro_decesos.required'=>'El numero de decesos es requerido de no poseer escriba "0".',
    'descripcion.required'=>'La descripcion del evento es requerida.',
    'fecha.required'=>'La Fecha del evento es requerida.',
        ]; 

        public static function buscar(){

  	$tipo=maestro_cat_emergencia::all();
  	$personal=crearpersonals::orderBy('cedbombero')->get();
  	$mcbomberos=maestro_cuerpo_bomberos::all();
    $ultimo=gestion_casos::orderby('id','desc')->first();
    if($ultimo!=null){
      $numero=($ultimo->id)+1;
       } else { $numero=1;}
  	$estaciones=CrearEstaciones::where('mcbombero_id',auth()->user()->cbombero)->get();
  	//$elementos=elementos_tipo_equipamiento::all();
  //	$fecha=date('Y-m-d');
 	$estados=estados::all();


  	return view ('gestion_casos.regcasos')->with(compact('personal','mcbomberos','tipo','numero','estaciones','estados'));

  }


     public static function guardar($request){

        $caso=new gestion_casos();
        $caso->fecha=$request->input('fecha');
        $caso->mcbombero_id=$request->input('mcbombero_id');
        $caso->estacion_id=$request->input('estacion_id');
        $caso->emergencia_id=$request->input('emergencia_id');
        $caso->condicion=$request->input('condicion');
        $caso->hora=$request->input('hora');
        $caso->estado_id=$request->input('estado');
        $caso->municipio=$request->input('municipio');
        $caso->parroquia=$request->input('parroquia');
        $caso->nro_personas=$request->input('nro_personas');
        $caso->nro_heridos=$request->input('nro_heridos');
        $caso->nro_decesos=$request->input('nro_decesos');
        $caso->descripcion=$request->input('descripcion');
        $caso->user_id=auth()->user()->id;
        $caso->save();


        $ultimo=gestion_casos::orderby('id','desc')->first();
        if($ultimo!=null){
         $numero=$ultimo->id;
           } else { $numero=1;}


         if(isset($request->bombero_id)){
        foreach ($request->bombero_id as $key => $value) {
            $gcd=new gestion_casos_det();
            $gcd->caso_id=$numero;
            $gcd->bombero_id=$value;
            $gcd->save();
        }
        }


        return back()->with('notification','Caso Registrado Correctamente.');

  }


}
