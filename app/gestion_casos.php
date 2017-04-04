<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\maestro_cat_emergencia;
use App\CrearPersonals;
use App\crear_estados;
use App\maestro_cuerpo_bomberos;
use App\CrearEstaciones;
use App\estados;
use App\gestion_casos_det;
use PDF;
use DB;
use DateTime;
class gestion_casos extends Model
{
      public static  $rules=[
    'mcbombero_id'=>'required|integer',
    'estacion_id'=>'required|integer',
    'emergencia_id'=>'required|integer|not_in:0',
    'condicion'=>'required|integer',
    'hora'=>'required',
    'estado'=>'required',
    'municipio'=>'required',
    'parroquia'=>'required',
    'direccion'=>'required',
    'nro_personas'=>'required',
    'nro_heridos'=>'required',
    'nro_decesos'=>'required',
    'descripcion'=>'required',
    'fecha'=>'required',
    ];


    public static  $messages=[
    'mcbombero_id.required'=>'El Cuerpo de bombero es requerido.',
    'estacion_id.required'=>'La Estacion es requerida.',
    'emergencia_id.required'=>'El tipo de Emergencia es requerido.',
    'emergencia_id.not_in'=>'Debe Seleccionar un tipo de emergencia, de no encontrar la necesaria contacte al administrador del sistema.',
    'condicion.required'=>'Seleccione la Condicion del caso.',
    'hora.required'=>'La hora de atencion del caso es requerida.',
    'estado.required'=>'El estado donde ocurrio el evento es requerido.',
    'municipio.required'=>'El municipio donde ocurrio el evento es requerido',
    'parroquia.required'=>'El parroquia donde ocurrio el evento es requerido',
    'direccion.required'=>'La direccion Exacta donde ocurrio el evento es requerido',
    'nro_personas.required'=>'El numero de personas afectadas es requerido.',
    'nro_heridos.required'=>'El numero de personas heridas es requerido de no poseer escriba "0".',
    'nro_decesos.required'=>'El numero de decesos es requerido de no poseer escriba "0".',
    'descripcion.required'=>'La descripcion del evento es requerida.',
    'fecha.required'=>'La Fecha del evento es requerida.',
        ]; 



        public static function buscar(){

  	$tipo=maestro_cat_emergencia::all();
  	$personal=crearpersonals::orderBy('cedbombero')->get();
  	$mcbomberos=maestro_cuerpo_bomberos::all();
    $ultimo=gestion_casos::orderby('id','desc')->first();
    if($ultimo!=null){
      $numero=($ultimo->id)+1;
       } else { $numero=1;}
  	$estaciones=CrearEstaciones::where('mcbombero_id',auth()->user()->cbombero)->get();
   	$estados=estados::all();

  	return view ('gestion_casos.regcasos')->with(compact('personal','mcbomberos','tipo','numero','estaciones','estados'));

       }


     public static function guardar($request){

        $caso=new gestion_casos();
        $caso->fecha=$request->input('fecha');
        $caso->mcbombero_id=$request->input('mcbombero_id');
        $caso->estacion_id=$request->input('estacion_id');
        $caso->emergencia_id=$request->input('emergencia_id');
        $caso->condicion=$request->input('condicion');
        $caso->hora=$request->input('hora');
        $caso->estado_id=$request->input('estado');
        $caso->municipio=$request->input('municipio');
        $caso->parroquia=$request->input('parroquia');
        $caso->direccion=$request->input('direccion');
        $caso->nro_personas=$request->input('nro_personas');
        $caso->nro_heridos=$request->input('nro_heridos');
        $caso->nro_decesos=$request->input('nro_decesos');
        $caso->descripcion=$request->input('descripcion');
        $caso->user_id=auth()->user()->id;
        $caso->save();


        $ultimo=gestion_casos::orderby('id','desc')->first();
         if($ultimo!=null){
           $numero=$ultimo->id;
          } else { $numero=1;}


         if(isset($request->bombero_id)){
           foreach ($request->bombero_id as $key => $value) {
            $gcd=new gestion_casos_det();
            $gcd->caso_id=$numero;
            $gcd->bombero_id=$value;
            $gcd->save();
            }
          }


        return back()->with('notification','Caso Registrado Correctamente con el Numero: '.$ultimo->id);

  }


   public static function reportes(){

    $cbomberos=maestro_cuerpo_bomberos::all();
    $estaciones=CrearEstaciones::all();
    $tipo=maestro_cat_emergencia::all();
    $estados=estados::all();
    $personal=crearpersonals::orderBy('cedbombero')->get();
    $gestion=gestion_casos::all();
    return view ('gestion_casos.reportescasos')->with(compact('cbomberos','estaciones','tipo','estados','personal','gestion'));

    }

   public static function reportesdet($request){

         //dd($request);
        $cuerpo=maestro_cuerpo_bomberos::find($request->cbombero);
        $estacion=CrearEstaciones::find($request->estacion);
        $estado=estados::find($request->estado);
        $flag=true;
        $param='';

        if($request->personal){
         if($flag) { 
           $param="bombero_id in(".implode(",",$request->personal).")";
          } else { $param.=" AND bombero_id in(".implode(",",$request->personal).")";
              $flag=false;      
            }
        }




        if($request->emergencia_id){
          if($flag) { 
           $param="emergencia_id =".implode(",",$request->emergencia_id);
          } else { $param.=" AND emergencia_id =".implode(",",$request->emergencia_id);
              $flag=false;      
            }
        }

        if($request->cbombero!=0){
          if($flag) { 
           $param="mcbombero_id =".$request->cbombero;
          } else { $param.=" AND mcbombero_id =".$request->cbombero;
              $flag=false;      
            }
        }

         if($request->estacion!=0){
            if($flag) { 
            $param="estacion_id=".$request->estacion;
            } else {
                $param.=" AND estacion_id=".$request->estacion;
                $flag=false;
              }
          }

         if($request->condicion!=0){
            if($flag) { 
            $param="condicion=".$request->condicion;
            } else {
                $param.=" AND condicion=".$request->condicion;
                $flag=false;
              }
           }

         if($request->estado!=0){
            if($flag) { 
            $param="estado_id=".$request->estado;
            } else {
                $param.=" AND estado=".$request->estado;
                $flag=false;
              }
           }

         if ($param==''){
          $param="gestion_casos.mcbombero_id > 0";
         }
         //dd($param);
          $tipo=maestro_cat_emergencia::all();
          $date=new DateTime($request->feini);
          $feini=$date->format('d-m-Y');
          $date=new DateTime($request->fefin);
          $fefin=$date->format('d-m-Y');

           switch($request->condicion){
              case  1:
              $status='Atendido';
              break;
              case 2:
              $status='Rechazado';
              break;
              case 3:
              $status='Transferido';
              break;
              default:
              $status='Todos';
              break;
            }

                //  1-Reporte Estadistico de Casos por fecha, tipo de emergencia
           if($request->rep1)
            {

                $datos=DB::table('gestion_casos')->select(array('maestro_cat_emergencias.nomcatemerg', DB::raw('sum(nro_personas) as nro_personas'),
                  DB::raw('sum(nro_heridos) as nro_heridos'),DB::raw('sum(nro_decesos) as nro_decesos')))->join('maestro_cat_emergencias','maestro_cat_emergencias.id','=','gestion_casos.emergencia_id')->groupby('maestro_cat_emergencias.nomcatemerg')->orderby('maestro_cat_emergencias.nomcatemerg')->whereBetween('fecha',[$request->feini, $request->fefin])->whereRaw($param)->get();

                 $sumas=DB::table('gestion_casos')->select(array(DB::raw('sum(nro_personas) as nro_personas'),DB::raw('count(gestion_casos.id) as casos'),
                  DB::raw('sum(nro_heridos) as nro_heridos'),DB::raw('sum(nro_decesos) as nro_decesos')))->whereBetween('fecha',[$request->feini, $request->fefin])->whereRaw($param)->get();
                //dd($sumas);
                $pdf=PDF::loadView('reportes.gestion_casos_consolidado',compact('cuerpo','estacion','datos','feini','fefin','status','estado','sumas'))->setPaper('a4', 'landscape')->setWarnings(false);
                return $pdf->stream('reporteconsolidado.pdf');

            
            }

            if($request->rep2)
            {

             $datos=gestion_casos::select(DB::raw('sum(nro_personas) as nro_personas'),
              DB::raw('sum(nro_heridos) as nro_heridos'),
              DB::raw('sum(nro_decesos) as nro_decesos'),
              DB::raw('count(gestion_casos.id) as casos'),
              'estado_id',
              'estados.estado')
              ->join('estados','estados.id','=','gestion_casos.estado_id')->whereBetween('fecha',[$request->feini, $request->fefin])->groupBy('estado_id')->get();
             //dd($datos);
              $pdf=PDF::loadView('reportes.gestion_casos_consolidado_estados',compact('datos','feini','fefin'))->setPaper('a4', 'landscape')->setWarnings(false);
                return $pdf->stream('reporteconsolidadoestados.pdf');
           }

            if($request->rep3)
             {
              $datos=gestion_casos::select(DB::raw('sum(nro_personas) as nro_personas'),
              DB::raw('sum(nro_heridos) as nro_heridos'),
              DB::raw('sum(nro_decesos) as nro_decesos'),
              DB::raw('count(gestion_casos.id) as casos'),
              'crear_personals.*','rangos.rango','gestion_casos_dets.bombero_id')->join('gestion_casos_dets','gestion_casos_dets.caso_id','=','gestion_casos.id')->join('crear_personals','crear_personals.id','=','gestion_casos_dets.bombero_id')->join('rangos','crear_personals.rango_id','=','rangos.id')
              ->whereBetween('fecha',[$request->feini, $request->fefin])->whereRaw($param)->groupBy('crear_personals.id')->get();
              //dd($datos);
              $pdf=PDF::loadView('reportes.gestion_casos_consolidado_bomberos',compact('datos','feini','fefin'))->setPaper('a4', 'landscape')->setWarnings(false);
                return $pdf->stream('reporteconsolidadobombero.pdf');
            
            }

            if($request->rep4)
            {   
             // dd($request->caso);
              $datos=gestion_casos::select('gestion_casos.*','estados.estado','crear_estaciones.nomestacion','maestro_cuerpo_bomberos.nomcbombero','maestro_cat_emergencias.nomcatemerg')->join('maestro_cuerpo_bomberos','maestro_cuerpo_bomberos.id','=','gestion_casos.mcbombero_id')->join('crear_estaciones','crear_estaciones.id','=','gestion_casos.estacion_id')->join('maestro_cat_emergencias','maestro_cat_emergencias.id','=','gestion_casos.emergencia_id')->join('estados','estados.id','=','gestion_casos.estado_id')->where('gestion_casos.id',$request->caso)->get();

              $personal=gestion_casos_det::select('gestion_casos_dets.bombero_id','crear_personals.*')->join('crear_personals','crear_personals.id','=','gestion_casos_dets.bombero_id')->join('rangos','crear_personals.rango_id','=','rangos.id')->join('maestro_cuerpo_bomberos','maestro_cuerpo_bomberos.id','=','crear_personals.mcbombero_id')->join('crear_estaciones','crear_estaciones.id','=','crear_personals.estacion_id')->where('gestion_casos_dets.caso_id',$request->caso)->get();

              //dd($personal);
              $pdf=PDF::loadView('reportes.gestion_casos_detalle',compact('datos','personal','status'))->setPaper('a4', 'landscape')->setWarnings(false);
              return $pdf->stream('reporteconsolidadobombero.pdf');
            } 

   
  }


}
