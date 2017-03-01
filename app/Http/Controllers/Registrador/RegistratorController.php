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
use App\rangos;
use App\profesiones;
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
      $cbomberos=maestro_cuerpo_bomberos::where('id',auth()->user()->cbombero)->get();;
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
         $param='';
         $Suma='';
         $cuerpo=maestro_cuerpo_bomberos::find($request->cbombero);
         $estacion=CrearEstaciones::find($request->estacion);
           switch   ($request->status){
              case  1:
              $status='Solicitado';
              break;
              case 2:
              $status='Visto';
              break;
              case 3:
              $status='Procesado';
              break;
              default:
              $status='todos';
              break;}
      if($request->rep1)
       {
            
            $cargos=maestro_cargos::all();
            $estados=estados::all();
            $rangos=rangos::all();
            $profesiones=profesiones::all();
            $cbomberos=maestro_cuerpo_bomberos::all();
            $cursos=CursosPersonal::join('crear_cursos','cursos_personals.curso_id','=','crear_cursos.id')->get();
            if($request->cbombero=='0' && $request->estacion=='0'){
            $personals=CrearPersonals::all();
            } elseif ($request->cbomero!='0' && $request->estacion=='0') {
            $personals=CrearPersonals::where('mcbombero_id',$request->cbombero)->get();

                 } elseif ($request->cbomero!='0' && $request->estacion!='0') {
            $personals=CrearPersonals::where('mcbombero_id',$request->cbombero)->where('estacion_id',$request->estacion)->get();

                 }
            $estaciones=CrearEstaciones::all();
            return view('detpersonal')->with(compact('cargos','personals','cbomberos','estaciones','cursos','estados','profesiones','rangos'));

            


        }

        if($request->rep2)
       {    

             if($request->cbombero=='0' && $request->estacion=='0'){
            $personas=CrearPersonals::count();
            $generos=DB::table('crear_personals')->select(array('sexo', DB::raw('COUNT(sexo) as Suma')))->groupby('sexo')->get();
            $rangos=DB::table('crear_personals')->select(array('rango_id','rangos.rango', DB::raw('COUNT(rango_id) as Suma')))->join('rangos','crear_personals.rango_id','=','rangos.id')->groupby('rango_id')->get();
            $tcamisa=DB::table('crear_personals')->select(array('tcamisa', DB::raw('COUNT(tcamisa) as Suma')))->groupby('tcamisa')->get();
            $tpantalon=DB::table('crear_personals')->select(array('tpantalon', DB::raw('COUNT(tpantalon) as Suma')))->groupby('tpantalon')->get();
            $tcalzado=DB::table('crear_personals')->select(array('tcalzado', DB::raw('COUNT(tcalzado) as Suma')))->groupby('tcalzado')->get();
            $profesiones=DB::table('crear_personals')->select(array('profesion_id','profesiones.profesion', DB::raw('COUNT(profesion_id) as Suma')))->join('profesiones','crear_personals.profesion_id','=','profesiones.id')->groupby('profesion_id')->get();
            $cargos=DB::table('crear_personals')->select('cargo_id','maestro_cargos.cargo', DB::raw('COUNT(cargo_id) as Suma'))->join('maestro_cargos','crear_personals.cargo_id','=','maestro_cargos.id')->groupby('cargo_id')->get();
            $estados=DB::table('crear_personals')->select('crear_personals.estado','estados.estado', DB::raw('COUNT(crear_personals.estado) as Suma'))->join('estados','crear_personals.estado','=','estados.id')->groupby('crear_personals.estado')->get();
           // dd($estados);
            $estatus=DB::table('crear_personals')->select(array('status', DB::raw('COUNT(status) as Suma')))->groupby('status')->get();
            $nacademico=DB::table('crear_personals')->select(array('nacademico', DB::raw('COUNT(nacademico) as Suma')))->groupby('nacademico')->get();
            $ecivil=DB::table('crear_personals')->select(array('ecivil', DB::raw('COUNT(ecivil) as Suma')))->groupby('ecivil')->get();
            //dd($genero,$rango);
            return view('consopersonal')->with(compact('generos','rangos','tcamisa','tpantalon','tcalzado','profesiones','cargos','estatus','nacademico','estados','ecivil','personas'));
            } elseif ($request->cbomero!='0' && $request->estacion=='0') {

                
                $personas=CrearPersonals::where('mcbombero_id',$request->cbombero)->count();
                $generos=DB::table('crear_personals')->select(array('sexo', DB::raw('COUNT(sexo) as Suma')))->where('mcbombero_id',$request->cbombero)->groupby('sexo')->get();
            $rangos=DB::table('crear_personals')->select(array('rango_id','rangos.rango', DB::raw('COUNT(rango_id) as Suma')))->join('rangos','crear_personals.rango_id','=','rangos.id')->where('mcbombero_id',$request->cbombero)->groupby('rango_id')->get();
            $tcamisa=DB::table('crear_personals')->select(array('tcamisa', DB::raw('COUNT(tcamisa) as Suma')))->where('mcbombero_id',$request->cbombero)->groupby('tcamisa')->get();
            $tpantalon=DB::table('crear_personals')->select(array('tpantalon', DB::raw('COUNT(tpantalon) as Suma')))->where('mcbombero_id',$request->cbombero)->groupby('tpantalon')->get();
            $tcalzado=DB::table('crear_personals')->select(array('tcalzado', DB::raw('COUNT(tcalzado) as Suma')))->where('mcbombero_id',$request->cbombero)->groupby('tcalzado')->get();
            $profesiones=DB::table('crear_personals')->select(array('profesion_id','profesiones.profesion', DB::raw('COUNT(profesion_id) as Suma')))->join('profesiones','crear_personals.profesion_id','=','profesiones.id')->where('mcbombero_id',$request->cbombero)->groupby('profesion_id')->get();
            $cargos=DB::table('crear_personals')->select('cargo_id','maestro_cargos.cargo', DB::raw('COUNT(cargo_id) as Suma'))->join('maestro_cargos','crear_personals.cargo_id','=','maestro_cargos.id')->where('mcbombero_id',$request->cbombero)->groupby('cargo_id')->get();
            $estados=DB::table('crear_personals')->select('crear_personals.estado','estados.estado', DB::raw('COUNT(crear_personals.estado) as Suma'))->join('estados','crear_personals.estado','=','estados.id')->where('mcbombero_id',$request->cbombero)->groupby('crear_personals.estado')->get();
           // dd($estados);
            $estatus=DB::table('crear_personals')->select(array('status', DB::raw('COUNT(status) as Suma')))->where('mcbombero_id',$request->cbombero)->groupby('status')->get();
            $nacademico=DB::table('crear_personals')->select(array('nacademico', DB::raw('COUNT(nacademico) as Suma')))->where('mcbombero_id',$request->cbombero)->groupby('nacademico')->get();
            $ecivil=DB::table('crear_personals')->select(array('ecivil', DB::raw('COUNT(ecivil) as Suma')))->where('mcbombero_id',$request->cbombero)->groupby('ecivil')->get();
            //dd($genero,$rango);
            return view('consopersonal')->with(compact('generos','rangos','tcamisa','tpantalon','tcalzado','profesiones','cargos','estatus','nacademico','estados','ecivil','personas','cuerpo','estacion'));

            } elseif ($request->cbomero!='0' && $request->estacion!='0') {

            $personas=CrearPersonals::where('mcbombero_id',$request->cbombero)->where('estacion_id',$request->estacion)->count();
            $generos=DB::table('crear_personals')->select(array('sexo', DB::raw('COUNT(sexo) as Suma')))->where('mcbombero_id',$request->cbombero)->where('estacion_id',$request->estacion)->groupby('sexo')->get();
            $rangos=DB::table('crear_personals')->select(array('rango_id','rangos.rango', DB::raw('COUNT(rango_id) as Suma')))->join('rangos','crear_personals.rango_id','=','rangos.id')->where('mcbombero_id',$request->cbombero)->where('estacion_id',$request->estacion)->groupby('rango_id')->get();
            $tcamisa=DB::table('crear_personals')->select(array('tcamisa', DB::raw('COUNT(tcamisa) as Suma')))->where('mcbombero_id',$request->cbombero)->where('estacion_id',$request->estacion)->groupby('tcamisa')->get();
            $tpantalon=DB::table('crear_personals')->select(array('tpantalon', DB::raw('COUNT(tpantalon) as Suma')))->where('mcbombero_id',$request->cbombero)->where('estacion_id',$request->estacion)->groupby('tpantalon')->get();
            $tcalzado=DB::table('crear_personals')->select(array('tcalzado', DB::raw('COUNT(tcalzado) as Suma')))->where('mcbombero_id',$request->cbombero)->where('estacion_id',$request->estacion)->groupby('tcalzado')->get();
            $profesiones=DB::table('crear_personals')->select(array('profesion_id','profesiones.profesion', DB::raw('COUNT(profesion_id) as Suma')))->join('profesiones','crear_personals.profesion_id','=','profesiones.id')->where('mcbombero_id',$request->cbombero)->where('estacion_id',$request->estacion)->groupby('profesion_id')->get();
            $cargos=DB::table('crear_personals')->select('cargo_id','maestro_cargos.cargo', DB::raw('COUNT(cargo_id) as Suma'))->join('maestro_cargos','crear_personals.cargo_id','=','maestro_cargos.id')->where('mcbombero_id',$request->cbombero)->where('estacion_id',$request->estacion)->groupby('cargo_id')->get();
            $estados=DB::table('crear_personals')->select('crear_personals.estado','estados.estado', DB::raw('COUNT(crear_personals.estado) as Suma'))->join('estados','crear_personals.estado','=','estados.id')->where('mcbombero_id',$request->cbombero)->where('estacion_id',$request->estacion)->groupby('crear_personals.estado')->get();
           // dd($estados);
            $estatus=DB::table('crear_personals')->select(array('status', DB::raw('COUNT(status) as Suma')))->where('mcbombero_id',$request->cbombero)->where('estacion_id',$request->estacion)->groupby('status')->get();
            $nacademico=DB::table('crear_personals')->select(array('nacademico', DB::raw('COUNT(nacademico) as Suma')))->where('mcbombero_id',$request->cbombero)->where('estacion_id',$request->estacion)->groupby('nacademico')->get();
            $ecivil=DB::table('crear_personals')->select(array('ecivil', DB::raw('COUNT(ecivil) as Suma')))->where('mcbombero_id',$request->cbombero)->where('estacion_id',$request->estacion)->groupby('ecivil')->get();
            //dd($genero,$rango);
            return view('consopersonal')->with(compact('generos','rangos','tcamisa','tpantalon','tcalzado','profesiones','cargos','estatus','nacademico','estados','ecivil','personas','cuerpo','estacion'));
             }
            /* $cursos=CursosPersonal::join('crear_cursos','cursos_personals.curso_id','=','crear_cursos.id')->where('cursos_personals.id_bombero',$id)->get();*/

          /*$pdf =PDF::loadView('detpersonal',compact('cargos','personals','cbomberos','estaciones','cursos','estados'));

        return $pdf->stream('consolidado.pdf');  */    


        /*$result = DB::table('album as A')
        ->select("A.idalbum", "A.title_en as title", 
        "A.desc_en as description", "A.cover as cover",
        DB::raw("(SELECT COUNT(idgallery) AS gambar FROM gallery WHERE cate='1' AND albumid=A.idalbum) as gambar"), 
        DB::raw("(SELECT COUNT(idgallery) AS videos FROM gallery WHERE cate='2' AND albumid=A.idalbum) as videos")
        )
        ->orderBy('A.date', 'asc')->paginate($this->perpage);
        return $result;*/   
        }

        if($request->rep3)
       {
            
           //dd($request);
            if($request->cbombero=='0' && $request->estacion=='0' && $request->status=='0')
            {
            
           $np=necesidades_personal::join('maestro_cuerpo_bomberos','necesidades_personals.mcbombero_id','=','maestro_cuerpo_bomberos.id')->join('crear_estaciones','necesidades_personals.estacion_id','=','crear_estaciones.id')->join('users','necesidades_personals.user_id','=','users.id')->join('maestro_cargos','necesidades_personals.cargo_id','=','maestro_cargos.id')->select('necesidades_personals.*','maestro_cuerpo_bomberos.nomcbombero','crear_estaciones.nomestacion','users.user','maestro_cargos.cargo')->get();
            //dd($np);
           $Suma=necesidades_personal::count();

            $pdf=PDF::loadView('reportes.necesidades_personal_reporte',compact('np','cuerpo','estacion','status','Suma'))->setPaper('a4', 'landscape')->setWarnings(false);
            return $pdf->stream('NecesidadPersonal.pdf');
             }
                if($request->cbombero!='0'){
                $param="necesidades_personals.mcbombero_id=$request->cbombero ";
                }
                if($request->estacion!='0'){
                    $param.=" and necesidades_personals.estacion_id=$request->estacion";
                } if($request->status!='0' && $request->cbombero!='0'){ 
                    $param.=" and necesidades_personals.estatusolicitud=$request->status";;
                } elseif($request->status!='0') {$param.="necesidades_personals.estatusolicitud=$request->status";}

                 $np=necesidades_personal::join('maestro_cuerpo_bomberos','necesidades_personals.mcbombero_id','=','maestro_cuerpo_bomberos.id')->join('crear_estaciones','necesidades_personals.estacion_id','=','crear_estaciones.id')->join('users','necesidades_personals.user_id','=','users.id')->join('maestro_cargos','necesidades_personals.cargo_id','=','maestro_cargos.id')->select('necesidades_personals.*','maestro_cuerpo_bomberos.nomcbombero','crear_estaciones.nomestacion','users.user','maestro_cargos.cargo')->whereraw($param)->get();
                 $Suma=necesidades_personal::whereraw($param)->count();
                 
                     $pdf=PDF::loadView('reportes.necesidades_personal_reporte',compact('np','cuerpo','estacion','status','Suma'))->setPaper('a4', 'landscape')->setWarnings(false);
                     return $pdf->stream('NecesidadPersonal.pdf');
           

      } 

        


          if($request->rep4)
       {
        if($request->cbombero=='0' && $request->estacion=='0' && $request->status=='0')
            {
           $nc=necesidades_capacitacion::join('maestro_cuerpo_bomberos','necesidades_capacitacions.mcbombero_id','=','maestro_cuerpo_bomberos.id')->join('crear_estaciones','necesidades_capacitacions.estacion_id','=','crear_estaciones.id')->join('users','necesidades_capacitacions.user_id','=','users.id')->join('crear_cursos','necesidades_capacitacions.curso_id','=','crear_cursos.id')->select('necesidades_capacitacions.*','maestro_cuerpo_bomberos.nomcbombero','crear_estaciones.nomestacion','users.user','crear_cursos.nomcurso')->get();
           $Suma=necesidades_capacitacion::count();
            $pdf=PDF::loadView('reportes.necesidades_capacitacion_reporte',compact('nc','cuerpo','estacion','status','Suma'))->setPaper('a4', 'landscape')->setWarnings(false);
            return $pdf->stream('NecesidadCursos.pdf');
            }

            if($request->cbombero!='0'){
                $param="necesidades_capacitacions.mcbombero_id=$request->cbombero ";
                }
                if($request->estacion!='0'){
                    $param.=" and necesidades_capacitacions.estacion_id=$request->estacion";
                } if($request->status!='0' && $request->cbombero!='0'){ 
                    $param.=" and necesidades_capacitacions.estatusolicitud=$request->status";;
                } elseif($request->status!='0') {$param.="necesidades_capacitacions.estatusolicitud=$request->status";}

                $nc=necesidades_capacitacion::join('maestro_cuerpo_bomberos','necesidades_capacitacions.mcbombero_id','=','maestro_cuerpo_bomberos.id')->join('crear_estaciones','necesidades_capacitacions.estacion_id','=','crear_estaciones.id')->join('users','necesidades_capacitacions.user_id','=','users.id')->join('crear_cursos','necesidades_capacitacions.curso_id','=','crear_cursos.id')->select('necesidades_capacitacions.*','maestro_cuerpo_bomberos.nomcbombero','crear_estaciones.nomestacion','users.user','crear_cursos.nomcurso')->whereraw($param)->get();
                $Suma=necesidades_capacitacion::whereraw($param)->count();
                $pdf=PDF::loadView('reportes.necesidades_capacitacion_reporte',compact('nc','cuerpo','estacion','status','Suma'))->setPaper('a4', 'landscape')->setWarnings(false);
            return $pdf->stream('NecesidadCursos.pdf');
        }


      }  

}
