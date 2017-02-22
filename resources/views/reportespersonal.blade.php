@extends('layouts.app')

@section('content') 
  <!-- Content Wrapper. Contains page content -->
 

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Administración de personal
        <small>Reportes de Personal</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Módulos</li>
        <li>Gestión humana</li>
        <li class="active">Reportes Personal</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        Reportes Personal
        <small>Panel Reportes Personal</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Módulos</li>
        <li>Gestión humana</li>
        <li class="active">Reportes Personal</li>
      </ol>
      </div>
    <!-- Main content -->
    <section class="content">
    <!-- Your Page Content Here -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Reportes de Personal</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th style="width: 150px">Reporte</th>
                  <th>Parametros</th>
                  <th style="width: 40px"></th>
                </tr>

                <form action="/reportespersonal" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="rep1" value="1">
                <tr>
                  <td>1.</td>
                  <td>Reporte Detallado Personal</td>
                  <td>
                  <div class="col-md-3"><p>Por Cuerpo de bombero: <select   class="form-control"  id="cbombero" name="cbombero">
                            <option value="0" selected >Todos</option>
                            @foreach ($cbomberos as $cbombero)
                              <option value="{{$cbombero->id}}"> {{$cbombero->nomcbombero}} </option>
                              @endforeach
                            </select></p> </div>
                    <div class="col-md-3"> <p>Por Estacion:<select class="form-control"  id="estacion" name="estacion">
                               <option value="0" selected >Todos</option>
                              @foreach ($estaciones as $estacion)
                              <option value="{{$estacion->id}}">{{$estacion->nomestacion}}</option>
                              @endforeach
                            </select></p> </div>
                            <div class="col-md-2"> <p>Por Status: <select class="form-control"  id="estatus" name="estatus">
                              <option value="0" selected >Todos</option>
                              <option value="1">Activo</option>
                              <option value="2">Egresado</option>
                              <option value="3">Suspendido</option>
                              <option value="4">Vacaciones</option>
                            </select>
                            </select></p> </div>
                  </td>
                  <td><button type="submit" class="btn btn-default">Reportar</button></td>
                </tr>
                  </form>

                <form action="/reportespersonal" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="rep2" value="2">
                <tr>
                  <td>2.</td>
                  <td>Reporte Consolidado</td>
                  <td>
                    
                  </td>
                  <td><button type="submit" class="btn btn-default">Reportar</button></td>
                </tr>
                </form>
                
                <form action="/reportespersonal" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="rep3" value="3">
                <tr>
                  <td>3.</td>
                  <td>Cron job running</td>
                  <td>
                    
                  </td>
                  <td><button type="submit" class="btn btn-default">Reportar</button></td>
                </tr>
                </form>
              </table>
            </div>
            <!-- /.box-body -->
           
          </div>
      


    </section>
    <!-- /.content -->
  

    


@endsection
@section('personal_scripts')

@endsection
