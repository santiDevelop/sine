<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrearPersonals extends Model
{
    public static $rules=[
        'nombombero'=>'required|max:100',
        'apebombero'=>'required|max:100',
        'cedbombero'=>'required|unique:crear_personals|integer',
        'fnacimiento'=>'required|date',
        'lnacimiento'=>'required',
        'sexo'=>'required',
        'ecivil'=>'required',
        'nhijos'=>'required|digits_between:1,20',
        'telbombero'=>'required',
        'correoelec'=>'required|max:50|unique:crear_personals',
        'dirbombero'=>'required|max:250',
        'tcamisa'=>'required',
        'tpantalon'=>'required',
        'tcalzado'=>'required',
        'profesion'=>'required|max:50',
        'nacademico'=>'required|max:50',
        'ultitulo'=>'required|max:50',
        'egresado'=>'required|max:100',
        'curso'=>'required',
        'rango'=>'required',
        'cargo'=>'required',
        'feingreso'=>'required|date',
        'proximoascenso'=>'required|date',
        'cbombero'=>'required',
        'estacion'=>'required',
        'estatus'=>'required',
                                ];

        // MENSAJES PERSONALIZADOS PARA EL VALIDATOR
      public static  $messages=[
        'nombombero.required'=>'El Nombre es requerido.',
        'apebombero.required'=>'El Apellido es requerido.',
        'cedbombero.required'=>'La cedula es requerida.',
        'cedbombero.unique'=>'La cedula ya esta registrada.',
        'fnacimiento.required'=>'La fecha de Nacimiento es requerida.',
        'lnacimiento.required'=>'El lugar de Nacimiento es requerido.',
        'sexo.required'=>'El sexo es requerido.',
        'ecivil.required'=>'El Estado Civil es requerido.',
        'nhijos.required'=>'El numero de Hijos es requerido.',
        'telbombero.required'=>'El Télefono es requerido.',
        'correoelec.required'=>'El Correo es requerido.',
        'correoelec.unique'=>'El Correo Electronico Ya fue registrado en otro personal.',
        'dirbombero.required'=>'La direccion es requerida.',
        'tcamisa.required'=>'La talla de Camisa es requerida.',
        'tpantalon.required'=>'La talla de Pantalon es requerida.',
        'tcalzado.required'=>'La Talla de calzado es requerida.',
        'profesion.required'=>'La Profesion es requerida.',
        'nacademico.required'=>'El Nivel Academico es requerida.',
        'ultitulo.required'=>'El Ultimo Titulo Obtenido es requerido.',
        'egresado.required'=>'Este Campo es requerido.',
        'curso.required'=>'El curso es requerido.',
        'rango.required'=>'El Rango es requerido.',
        'cargo.required'=>'El Cargo es requerido.',
        'feingreso.required'=>'La fecha de ingreso es requerida.',
        'proximoascenso.required'=>'La fecha de Proximo Ascenso es requerida.',
        'cbombero.required'=>'El cuerpo de bombero es requerido.',
        'estacion.required'=>'La estacion es requerida.',
        'estatus.required'=>'El estatus es requerido'];


}
