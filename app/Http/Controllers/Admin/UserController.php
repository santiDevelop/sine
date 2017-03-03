<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\maestro_cargos;
use App\maestro_cat_emergencia;
use App\maestro_cuerpo_bomberos;
use App\maestro_perfiles_cargos;
use App\maestro_tipo_equipamiento;
use App\User;
use App\Registrador;
use App\CrearPersonals;
use App\CrearCursos;
use App\CrearEstaciones;
use App\CursosPersonal;
use App\necesidades_personal;
use App\necesidades_capacitacion;
use App\estados;
use App\rangos;
use App\profesiones;
use PDF;
use DB;
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
        $historico=maestro_cuerpo_bomberos::all();
        $ultimo=maestro_cuerpo_bomberos::orderby('numcbomb','desc')->first();
        if($ultimo!=null){
      $numero=($ultimo->numcbomb)+1;
       } else { $numero=1;}
        return view('mcbombero')->with(compact('numero','historico'));
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
      $historico=maestro_cargos::all();
       $ultimo=maestro_cargos::orderby('numcargo','desc')->first();
       if($ultimo!=null){
      $numero=($ultimo->numcargo)+1;
       } else { $numero=1;}
        return view('mcargos')->with(compact('numero','historico'));
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
      $historico=maestro_tipo_equipamiento::all();
      $ultimo=maestro_tipo_equipamiento::orderby('numtipequip','desc')->first();
      if($ultimo!=null){
      $numero=($ultimo->numtipequip)+1;
       } else { $numero=1;}
        return view('mtequipos')->with(compact('numero','historico'));
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

        $historico=maestro_cat_emergencia::all();
      $ultimo=maestro_cat_emergencia::orderby('numcatemerg','desc')->first();
      if($ultimo!=null){
      $numero=($ultimo->numcatemerg)+1;
      }
        return view('mcemergencia')->with(compact('numero','historico'));
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
      $historico=rangos::all();
      $ultimo=rangos::orderby('numrango','desc')->first();
      if($ultimo!=null){
      $numero=($ultimo->numrango)+1;
       } else { $numero=1;}
        return view('mpcargos')->with(compact('numero','historico'));
    }
     public function postMpcargos(Request $request)
    {
        //reglas para validar el formulario y enviarlas al validador
      $rules=[
      'numrango'=>'required|unique:rangos|digits_between:1,3',
      'rango'=>'required|max:100' ];

        // MENSAJES PERSONALIZADOS PARA EL VALIDATOR
        $messages=[
        'numrango.unique'=>'El número de rango de cargo ya se encuentra registrado.',
        'numrango.digits_between'=>'El número de rango de cargo debe tener entre 1 y 3 digitos.',
        'numrango.required'=>'El numero de rango de cargo es requerido.',
        'rango.required'=>'El campo nombre del rango de cargo es requerido.',
        'rango.max'=>'El campo nombre del rango de cargo tiene un maximo de 100 caracteres.',
        ];

      $this->validate($request,$rules,$messages);
        $rangos= new rangos();
        $rangos->numrango = $request->input('numrango');
        $rangos->rango = $request->input('rango');
        $rangos->user_id=auth()->user()->id;
        $rangos->save();  
        return back()->with('notification','Rango Registrado Exitosamente');
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
            'cedula' => 'required|min:10|integer',
            'cargo' => 'required|numeric|digits_between:1,3',
            'cbombero' => 'required|numeric|digits_between:1,3',
            'status' => 'required|numeric|max:2|in:1,2',   
            'password' => 'sometimes',
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

    public function getMestaciones()
    {
      $historico=CrearEstaciones::join('maestro_cuerpo_bomberos','crear_estaciones.mcbombero_id','=','maestro_cuerpo_bomberos.id')->select('crear_estaciones.*','maestro_cuerpo_bomberos.nomcbombero')->get();
      //dd($historico);
      $ultimo=CrearEstaciones::orderby('numestacion','desc')->first();
      if($ultimo!=null){
      $numero=($ultimo->numestacion)+1;
       } else { $numero=1;}
      $mcbomberos=maestro_cuerpo_bomberos::all();
      return view('mestaciones')->with(compact('mcbomberos','numero','historico'));

    }

    public function postMestaciones(request $request)
    { 
      $estacion= new CrearEstaciones();
      $estacion->numestacion=$request->input('numestacion');
      $estacion->nomestacion=$request->input('nomestacion');
      $estacion->mcbombero_id=$request->input('mcbombero_id');
      $estacion->user_id=auth()->user()->id;
      $estacion->save();
      return back()->with('notification','La Estacion ha sido Creada Exitosamente');

    }

    public function editnpersonal($id)
    { 
      //dd('hola mundo');
        $personals=necesidades_personal::join('maestro_cargos','necesidades_personals.cargo_id','=','maestro_cargos.id')->join('maestro_cuerpo_bomberos','necesidades_personals.mcbombero_id','=','maestro_cuerpo_bomberos.id')->join('crear_estaciones','necesidades_personals.estacion_id','=','crear_estaciones.id')->select('necesidades_personals.*','maestro_cargos.cargo','maestro_cuerpo_bomberos.nomcbombero','crear_estaciones.nomestacion')->where('necesidades_personals.id',$id)->get();
      // dd($personals);
        return view('edits.editnpersonal')->with(compact('personals'));

    }

    public function updatenpersonal(request $request,$id)
    { 
      $updatenpersonal=necesidades_personal::find($id);
     // dd($updatenpersonal);
      $updatenpersonal->estatusolicitud=$request->estatusolicitud;
      $updatenpersonal->save();
      return back()->with('notification','La necesidad Personal ha sido Procesada.');

    }


       public function editncapacitacion($id)
    { 
      $nc=necesidades_capacitacion::join('maestro_cuerpo_bomberos','necesidades_capacitacions.mcbombero_id','=','maestro_cuerpo_bomberos.id')->join('crear_estaciones','necesidades_capacitacions.estacion_id','=','crear_estaciones.id')->join('users','necesidades_capacitacions.user_id','=','users.id')->join('crear_cursos','necesidades_capacitacions.curso_id','=','crear_cursos.id')->select('necesidades_capacitacions.*','maestro_cuerpo_bomberos.nomcbombero','crear_estaciones.nomestacion','users.user','crear_cursos.nomcurso')->where('necesidades_capacitacions.id',$id)->get();
      return view('edits.editncapacitacion')->with(compact('nc'));

    }

    public function updatecapacitacion(request $request,$id)
    { 
      $updatecapacitacion=necesidades_capacitacion::find($id);

      $updatecapacitacion->estatusolicitud=$request->estatusolicitud;
      $updatecapacitacion->save();
      return back()->with('notification','La necesidad Capacitacion ha sido Procesada.');

    }



      
}

