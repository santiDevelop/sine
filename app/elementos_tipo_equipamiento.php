<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use App\maestro_tipo_equipamiento;
class elementos_tipo_equipamiento extends Model
{
    public static  $rules=[
	 	'tipequip_id'=>'required|integer|exists:maestro_tipo_equipamientos,id',
		'nomelemento'=>'required|string',

		];


    public static  $messages=[
        'tipequip_id.required'=>'El campo tipo de equipamiento es requerido.',
		'nomelemento.required'=>'El nombre del Elemento es requerido.',
		'tipequip_id.exists'=>'este tipo de equipamiento no existe verifique.',

		
        ];

        public static function guardar($request){

        $elemento=new elementos_tipo_equipamiento;
        $elemento->nomelemento=$request->input('nomelemento');
    	$elemento->tipequip_id=$request->input('tipequip_id');
    	$elemento->user_id=auth()->user()->id;
    	$elemento->save();
    	return back()->with('notification','Elemento Creado Correctamente');
    }

     public static function editar($id){

       $elemento=elementos_tipo_equipamiento::find($id);
       $tipo=maestro_tipo_equipamiento::all();
        return view('gestion_recursos.editarElemento')->with(compact('elemento','tipo'));
    }

    public static function borrar($id){

        $elemento=elementos_tipo_equipamiento::find($id);
      	$elemento->delete();
    	return back()->with('notification','Elemento Borrado Correctamente');
    }

    public static function updateElemento($request,$id){

        $elemento=elementos_tipo_equipamiento::find($id);
      	$elemento->nomelemento=$request->input('nomelemento');
    	$elemento->tipequip_id=$request->input('tipequip_id');
    	$elemento->user_id=auth()->user()->id;
    	$elemento->save();
    	return back()->with('notification','Elemento Editado Correctamente');
    }

}
