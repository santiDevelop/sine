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
use App\elementos_tipo_equipamiento;
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
use App\gestion_data;
use App\gestion_necesidades;
use App\gestion_casos;
use PDF;
use DB;
class RegistratorController extends Controller
{
    public function index()
    {
        //
    }
        public function getRegbombero()
    {
      $estados=estados::all();
      $profesiones=profesiones::all();
      $estaciones=CrearEstaciones::where('mcbombero_id',auth()->user()->cbombero)->get();
      $rangos=rangos::all();
      //dd($estaciones);
      //dd(auth()->user()->cbombero);
      $cursos=CrearCursos::all();
      $cargos=maestro_cargos::all();
      $cbomberos=maestro_cuerpo_bomberos::where('id',auth()->user()->cbombero)->get();
      return view('regbombero')->with(compact('estaciones','cursos','cargos','cbomberos','estados','rangos','profesiones'));
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
        $CrearPersonal->profesion_id=$request->input('profesion');
        $CrearPersonal->nacademico=$request->input('nacademico');
        $CrearPersonal->ultitulo=$request->input('ultitulo');
        $CrearPersonal->egresado=$request->input('egresado');
        //$CrearPersonal->curso_id=$request->input('curso');
        $CrearPersonal->rango_id=$request->input('rango');
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
        
        if(isset($request->curso)){
        foreach ($request->curso as $key => $value) {
            /*echo $key.'soy key<br>';
            echo $value.'soy value<br>';*/
            $cursos= new CursosPersonal;
            $cursos->id_bombero=$encontrado->id;
            $cursos->curso_id=$value;
            $cursos->save();
        }
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

        public function getAdminNecesidades()
    {
        $personals=necesidades_personal::join('maestro_cargos','necesidades_personals.cargo_id','=','maestro_cargos.id')->join('maestro_cuerpo_bomberos','necesidades_personals.mcbombero_id','=','maestro_cuerpo_bomberos.id')->join('crear_estaciones','necesidades_personals.estacion_id','=','crear_estaciones.id')->select('necesidades_personals.*','maestro_cargos.cargo','maestro_cuerpo_bomberos.nomcbombero','crear_estaciones.nomestacion')->get();
       // dd($personals);
        $nc=necesidades_capacitacion::join('maestro_cuerpo_bomberos','necesidades_capacitacions.mcbombero_id','=','maestro_cuerpo_bomberos.id')->join('crear_estaciones','necesidades_capacitacions.estacion_id','=','crear_estaciones.id')->join('users','necesidades_capacitacions.user_id','=','users.id')->join('crear_cursos','necesidades_capacitacions.curso_id','=','crear_cursos.id')->select('necesidades_capacitacions.*','maestro_cuerpo_bomberos.nomcbombero','crear_estaciones.nomestacion','users.user','crear_cursos.nomcurso')->get();

        return view('necesidadespersonal')->with(compact('personals','nc'));       
    }


       public function getRegCurso()
    {
        $historico=CrearCursos::all();
        $ultimo=CrearCursos::orderby('id','desc')->first();
        if($ultimo!=null){
      $numero=($ultimo->numcurso)+1;
       } else { $numero=1;}
        return view('regcurso')->with(compact('numero','historico'));
        
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
        $rangos=rangos::all();
        $profesiones=profesiones::all();
        $cursosAgregar=CrearCursos::all();
        $cbomberos=maestro_cuerpo_bomberos::all();
        $estaciones=CrearEstaciones::all();
        return view('editpersonal')->with(compact('personals','cursos','cargos','cbomberos','estaciones','cursosAgregar','estados','rangos','profesiones'));
        
        
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
        $updatePer->profesion_id=$request->input('profesion');
        $updatePer->nacademico=$request->input('nacademico');
        $updatePer->ultitulo=$request->input('ultitulo');
        $updatePer->egresado=$request->input('egresado');
        //$updatePer->curso_id=$request->input('curso');
        $updatePer->rango_id=$request->input('rango');
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


        public function getRegdata()
    {

        return gestion_data::buscar(); 
             
    }

       public function postRegdata(request $request)
    {
        $this->validate($request,gestion_data::$rules,gestion_data::$messages);
        return gestion_data::guardar($request); 
             
    }

    
    
        public function reportesgestion()
    {
        return gestion_data::reportes();
             
    }

        public function getGestionNecesidades()
    {
       return gestion_necesidades::buscar();
        
    }

      public function postGestionNecesidades(request $request)
    {
       $mp=count($request->cantidad);
       for ($i=0; $i <$mp ; $i++) { 
           if($request->cantidad[$i]>1000000){
            $this->validate($request,gestion_necesidades::$rules,gestion_necesidades::$messages);
           }
       }
       return gestion_necesidades::guardar($request); 
    }

        public function getGestionCasos()
    {
       return gestion_casos::buscar();
        
    }

   

      public function postGestionCasos(request $request)
    {
        //dd($request);
         $this->validate($request,gestion_casos::$rules,gestion_casos::$messages);
         return gestion_casos::guardar($request);
        
    }


        public function getRelementos()
    {
        $tipo=maestro_tipo_equipamiento::all();

        $elementos=elementos_tipo_equipamiento::join('maestro_tipo_equipamientos','maestro_tipo_equipamientos.id','=','elementos_tipo_equipamientos.tipequip_id')->select('elementos_tipo_equipamientos.*','maestro_tipo_equipamientos.nomtipequip')->get();
        //dd($elementos);
        return view('gestion_recursos.relementos')->with(compact('tipo','elementos'));
        
    }

    public function postRelementos(request $request){

        $this->validate($request,elementos_tipo_equipamiento::$rules,elementos_tipo_equipamiento::$messages);
        return elementos_tipo_equipamiento::guardar($request);
    }
    public function borrarElemento($id){

        return elementos_tipo_equipamiento::borrar($id);
    }

     public function editarElemento($id){

        return elementos_tipo_equipamiento::editar($id);
    }

    public function BuscarListaEquip($id){

        return gestion_data::BuscarListaEquip($id);
    }

     public function updateElemento(request $request,$id){
        $this->validate($request,elementos_tipo_equipamiento::$rules,elementos_tipo_equipamiento::$messages);
        return elementos_tipo_equipamiento::updateElemento($request,$id);
    }


    public function BuscarEstacion($id)
    {
      return CrearEstaciones::where('mcbombero_id',$id)->get();
    }

    public function borrarpersonal($id)
    {
      return CrearPersonals::borrar($id);
    }


 

}
