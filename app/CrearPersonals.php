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
        'curso'=>'sometimes',
        'rango'=>'required',
        'cargo'=>'required',
        'feingreso'=>'required|date',
        'proximoascenso'=>'required|date',
        'cbombero'=>'required',
        'estacion'=>'required',
        'estatus'=>'required',
                                ];
        public static $reglas=[
        'nombombero'=>'required|max:100',
        'apebombero'=>'required|max:100',
        'fnacimiento'=>'required|date',
        'lnacimiento'=>'required',
        'sexo'=>'required',
        'ecivil'=>'required',
        'nhijos'=>'required|digits_between:1,20',
        'telbombero'=>'required',
        'correoelec'=>'required|max:50',
        'dirbombero'=>'required|max:250',
        'tcamisa'=>'required',
        'tpantalon'=>'required',
        'tcalzado'=>'required',
        'profesion'=>'required|max:50',
        'nacademico'=>'required|max:50',
        'ultitulo'=>'required|max:50',
        'egresado'=>'required|max:100',
        'rango'=>'required',
        'cargo'=>'required',
        'feingreso'=>'required|date',
        'proximoascenso'=>'required|date',
        'cbombero'=>'required',
        'estacion'=>'required|not_in:0',
        'estatus'=>'required',
        'estado'=>'required',
                                ];
        // MENSAJES PERSONALIZADOS PARA EL VALIDATOR
      public static  $messages=[
        'nombombero.required'=>'El Nombre es requerido.',
        'apebombero.required'=>'El Apellido es requerido.',
        'cedbombero.required'=>'La cedula es requerida.',
        'cedbombero.unique'=>'La cedula ya esta registrada.',
        'fnacimiento.required'=>'La fecha de Nacimiento es requerida.',
        'fnacimiento.date'=>'La fecha de nacimiento debe ser valida dia/mes/año.',
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
        'egresado.required'=>'Este Campo es requerido, de no Poseer Escriba "ningúno".',
        'curso.required'=>'El curso es requerido.',
        'rango.required'=>'El Rango es requerido.',
        'cargo.required'=>'El Cargo es requerido.',
        'feingreso.required'=>'La fecha de ingreso es requerida.',
        'feingreso.date'=>'La fecha de Ingreso debe ser valida dia/mes/año.',
        'proximoascenso.required'=>'La fecha de Proximo Ascenso es requerida.',
        'proximoascenso.date'=>'La fecha de Proximo Ascenso debe ser valida dia/mes/año.',
        'cbombero.required'=>'El cuerpo de bombero es requerido.',
        'estacion.required'=>'La estacion es requerida.',
        'estacion.not_in'=>'Seleccione una estacion',
        'estatus.required'=>'El estatus es requerido',
        'estado.required'=>'El estado es requerido'];

  public static function borrar($id){

        $personal=CrearPersonals::find($id);
        $personal->delete();
        return back()->with('notification','Personal Borrado Correctamente');
  }


}
