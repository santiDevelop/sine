<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class necesidades_capacitacion extends Model
{
    public static  $rules=[
	 	'cantparti'=>'required|integer',
		'fesolicitud'=>'required|date',
		'observaciones'=>'required|string',
		'scurso'=>'required',
		'estacion'=>'required',
		
		];


    public static  $messages=[
        'cantparti.required'=>'El campo Cantidad es requerido.',
		'fesolicitud.required'=>'El campo fecha de solicitud es requerido.',
		'observaciones.required'=>'El campo observaciones es requerido.',
		'scurso.required'=>'El Curso es requerido.',
		'estacion.required'=>'la Estacion es requerida.',
		
        ];
}
