<?php

namespace App\Http\Controllers\Reportes;

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
use PDF;
use DB;
class ReportesController extends Controller
{
   public function reportesgestion()
    {
        return gestion_data::reportes();
             
    }

    public function reporte1()
    {
        return gestion_data::reportes();
             
    }


}
