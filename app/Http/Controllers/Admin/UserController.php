<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\maestro_cargos;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{




   public function index()
    {
        return "hola mundo";
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
      'cargo'=>'required|max:100'

        ];
        $messages=[
        'numcargo.unique'=>'El numero de cargo ya se encuentra registrado',
        'numcargo.required'=>'El numero de cargo ya se encuentra registrado'
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


     public function mtequipos()
    {
        return view('mtequipos');
    }
     public function mcemergencia()
    {
        return view('mcemergencia');
    }
      public function mpcargos()
    {
        return view('mpcargos');
    }

}
