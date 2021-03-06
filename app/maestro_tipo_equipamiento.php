<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maestro_tipo_equipamiento extends Model
{
     public static  $rules=[
	 	'cantidad'=>'required|integer',
		'fesolicitud'=>'required|date',
		'observaciones'=>'required|string',
		'cvacante'=>'required',
		'estacion'=>'required',
		'estatusolicitud'=>'required' 
		];


    public static  $messages=[
        'cantidad.required'=>'El campo cantidad es requerido.',
		'fesolicitud.required'=>'El campo fecha de solicitud es requerido.',
		'observaciones.required'=>'El campo observaciones es requerido.',
		'cvacante.required'=>'El Curso vacante es requerido.',
		'estacion.required'=>'la Estacion es requerida.',
		'estatusolicitud.required'=>'El estatus campo es requerido.'
        ];
}
