<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\elementos_tipo_equipamiento;
use App\maestro_cuerpo_bomberos;
use App\CrearEstaciones;
use App\maestro_tipo_equipamiento;
use App\gestion_data;
use App\gestion_necesidades;
use App\gestion_necesidades_det;
use Validator;
class gestion_necesidades extends Model
{
 public static $rules=[
        'cantidad.*'=>'integer',


    ];


    public static  $messages=[
        'cantidad.integer '=>'La cantidad debe ser entera.',

    
        ];
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
        validator::validate($request,self::$rules,self::$messages);
         $i=0;
       if($request->id!=null)
      {
                $gn=new gestion_necesidades;
                $gn->fecha=$request->input('fecha');
                $gn->mcbombero_id=$request->input('mcbombero_id');
                $gn->estacion_id=$request->input('estacion_id');
                $gn->tipequip_id=$request->input('tipequip_id');
                $gn->estatus=$request->input('estatusolicitud');
                $gn->user_id=auth()->user()->id;
                $gn->save();
                $id=gestion_necesidades::select('id')->orderby('id','desc')->first();
        foreach ($request->id as $key => $value) 
        {
              if($request->cantidad[$i]!=0)
              {
                $gnd=new gestion_necesidades_det;
                $gnd->solicitud_id=$id->id;
                $gnd->elemento_id=$value;
                $gnd->cantidad=$request->cantidad[$i];
                if($request->observacion[$i]!=null){
                $gnd->observacion=$request->observacion[$i];
              }else { $gnd->observacion='Ninguna'; }
                $gnd->save();
               }
                $i++;
         }
       		 return back()->with('notification','Gestion de necesidad registrada.');
       } else 
		        {
		        return back()->with('problema','Debe Seleccionar una cateroria');
		        }
	    
	    }

   
}
