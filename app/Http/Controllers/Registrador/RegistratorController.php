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
use App\necesidades_personal;
use App\necesidades_capacitacion;
use App\estados;
class RegistratorController extends Controller
{
    public function index()
    {
        //
    }
        public function getRegbombero()
    {
      $estados=estados::all();
      $estaciones=CrearEstaciones::where('mcbombero_id',auth()->user()->cbombero)->get();
      //dd($estaciones);
      //dd(auth()->user()->cbombero);
      $cursos=CrearCursos::all();
      $cargos=maestro_cargos::all();
      $cbomberos=maestro_cuerpo_bomberos::where('id',auth()->user()->cbombero)->get();;
      return view('regbombero')->with(compact('estaciones','cursos','cargos','cbomberos','estados'));
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
        $CrearPersonal->nacionalidad=$request->input('nacionalidad');
        $CrearPersonal->cedbombero=$request->input('cedbombero');
        $CrearPersonal->nombombero=$request->input('nombombero');
        $CrearPersonal->apebombero=$request->input('apebombero');
        $CrearPersonal->fnacimiento=$request->input('fnacimiento');
        $CrearPersonal->lnacimiento=$request->input('lnacimiento');
        $CrearPersonal->sexo=$request->input('sexo');
        $CrearPersonal->estado=$request->input('estado');
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
        
       /* $cursos=CursosPersonal::join('crear_cursos','cursos_personals.curso_id','=','crear_cursos.id')->where('cursos_personals.id_bombero',$id)->get();*/
        $cargos=maestro_cargos::all();
        $cbomberos=maestro_cuerpo_bomberos::where('id',auth()->user()->cbombero)->get();
        $estaciones=CrearEstaciones::where('mcbombero_id',auth()->user()->cbombero)->get();
        return view('npersonal')->with(compact('cargos','cbomberos','estaciones'));

       
    }

          public function postNpersonal(request $request)
    {
        $this->validate($request,necesidades_personal::$rules,necesidades_personal::$messages);

        $npersonal=new necesidades_personal(); 
        $npersonal->cantidad=$request->input('cantidad');
        $npersonal->fesolicitud=$request->input('fesolicitud');
        $npersonal->observaciones=$request->input('observaciones');
        
        $npersonal->user_id=auth()->user()->id;
        $npersonal->cargo_id=$request->input('cvacante');
        $npersonal->mcbombero_id=auth()->user()->cbombero;
        $npersonal->estacion_id=$request->input('estacion');
        if(!empty($request->input('estatusolicitud'))){
        $npersonal->estatusolicitud=$request->input('estatusolicitud');
        }
        $npersonal->save();
        return back()->with('notification','Necesidad de Personal Creada.');
    }



        public function getNcapacitacion()
    {
        $cursos=CrearCursos::all();
        $cargos=maestro_cargos::all();
        $cbomberos=maestro_cuerpo_bomberos::where('id',auth()->user()->cbombero)->get();
        $estaciones=CrearEstaciones::where('mcbombero_id',auth()->user()->cbombero)->get();
        return view('ncapacitacion')->with(compact('cargos','cursos','cbomberos','estaciones'));

        
    }

     public function postNcapacitacion(request $request)
    {
        
        $this->validate($request,necesidades_capacitacion::$rules,necesidades_capacitacion::$messages);

        $ncapacitacion=new necesidades_capacitacion(); 
        $ncapacitacion->cantidad=$request->input('cantparti');
        $ncapacitacion->fesolicitud=$request->input('fesolicitud');
        $ncapacitacion->observaciones=$request->input('observaciones');
        
        $ncapacitacion->user_id=auth()->user()->id;
        $ncapacitacion->curso_id=$request->input('scurso');
        $ncapacitacion->mcbombero_id=auth()->user()->cbombero;
        $ncapacitacion->estacion_id=$request->input('estacion');
        if(!empty($request->input('estatusolicitud'))){
        $ncapacitacion->estatusolicitud=$request->input('estatusolicitud');
        }
        $ncapacitacion->save();
        return back()->with('notification','Necesidad de Personal Creada.');
    }


        public function getAdminpersonal()
    {
        $personals=CrearPersonals::all();
        return view('adminpersonal')->with(compact('personals'));
        
        
    }
       public function getRegCurso()
    {
        $ultimo=CrearCursos::orderby('id','desc')->first();
        $numero=($ultimo->id)+1;
        return view('regcurso')->with(compact('numero'));
        
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



       public function editPer($id)
    {
        $personals=CrearPersonals::find($id);
        $estados=estados::all();
        $cursos=CursosPersonal::join('crear_cursos','cursos_personals.curso_id','=','crear_cursos.id')->where('cursos_personals.id_bombero',$id)->get();
        $cargos=maestro_cargos::all();
        $cursosAgregar=CrearCursos::all();
        $cbomberos=maestro_cuerpo_bomberos::all();
        $estaciones=CrearEstaciones::all();
        return view('editpersonal')->with(compact('personals','cursos','cargos','cbomberos','estaciones','cursosAgregar','estados'));
        
        
    }

        public function updatePer(request $request,$id)
    {
        $this->validate($request,CrearPersonals::$reglas,CrearPersonals::$messages);

        $updatePer= CrearPersonals::find($id);
        
        //$updatePer->cedbombero=$request->input('cedbombero');
        $updatePer->nombombero=$request->input('nombombero');
        $updatePer->apebombero=$request->input('apebombero');
        $updatePer->fnacimiento=$request->input('fnacimiento');
        $updatePer->lnacimiento=$request->input('lnacimiento');
        $updatePer->sexo=$request->input('sexo');
        $updatePer->ecivil=$request->input('ecivil');
        $updatePer->nhijos=$request->input('nhijos');
        $updatePer->estado=$request->input('estado');
        $updatePer->telbombero=$request->input('telbombero');
        $updatePer->correoelec=$request->input('correoelec');
        $updatePer->dirbombero=$request->input('dirbombero');
        $updatePer->tcamisa=$request->input('tcamisa');
        $updatePer->tpantalon=$request->input('tpantalon');
        $updatePer->tcalzado=$request->input('tcalzado');
        $updatePer->profesion=$request->input('profesion');
        $updatePer->nacademico=$request->input('nacademico');
        $updatePer->ultitulo=$request->input('ultitulo');
        $updatePer->egresado=$request->input('egresado');
        //$updatePer->curso_id=$request->input('curso');
        $updatePer->rango=$request->input('rango');
        $updatePer->cargo_id=$request->input('cargo');
        $updatePer->feingreso=$request->input('feingreso');
        $updatePer->proximoascenso=$request->input('proximoascenso');
        $updatePer->mcbombero_id=$request->input('cbombero');
        $updatePer->estacion_id=$request->input('estacion');
        $updatePer->status=$request->input('estatus');
        $updatePer->user_id=auth()->user()->id;
        $updatePer->save(); 

        $cedula=$request->input('cedbombero');
        $encontrado=CrearPersonals::where('cedbombero',$cedula)->first();
        if(!empty($request->acurso)){
        foreach ($request->acurso as $key => $value) {
            /*echo $key.'soy key<br>';
            echo $value.'soy value<br>';*/
            $cursos= new CursosPersonal;
            $cursos->id_bombero=$encontrado->id;
            $cursos->curso_id=$value;
            $cursos->save();
        }
        }
         return back()->with('notification','Personal Editado Exitosamente');
        
    }

        public function getReginfraestructura()
    {
        return view('reginfraestructura');
        
    }

        public function getRegutilitario()
    {
        return view('regutilitario');
        
    }

        public function getRegautomotor()
    {
        return view('regautomotor');
        
    }

        public function getRegequipos()
    {
        return view('regequipos');
        
    }

        public function getReguniformes()
    {
        return view('reguniformes');
        
    }

        public function getRegmatofc()
    {
        return view('regmatofc');
        
    }

        public function getRegcomunicaciones()
    {
        return view('regcomunicaciones');
        
    }
    
       public function reportespersonal()
    {
        
        
        $cargos=maestro_cargos::all();
        $cursosAgregar=CrearCursos::all();
        $cbomberos=maestro_cuerpo_bomberos::all();
        $estaciones=CrearEstaciones::all();
        return view('reportespersonal')->with(compact('cargos','cbomberos','estaciones','cursosAgregar'));
        
    }

            public function getNecinfraestructura()
    {
        return view('necinfraestructura');
        
    }



            public function getNecutilitario()
    {
        return view('necutilitario');
        
    }

                public function getNecautomotor()
    {
        return view('necautomotor');
        
    }

                    public function getNecequipos()
    {
        return view('necequipos');
        
    }

                    public function getNecuniformes()
    {
        return view('necuniformes');
        
    }

                    public function getNecmatofc()
    {
        return view('necmatofc');
        
    }

                    public function getNeccomunicaciones()
    {
        return view('neccomunicaciones');
        
    }
    

    public function BuscarEstacion($id)
    {
      return CrearEstaciones::where('mcbombero_id',$id)->get();
    }

   public function detpersonal(request $request)
    {

      if($request->rep1)
       {
            $cargos=maestro_cargos::all();
            $estados=estados::all();
            $cbomberos=maestro_cuerpo_bomberos::all();
            $cursos=CursosPersonal::join('crear_cursos','cursos_personals.curso_id','=','crear_cursos.id')->get();
            if($request->cbombero=='0' && $request->estacion=='0' && $request->estatus=='0'){
            $personals=CrearPersonals::all();
            } else {
            $personals=CrearPersonals::where('mcbombero_id',$request->cbombero)->where('estacion_id',$request->estacion)->get();

                 }
            $estaciones=CrearEstaciones::all();
            return view('detpersonal')->with(compact('cargos','personals','cbomberos','estaciones','cursos','estados'));
        }

        if($request->rep2)
       {
          //tipo reporte 2
        }

        if($request->rep3)
       {
           //tipo reporte 3
        }

      }  

}
