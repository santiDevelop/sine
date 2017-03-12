<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\elementos_tipo_equipamiento;
use App\maestro_cuerpo_bomberos;
use App\CrearEstaciones;
use App\maestro_tipo_equipamiento;
use App\gestion_data;
use App\gestion_necesidades;
class gestion_necesidades extends Model
{

	  public static function buscar(){

  	$tipo=maestro_tipo_equipamiento::all();
  	$mcbomberos=maestro_cuerpo_bomberos::all();
  	$estaciones=CrearEstaciones::where('mcbombero_id',auth()->user()->cbombero)->get();
  	//$elementos=elementos_tipo_equipamiento::all();
  	$elementos=elementos_tipo_equipamiento::join('maestro_tipo_equipamientos','maestro_tipo_equipamientos.id','=','elementos_tipo_equipamientos.tipequip_id')->select('elementos_tipo_equipamientos.*','maestro_tipo_equipamientos.nomtipequip')->get();
  	$fecha=date('Y-m-d');

  	return view ('gestion_recursos.regnecesidades')->with(compact('mcbomberos','estaciones','elementos','tipo','fecha'));

  }

	 public static function guardar($request){
	       // dd($request->id);
         $i=0;
       if($request->id!=null)
      {
        foreach ($request->id as $key => $value) 
        {
              if($request->cantidad[$i]!=0)
              {
                $gn=new gestion_necesidades;
                $gn->mcbombero_id=$request->input('mcbombero_id');
                $gn->estacion_id=$request->input('estacion_id');
                $gn->tipequip_id=$request->input('tipequip_id');
                $gn->estatus=$request->input('estatusolicitud');
                $gn->elemento_id=$value;
                $gn->fecha=$request->input('fecha');
                $gn->cantidad=$request->cantidad[$i];
                $gn->observacion=$request->observacion[$i];
                $gn->user_id=auth()->user()->id;
                $gn->save();
               }
                $i++;
         }
       		 return back()->with('notification','Necesidad registrada');
       } else 
		        {
		        return back()->with('problema','Debe Seleccionar una cateroria');
		        }
	    
	    }

   
}
