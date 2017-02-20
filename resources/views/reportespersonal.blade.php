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
              <h3 class="box-title">Bordered Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th style="width: 150px">Reporte</th>
                  <th>Parametros</th>
                  <th style="width: 40px">Label</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Reporte Detallado Personal</td>
                  <td>
                  <div class="col-md-3"><p>Por Cuerpo de bombero: <select   class="form-control"  id="cbombero" name="cbombero">
                            @foreach ($cbomberos as $cbombero)
                              <option value="{{$cbombero->id}}"> {{$cbombero->nomcbombero}} </option>
                              @endforeach
                            </select></p> </div>
                    <div class="col-md-3"> <p>Por Estacion:<select class="form-control"  id="estacion" name="estacion">
                              @foreach ($estaciones as $estacion)
                              <option value="{{$estacion->id}}">{{$estacion->nomestacion}}</option>
                              @endforeach
                            </select></p> </div>
                  </td>
                  <td><button class="btn btn-default">Reportar</button></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Reporte Consolidado</td>
                  <td>
                    
                  </td>
                  <td><button class="btn btn-default">Reportar</button></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Cron job running</td>
                  <td>
                    
                  </td>
                  <td><button class="btn btn-default">Reportar</button></td>
                </tr>
                
              </table>
            </div>
            <!-- /.box-body -->
           
          </div>
      


    </section>
    <!-- /.content -->
  

    


@endsection
@section('personal_scripts')

@endsection
