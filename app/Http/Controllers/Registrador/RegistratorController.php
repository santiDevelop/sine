<?php

namespace App\Http\Controllers\Registrador;

use Illuminate\Support\Facades\Validator;
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
class RegistratorController extends Controller
{
    public function index()
    {
        //
    }
        public function getRegbombero()
    {
      $estaciones=CrearEstaciones::all();
      $cursos=CrearCursos::all();
      $cargos=maestro_cargos::all();
      $cbomberos=maestro_cuerpo_bomberos::all();
      return view('regbombero')->with(compact('estaciones','cursos','cargos','cbomberos'));
    }

     public function postRegbombero(Request $request)
    {

       /* $cuenta=0;
        foreach ($request->curso as $key => $value) {
            echo $key.'key <br>';
            echo $value.'value <br>';
            $cuenta=$cuenta+1;
            echo $cuenta.'llevo la cuenta <br>';
        }
        exit();*/
        $this->validate($request,CrearPersonals::$rules,CrearPersonals::$messages);


        $CrearPersonal= new CrearPersonals();
        $CrearPersonal->cedbombero=$request->input('cedbombero');
        $CrearPersonal->nombombero=$request->input('nombombero');
        $CrearPersonal->apebombero=$request->input('apebombero');
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
        //$CrearPersonal->curso_id=$request->input('curso');
        $CrearPersonal->rango=$request->input('rango');
        $CrearPersonal->cargo_id=$request->input('cargo');
        $CrearPersonal->feingreso=$request->input('feingreso');
        $CrearPersonal->proximoascenso=$request->input('proximoascenso');
        $CrearPersonal->mcbombero_id=$request->input('cbombero');
        $CrearPersonal->estacion_id=$request->input('estacion');
        $CrearPersonal->status=$request->input('estatus');
        $CrearPersonal->user_id=auth()->user()->id;
        $CrearPersonal->save(); 


        $cedula=$request->input('cedbombero');
        $encontrado=CrearPersonals::where('cedbombero',$cedula)->first();
        

        foreach ($request->curso as $key => $value) {
            /*echo $key.'soy key<br>';
            echo $value.'soy value<br>';*/
            $cursos= new CursosPersonal;
            $cursos->id_bombero=$encontrado->id;
            $cursos->curso_id=$value;
            $cursos->save();
        }
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
        $personals=CrearPersonals::all();
        return view('adminpersonal')->with(compact('personals'));
        
        
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
        $curso->user_id=auth()->user()->id;
        $curso->save();
        return back()->with('notification','Curso Creado');
        
    }



       public function editPer()
    {
        //vista para editar personal
        return view('editpersonal');
        
    }
}
