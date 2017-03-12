<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\elementos_tipo_equipamiento;
use App\maestro_cuerpo_bomberos;
use App\CrearEstaciones;
use App\maestro_tipo_equipamiento;
use App\gestion_data;
class gestion_data extends Model
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

  	$tipo=maestro_tipo_equipamiento::all();
  	$mcbomberos=maestro_cuerpo_bomberos::all();
  	$estaciones=CrearEstaciones::where('mcbombero_id',auth()->user()->cbombero)->get();
  	//$elementos=elementos_tipo_equipamiento::all();
  	$elementos=elementos_tipo_equipamiento::join('maestro_tipo_equipamientos','maestro_tipo_equipamientos.id','=','elementos_tipo_equipamientos.tipequip_id')->select('elementos_tipo_equipamientos.*','maestro_tipo_equipamientos.nomtipequip')->get();


  	return view ('gestion_recursos.regdata')->with(compact('mcbomberos','estaciones','elementos','tipo'));

  }

   public static function BuscarListaEquip($id){

        return $elemento=elementos_tipo_equipamiento::where('tipequip_id',$id)->get();
        
    }

    public static function guardar($request){
        //dd($request);
         $i=0;
       if(isset($request->id))
      {
        foreach ($request->id as $key => $value) 
        {
              if($request->cant_total[$i]!=0){
                $gd=new gestion_data;
                $gd->mcbombero_id=$request->input('mcbombero_id');
                $gd->estacion_id=$request->input('estacion_id');
                $gd->tipequip_id=$request->input('tipo_id');
                $gd->elemento_id=$value;
                $gd->cantotal=$request->cant_total[$i];
                $gd->cantopt=$request->cant_optima[$i];
                $gd->cantdet=$request->cant_deteriorado[$i];
                $gd->cantfs=$request->cant_fuera_servicio[$i];
                $gd->marca=$request->marca[$i];
                $gd->modelo=$request->modelo[$i];
                $gd->serial=$request->serial_fabrica[$i];
                $gd->observacion=$request->observacion[$i];
                $gd->user_id=auth()->user()->id;
                $gd->save();
                }
                $i++;
          }
        return back()->with('notification','Registro de equipos realizado correctamente');
      } else 
        {
        return back()->with('problema','Debe Seleccionar una cateroria');
        }

    }



}
