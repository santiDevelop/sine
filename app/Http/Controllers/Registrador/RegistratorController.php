<?php

namespace App\Http\Controllers\Registrador;

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
use App\CrearPersonal;
use App\CrearCursos;
class RegistratorController extends Controller
{
    public function index()
    {
        //
    }
        public function getRegbombero()
    {
        return view('regbombero');
    }

     public function postRegbombero(Request $request)
    {
          //reglas para validar el formulario y enviarlas al validador
      $rules=[
      'nombombero'=>'required|',
        'apebombero'=>'required|',
        'cedbombero'=>'required|',
        'fnacimiento'=>'required|',
        'lnacimiento'=>'required|',
        'sexo'=>'required|',
        'ecivil'=>'required|',
        'nhijos'=>'required|',
        'telbombero'=>'required|',
        'correoelec'=>'required|',
        'dirbombero'=>'required|',
        'tcamisa'=>'required|',
        'tpantalon'=>'required|',
        'tcalzado'=>'required|',
        'profesion'=>'required|',
        'nacademico'=>'required|',
        'ultitulo'=>'required|',
        'egresado'=>'required|',
        'curso[] //revisar este bien'=>'required|',
        'rango'=>'required|',
        'cargo'=>'required|',
        'feingreso'=>'required|',
        'proximoascenso'=>'required|',
        'cbombero'=>'required|',
        'estacion'=>'required|'
                                ];

        // MENSAJES PERSONALIZADOS PARA EL VALIDATOR
        $messages=[
        'numcbomb.unique'=>'El número de cuerpo de bombero ya se encuentra registrado.',
        'numcbomb.digits_between'=>'El número de cuerpo de bombero debe tener entre 1 y 3 digitos.',
        'numcbomb.required'=>'El numero de cuerpo de bombero es requerido.',
        'nomcbombero.required'=>'El campo cuerpo de bombero es requerido.',
        'nomcbombero.max'=>'El campo cuerpo de bombero tiene un maximo de 100 caracteres.',
        ];

      $this->validate($request,$rules,$messages);
        $CrearPersonal= new CrearPersonal();
        $CrearPersonal->nombombero=$request->input('nombombero');
        $CrearPersonal->apebombero=$request->input('apebombero');
        $CrearPersonal->cedbombero=$request->input('cedbombero');
        $CrearPersonal->fnacimiento=$request->input('fnacimiento');
        $CrearPersonal->lnacimiento=$request->input('lnacimiento');
        $CrearPersonal->sexo=$request->input('sexo');
        $CrearPersonal->ecivil=$request->input('ecivil');
        $CrearPersonal->nhijos=$request->input('nhijos');
        $CrearPersonal->telbombero=$request->input('telbombero');
        $CrearPersonal->correoelec=$request->input('correoelec');
        $CrearPersonal->dirbombero=$request->input('dirbombero');
        $CrearPersonal->tcamisa=$request->input('tcamisa');
        $CrearPersonal->tpantalon=$request->input('tpantalon');
        $CrearPersonal->tcalzado=$request->input('tcalzado');
        $CrearPersonal->profesion=$request->input('profesion');
        $CrearPersonal->nacademico=$request->input('nacademico');
        $CrearPersonal->ultitulo=$request->input('ultitulo');
        $CrearPersonal->egresado=$request->input('egresado');
        $CrearPersonal->curso[]=$request->input('curso');
        $CrearPersonal->rango=$request->input('rango');
        $CrearPersonal->cargo=$request->input('cargo');
        $CrearPersonal->feingreso=$request->input('feingreso');
        $CrearPersonal->proximoascenso=$request->input('proximoascenso');
        $CrearPersonal->cbombero=$request->input('cbombero');
        $CrearPersonal->estacion=$request->input('estacion');
        $CrearPersonal->user_id=auth()->user()->id;
        $CrearPersonal->save();  
        return back()->with('notification','Personal Registrado Correctamente');

    }

              public function getNpersonal()
    {
        return view('npersonal');
    }
                  public function getNcapacitacion()
    {
        return view('ncapacitacion');
    }

        public function getAdminpersonal()
    {
        return view('adminpersonal');
        
    }
       public function getRegCurso()
    {
        return view('regcurso');
        
    }
       public function postRegCurso(request $request)
    {

        $rules=[
      'numcurso'=>'required|unique:CrearCursos|digits_between:1,3',
      'nomcurso'=>'required|max:100' ];

        $messages=[
        'numcurso.unique'=>'El número de Curso ya se encuentra registrado.',
        'numcurso.digits_between'=>'El número de Curso debe tener entre 1 y 3 digitos.',
        'numcurso.required'=>'El numero de Curso es requerido.',
        'nomcurso.required'=>'El campo Curso es requerido.',
        'nomcurso.max'=>'El campo Curso tiene un maximo de 100 caracteres.',
        ];
        $curso= new CrearCursos();
        $curso->numcurso=$request->input('numcurso');
        $curso->nomcurso=$request->input('nomcurso');
        $curso->save();
        return back()->with('notification','Curso Creado');
        
    }
}
