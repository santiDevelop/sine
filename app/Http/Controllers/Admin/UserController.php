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
use App\User;

class UserController extends Controller
{


   public function index()
    {
        //
    }

    public function getAdminuser()
    {
        $users=user::all();
        return view('adminuser')->with(compact('users'));
        
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
      'numcbomb'=>'required|unique:maestro_cuerpo_bomberos|digits_between:1,3',
      'nomcbombero'=>'required|max:100' ];

        // MENSAJES PERSONALIZADOS PARA EL VALIDATOR
        $messages=[
        'numcbomb.unique'=>'El número de cuerpo de bombero ya se encuentra registrado.',
        'numcbomb.digits_between'=>'El número de cuerpo de bombero debe tener entre 1 y 3 digitos.',
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
        return back()->with('notification','Maestro de Cuerpo Bomberos Registrado Exitosamente');
    }

     public function getMcargos()
    {
        return view('mcargos');
    }
     public function postMcargos(Request $request)
    {
      //reglas para validar el formulario y enviarlas al validador
      $rules=[
      'numcargo'=>'required|unique:maestro_cargos|digits_between:1,3',
      'cargo'=>'required|max:100' ];

        // MENSAJES PERSONALIZADOS PARA EL VALIDATOR
        $messages=[
        'numcargo.unique'=>'El número de cargo ya se encuentra registrado.',
        'numcargo.digits_between'=>'El número de cargo debe tener entre 1 y 3 digitos.',
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
        return back()->with('notification','Cargo Registrado Exitosamente');
    }


     public function getMtequipos()
    {
        return view('mtequipos');
    }
    public function postMtequipos(Request $request)
    {
         //reglas para validar el formulario y enviarlas al validador
      $rules=[
      'numtipequip'=>'required|unique:maestro_tipo_equipamientos|digits_between:1,3',
      'nomtipequip'=>'required|max:100' ];

        // MENSAJES PERSONALIZADOS PARA EL VALIDATOR
        $messages=[
        'numtipequip.unique'=>'El número de tipo de equipamiento ya se encuentra registrado.',
        'numtipequip.digits_between'=>'El número de tipo de equipamiento debe tener entre 1 y 3 digitos.',
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
        return back()->with('notification','Maestro de Equipos Registrado Exitosamente');
    }

     public function getMcemergencia()
    {
        return view('mcemergencia');
    }
    public function postMcemergencia(Request $request)
    {
        //reglas para validar el formulario y enviarlas al validador
      $rules=[
      'numcatemerg'=>'required|unique:maestro_cat_emergencias|digits_between:1,3',
      'nomcatemerg'=>'required|max:100' ];

        // MENSAJES PERSONALIZADOS PARA EL VALIDATOR
        $messages=[
        'numcatemerg.unique'=>'El número de la categoria de emergencia ya se encuentra registrado.',
        'numcatemerg.digits_between'=>'El número de categoria de emergencia debe tener entre 1 y 3 digitos.',
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
        return back()->with('notification','Maestro de Emergencias Registrado Exitosamente');

    }



      public function getMpcargos()
    {
        return view('mpcargos');
    }
     public function postMpcargos(Request $request)
    {
        //reglas para validar el formulario y enviarlas al validador
      $rules=[
      'numpcargo'=>'required|unique:maestro_perfiles_cargos|digits_between:1,3',
      'nompcargo'=>'required|max:100' ];

        // MENSAJES PERSONALIZADOS PARA EL VALIDATOR
        $messages=[
        'numpcargo.unique'=>'El número de perfil de cargo ya se encuentra registrado.',
        'numpcargo.digits_between'=>'El número de perfil de cargo debe tener entre 1 y 3 digitos.',
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
        return back()->with('notification','Maestro de Perfil Cargos Registrado Exitosamente');
    }


     public function editUser($id)
    {
      $users=User::find($id);
      $cargos=maestro_cargos::all();
      $cbomberos=maestro_cuerpo_bomberos::all();
      return view('editarusuario')->with(compact('users','cbomberos','cargos'));

    }

     public function updateUser(Request $request,$id)
    {
      
      $rules=[
            'name' => 'required|max:255|string',
            'cedula' => 'required|min:10|numeric',
            'cargo' => 'required|numeric|digits_between:1,3',
            'cbombero' => 'required|numeric|digits_between:1,3',
            'status' => 'required|numeric|max:2|in:1,2',   
            'password' => 'sometimes|min:6',
        ];
        $this->validate($request,$rules);

        $user=User::find($id);
        $user->name=$request->input('name');
        $user->cedula=$request->input('cedula');
        $user->cargo=$request->input('cargo');
        $user->cbombero=$request->input('cbombero');
        $user->status=$request->input('status');
        $password=$request->input('password');
        if($password)
        $user->password=bcrypt($password); 
        $user->save();
        
      return back()->with('notification','Usuario Modificado Exitosamente');
    }
     public function deleteUser($id)
    {
      $users=User::find($id);
      $users->delete();
      return back()->with('notification','El Usuario Ha sido Eliminado Correctamente');

    }
}
