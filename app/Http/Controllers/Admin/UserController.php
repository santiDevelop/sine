<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\maestro_cargos;
use App\maestro_cat_emergencia;
use App\maestro_cuerpo_bomberos;
use App\maestro_perfiles_cargos;
use App\maestro_tipo_equipamiento;

class UserController extends Controller
{




   public function index()
    {
        //
    }

    public function adminuser()
    {
        return view('adminuser');
    }
     public function crearusuario()
    {
        return view('crearusuario');
    }


     public function getMcbombero()
    {

        return view('mcbombero');
    }
      public function postMcbombero(Request $request)
    {
        //reglas para validar el formulario y enviarlas al validador
      $rules=[
      'numcbomb'=>'required|unique:maestro_cuerpo_bomberos',
      'nomcbombero'=>'required|max:100' ];

        // MENSAJES PERSONALIZADOS PARA EL VALIDATOR
        $messages=[
        'numcbomb.unique'=>'El número de cuerpo de bombero ya se encuentra registrado.',
        'numcbomb.required'=>'El numero de cuerpo de bombero es requerido.',
        'nomcbombero.required'=>'El campo cuerpo de bombero es requerido.',
        'nomcbombero.max'=>'El campo cuerpo de bombero tiene un maximo de 100 caracteres.',
        ];

      $this->validate($request,$rules,$messages);
        $maestro_cuerpo_bomberos= new maestro_cuerpo_bomberos();
        $maestro_cuerpo_bomberos->numcbomb = $request->input('numcbomb');
        $maestro_cuerpo_bomberos->nomcbombero = $request->input('nomcbombero');
        $maestro_cuerpo_bomberos->user_id=auth()->user()->id;
        $maestro_cuerpo_bomberos->save();  
        return back();
    }

     public function getMcargos()
    {
        return view('mcargos');
    }
     public function postMcargos(Request $request)
    {
      //reglas para validar el formulario y enviarlas al validador
      $rules=[
      'numcargo'=>'required|unique:maestro_cargos',
      'cargo'=>'required|max:100' ];

        // MENSAJES PERSONALIZADOS PARA EL VALIDATOR
        $messages=[
        'numcargo.unique'=>'El número de cargo ya se encuentra registrado.',
        'numcargo.required'=>'El numero de cargo es requerido.',
        'cargo.required'=>'El campo cargo es requerido.',
        'cargo.max'=>'El campo cargo tiene un maximo de 100 caracteres.',
        ];

      $this->validate($request,$rules,$messages);
      //maestro_cargos::create()

      // se instancia el provider de la tabla que se va a actualiza
        $maestro_cargos= new maestro_cargos();
        // se asigna al campo de la tabla el request de la vista por el campo name
        $maestro_cargos->numcargo = $request->input('numcargo');
        $maestro_cargos->cargo = $request->input('cargo');
        // metodo para guardar en el campo el id del usuario que esta haciendo el registro
        $maestro_cargos->user_id=auth()->user()->id;
        // metodo para usar el modelo para guardar en la tabla
        $maestro_cargos->save();  
       //return $request->all();
        return back();
    }


     public function getMtequipos()
    {
        return view('mtequipos');
    }
    public function postMtequipos(Request $request)
    {
         //reglas para validar el formulario y enviarlas al validador
      $rules=[
      'numtipequip'=>'required|unique:maestro_tipo_equipamiento',
      'nomtipequip'=>'required|max:100' ];

        // MENSAJES PERSONALIZADOS PARA EL VALIDATOR
        $messages=[
        'numtipequip.unique'=>'El número de tipo de equipamiento ya se encuentra registrado.',
        'numtipequip.required'=>'El numero de tipo de equipamiento es requerido.',
        'nomtipequip.required'=>'El campo nombre tipo de equipamiento es requerido.',
        'nomtipequip.max'=>'El campo nombre tipo de equipamiento tiene un maximo de 100 caracteres.',
        ];

      $this->validate($request,$rules,$messages);
        $maestro_tipo_equipamiento= new maestro_tipo_equipamiento();
        $maestro_tipo_equipamiento->numtipequip = $request->input('numtipequip');
        $maestro_tipo_equipamiento->nomtipequip = $request->input('nomtipequip');
        $maestro_tipo_equipamiento->user_id=auth()->user()->id;
        $maestro_tipo_equipamiento->save();  
        return back();
    }

     public function getMcemergencia()
    {
        return view('mcemergencia');
    }
    public function postMcemergencia(Request $request)
    {
        //reglas para validar el formulario y enviarlas al validador
      $rules=[
      'numcatemerg'=>'required|unique:maestro_cat_emergencia',
      'nomcatemerg'=>'required|max:100' ];

        // MENSAJES PERSONALIZADOS PARA EL VALIDATOR
        $messages=[
        'numcatemerg.unique'=>'El número de la categoria de emergencia ya se encuentra registrado.',
        'numcatemerg.required'=>'El numero de la categoria de emergencia es requerido.',
        'nomcatemerg.required'=>'El campo nombre de la categoria de emergencia es requerido.',
        'nomcatemerg.max'=>'El campo nombre de la categoria de emergencia tiene un maximo de 100 caracteres.',
        ];

      $this->validate($request,$rules,$messages);
        $maestro_cat_emergencia= new maestro_cat_emergencia();
        $maestro_cat_emergencia->numcatemerg = $request->input('numcatemerg');
        $maestro_cat_emergencia->nomcatemerg = $request->input('nomcatemerg');
        $maestro_cat_emergencia->user_id=auth()->user()->id;
        $maestro_cat_emergencia->save();  
        return back();
    }



      public function getMpcargos()
    {
        return view('mpcargos');
    }
     public function postMpcargos(Request $request)
    {
        //reglas para validar el formulario y enviarlas al validador
      $rules=[
      'numpcargo'=>'required|unique:maestro_perfiles_cargos',
      'nompcargo'=>'required|max:100' ];

        // MENSAJES PERSONALIZADOS PARA EL VALIDATOR
        $messages=[
        'numpcargo.unique'=>'El número de perfil de cargo ya se encuentra registrado.',
        'numpcargo.required'=>'El numero de perfil de cargo es requerido.',
        'nompcargo.required'=>'El campo nombre del perfil de cargo es requerido.',
        'nompcargo.max'=>'El campo nombre del perfil de cargo tiene un maximo de 100 caracteres.',
        ];

      $this->validate($request,$rules,$messages);
        $maestro_perfiles_cargos= new maestro_perfiles_cargos();
        $maestro_perfiles_cargos->numpcargo = $request->input('numpcargo');
        $maestro_perfiles_cargos->nompcargo = $request->input('nompcargo');
        $maestro_perfiles_cargos->user_id=auth()->user()->id;
        $maestro_perfiles_cargos->save();  
        return back();
    }

}
