<?php

namespace App\Http\Controllers\Reportes;

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
class ReportesController extends Controller
{
   public function reportesgestion()
    {
        return gestion_data::reportes();
             
    }

    public function tipoReporte(request $request)
    {
        return gestion_data::reportesDetalle($request);
             
    }


   public function reportespersonal()
    {
        
        
        $cargos=maestro_cargos::all();
        $cursosAgregar=CrearCursos::all();
        $cbomberos=maestro_cuerpo_bomberos::all();
        $estaciones=CrearEstaciones::all();
        return view('reportespersonal')->with(compact('cargos','cbomberos','estaciones','cursosAgregar'));
        
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

            /* $pdf=PDF::loadView('consopersonal',compact('generos','rangos','tcamisa','tpantalon','tcalzado','profesiones','cargos','estatus','nacademico','estados','ecivil','personas'))->setPaper('a4', 'landscape')->setWarnings(false);
            return $pdf->stream('consopersonal.pdf');
*/

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
                    $param.=" and necesidades_personals.estatusolicitud=$request->status";
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
                    $param.=" and necesidades_capacitacions.estatusolicitud=$request->status";
                } elseif($request->status!='0') {$param.="necesidades_capacitacions.estatusolicitud=$request->status";}

                $nc=necesidades_capacitacion::join('maestro_cuerpo_bomberos','necesidades_capacitacions.mcbombero_id','=','maestro_cuerpo_bomberos.id')->join('crear_estaciones','necesidades_capacitacions.estacion_id','=','crear_estaciones.id')->join('users','necesidades_capacitacions.user_id','=','users.id')->join('crear_cursos','necesidades_capacitacions.curso_id','=','crear_cursos.id')->select('necesidades_capacitacions.*','maestro_cuerpo_bomberos.nomcbombero','crear_estaciones.nomestacion','users.user','crear_cursos.nomcurso')->whereraw($param)->get();
                $Suma=necesidades_capacitacion::whereraw($param)->count();
                $pdf=PDF::loadView('reportes.necesidades_capacitacion_reporte',compact('nc','cuerpo','estacion','status','Suma'))->setPaper('a4', 'landscape')->setWarnings(false);
            return $pdf->stream('NecesidadCursos.pdf');
        }


      }  

        public function ReportesCasos()
    {
       return gestion_casos::reportes();
        
    }

     public function ReportesCasosdet(request $request)
    {
       
       return gestion_casos::reportesdet($request);
        
    }
}
