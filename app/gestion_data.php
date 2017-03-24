<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\elementos_tipo_equipamiento;
use App\maestro_cuerpo_bomberos;
use App\CrearEstaciones;
use App\maestro_tipo_equipamiento;
use App\gestion_data;
use App\gestion_data_det;
use PDF;
use DB;
class gestion_data extends Model
{

   public static  $rules=[
    'mcbombero_id'=>'required|integer',
    'estacion_id'=>'required|integer',
    'tipo_id'=>'required|integer',
    ];


    public static  $messages=[
    'mcbombero_id.required'=>'El Cuerpo de bombero es requerido.',
    'estacion_id.required'=>'La Estacion es requerida.',
    'tipo_id.required'=>'El tipo de equipamiento es requerido.',
        ]; 

  public static function buscar(){

  	$tipo=maestro_tipo_equipamiento::all();
  	$mcbomberos=maestro_cuerpo_bomberos::all();
    $ultimo=gestion_data::orderby('id','desc')->first();
    if($ultimo!=null){
      $numero=($ultimo->id)+1;
       } else { $numero=1;}
  	$estaciones=CrearEstaciones::where('mcbombero_id',auth()->user()->cbombero)->get();
  	//$elementos=elementos_tipo_equipamiento::all();
  	$elementos=elementos_tipo_equipamiento::join('maestro_tipo_equipamientos','maestro_tipo_equipamientos.id','=','elementos_tipo_equipamientos.tipequip_id')->select('elementos_tipo_equipamientos.*','maestro_tipo_equipamientos.nomtipequip')->get();


  	return view ('gestion_recursos.regdata')->with(compact('mcbomberos','estaciones','elementos','tipo','numero'));

  }

   public static function reportes(){

        $cbomberos=maestro_cuerpo_bomberos::all();
        $estaciones=CrearEstaciones::all();
     return view('gestion_recursos.reportesgestion')->with(compact('cbomberos','estaciones'));

   }
    public static function reportesDetalle($request){

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
              $elementos=elementos_tipo_equipamiento::join('maestro_tipo_equipamientos','maestro_tipo_equipamientos.id','=','elementos_tipo_equipamientos.tipequip_id')->select('elementos_tipo_equipamientos.*','maestro_tipo_equipamientos.nomtipequip')->get();

                // reporte numero 1 consolidado de equipos por cuerpo de bombero o estacion
               if($request->rep1)
          {

            if($request->cbombero=='0' && $request->estacion=='0')
            {
            /*$data=gestion_data_det::join('gestion_datas','gestion_data_dets.solicitud_id','=','gestion_datas.id')->select('gestion_data_dets.*','gestion_datas.tipequip_id','gestion_datas.mcbombero_id','gestion_datas.estacion_id')->get();
                      */
                $datos=DB::table('gestion_data_dets')->select(array('elementos_tipo_equipamientos.nomelemento', 'maestro_tipo_equipamientos.nomtipequip', DB::raw('sum(cantotal) as cant_total'),
                  DB::raw('sum(cantopt) as cant_optima'),DB::raw('sum(cantdet) as cant_deteriorado'),DB::raw('sum(cantfs) as cant_fuera')))->join('elementos_tipo_equipamientos','elementos_tipo_equipamientos.id','=','gestion_data_dets.elemento_id')->join('maestro_tipo_equipamientos','maestro_tipo_equipamientos.id','=','elementos_tipo_equipamientos.tipequip_id')->groupby('elementos_tipo_equipamientos.nomelemento','maestro_tipo_equipamientos.nomtipequip')->orderby('maestro_tipo_equipamientos.nomtipequip')->get();
                //dd($datos);
                $pdf=PDF::loadView('reportes.gestion_equipos_consolidado',compact('cuerpo','estacion','datos'))->setPaper('a4', 'landscape')->setWarnings(false);
                return $pdf->stream('reporteconsolidado.pdf');

             } elseif ($request->cbomero!='0' && $request->estacion=='0') {

                 $datos=DB::table('gestion_data_dets')->select(array('elementos_tipo_equipamientos.nomelemento', 'maestro_tipo_equipamientos.nomtipequip', DB::raw('sum(cantotal) as cant_total'),
                  DB::raw('sum(cantopt) as cant_optima'),DB::raw('sum(cantdet) as cant_deteriorado'),DB::raw('sum(cantfs) as cant_fuera')))->join('elementos_tipo_equipamientos','elementos_tipo_equipamientos.id','=','gestion_data_dets.elemento_id')->join('maestro_tipo_equipamientos','maestro_tipo_equipamientos.id','=','elementos_tipo_equipamientos.tipequip_id')->join('gestion_datas','gestion_datas.id','=','gestion_data_dets.solicitud_id')->groupby('elementos_tipo_equipamientos.nomelemento','maestro_tipo_equipamientos.nomtipequip')->orderby('maestro_tipo_equipamientos.nomtipequip')->where('gestion_datas.mcbombero_id',$request->cbombero)->get();

                   $pdf=PDF::loadView('reportes.gestion_equipos_consolidado',compact('cuerpo','estacion','datos'))->setPaper('a4', 'landscape')->setWarnings(false);
                return $pdf->stream('reporteconsolidado.pdf');
                     

                } elseif ($request->cbomero!='0' && $request->estacion!='0') {


                    $datos=DB::table('gestion_data_dets')->select(array('elementos_tipo_equipamientos.nomelemento', 'maestro_tipo_equipamientos.nomtipequip', DB::raw('sum(cantotal) as cant_total'),
                  DB::raw('sum(cantopt) as cant_optima'),DB::raw('sum(cantdet) as cant_deteriorado'),DB::raw('sum(cantfs) as cant_fuera')))->join('elementos_tipo_equipamientos','elementos_tipo_equipamientos.id','=','gestion_data_dets.elemento_id')->join('maestro_tipo_equipamientos','maestro_tipo_equipamientos.id','=','elementos_tipo_equipamientos.tipequip_id')->join('gestion_datas','gestion_datas.id','=','gestion_data_dets.solicitud_id')->groupby('elementos_tipo_equipamientos.nomelemento','maestro_tipo_equipamientos.nomtipequip')->orderby('maestro_tipo_equipamientos.nomtipequip')->where('gestion_datas.mcbombero_id',$request->cbombero)->where('gestion_datas.estacion_id',$request->estacion)->get();

                  $pdf=PDF::loadView('reportes.gestion_equipos_consolidado',compact('cuerpo','estacion','datos'))->setPaper('a4', 'landscape')->setWarnings(false);
                return $pdf->stream('reporteconsolidado.pdf');

                   }
        }

               if($request->rep2)
          {

            if($request->cbombero=='0' && $request->estacion=='0')
            {
            /*$data=gestion_data_det::join('gestion_datas','gestion_data_dets.solicitud_id','=','gestion_datas.id')->select('gestion_data_dets.*','gestion_datas.tipequip_id','gestion_datas.mcbombero_id','gestion_datas.estacion_id')->get();
                      */
                $datos=DB::table('gestion_necesidades_dets')->select(array('elementos_tipo_equipamientos.nomelemento', 'maestro_tipo_equipamientos.nomtipequip', DB::raw('sum(cantidad) as cant_total')))->join('elementos_tipo_equipamientos','elementos_tipo_equipamientos.id','=','gestion_necesidades_dets.elemento_id')->join('maestro_tipo_equipamientos','maestro_tipo_equipamientos.id','=','elementos_tipo_equipamientos.tipequip_id')->groupby('elementos_tipo_equipamientos.nomelemento','maestro_tipo_equipamientos.nomtipequip')->orderby('maestro_tipo_equipamientos.nomtipequip')->get();
               // dd($datos);
                $pdf=PDF::loadView('reportes.gestion_necesidades',compact('cuerpo','estacion','datos'))->setPaper('a4', 'landscape')->setWarnings(false);
                return $pdf->stream('reporteconsolidado.pdf');

             } elseif ($request->cbomero!='0' && $request->estacion=='0') {

                 $datos=DB::table('gestion_necesidades_dets')->select(array('elementos_tipo_equipamientos.nomelemento', 'maestro_tipo_equipamientos.nomtipequip', DB::raw('sum(cantidad) as cant_total')))->join('elementos_tipo_equipamientos','elementos_tipo_equipamientos.id','=','gestion_necesidades_dets.elemento_id')->join('maestro_tipo_equipamientos','maestro_tipo_equipamientos.id','=','elementos_tipo_equipamientos.tipequip_id')->join('gestion_necesidades','gestion_necesidades.id','=','gestion_necesidades_dets.solicitud_id')->groupby('elementos_tipo_equipamientos.nomelemento','maestro_tipo_equipamientos.nomtipequip')->orderby('maestro_tipo_equipamientos.nomtipequip')->where('gestion_necesidades.mcbombero_id',$request->cbombero)->get();

                   $pdf=PDF::loadView('reportes.gestion_necesidades',compact('cuerpo','estacion','datos'))->setPaper('a4', 'landscape')->setWarnings(false);
                return $pdf->stream('reporteconsolidado.pdf');
                     

                } elseif ($request->cbomero!='0' && $request->estacion!='0') {


                    $datos=DB::table('gestion_necesidades_dets')->select(array('elementos_tipo_equipamientos.nomelemento', 'maestro_tipo_equipamientos.nomtipequip', DB::raw('sum(cantidad) as cant_total')))->join('elementos_tipo_equipamientos','elementos_tipo_equipamientos.id','=','gestion_necesidades_dets.elemento_id')->join('maestro_tipo_equipamientos','maestro_tipo_equipamientos.id','=','elementos_tipo_equipamientos.tipequip_id')->join('gestion_necesidades','gestion_necesidades.id','=','gestion_necesidades_dets.solicitud_id')->groupby('elementos_tipo_equipamientos.nomelemento','maestro_tipo_equipamientos.nomtipequip')->orderby('maestro_tipo_equipamientos.nomtipequip')->where('gestion_necesidades.mcbombero_id',$request->cbombero)->where('gestion_necesidades.estacion_id',$request->estacion)->get();

                  $pdf=PDF::loadView('reportes.gestion_necesidades',compact('cuerpo','estacion','datos'))->setPaper('a4', 'landscape')->setWarnings(false);
                return $pdf->stream('reporteconsolidado.pdf');

                   }
        }




   }





   public static function BuscarListaEquip($id){

        return $elemento=elementos_tipo_equipamiento::where('tipequip_id',$id)->get();
        
    }

    public static function guardar($request){
        //dd($request);
         $i=0;
         $valido=false;
         $mp=count($request->cant_total);
       if(isset($request->id))
      {
        for ($e=0; $e <$mp ; $e++) { 
           if($request->cant_total[$e]!=null){
            $valido=true;
           }
         }
              if($valido){
                $gd=new gestion_data;
                $gd->tipequip_id=$request->input('tipo_id');
                $gd->mcbombero_id=$request->input('mcbombero_id');
                $gd->estacion_id=$request->input('estacion_id');
                $gd->user_id=auth()->user()->id;
                $gd->save();
                $id=gestion_data::select('id')->orderby('id','desc')->first();
              } else {return back()->with('problema','Debe llenar la cantidad totales de los equipos.');}
        foreach ($request->id as $key => $value) 
        {
              if($request->cant_total[$i]!=0){
                $gdt=new gestion_data_det;
                $gdt->solicitud_id=$id->id;
                $gdt->elemento_id=$value;
                $gdt->cantotal=$request->cant_total[$i];
                $gdt->cantopt=$request->cant_optima[$i];
                $gdt->cantdet=$request->cant_deteriorado[$i];
                $gdt->cantfs=$request->cant_fuera_servicio[$i];
                $gdt->marca=$request->marca[$i];
                $gdt->modelo=$request->modelo[$i];
                $gdt->serial=$request->serial_fabrica[$i];
                $gdt->observacion=$request->observacion[$i];
                $gdt->save();
                }
                $i++;
          }
        return back()->with('notification','Registro de equipos realizado correctamente Numero: '.$id->id);
      } else 
        {
        return back()->with('problema','Debe Seleccionar una cateroria');
        }

    }



}
