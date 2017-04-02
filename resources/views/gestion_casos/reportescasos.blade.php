@extends('layouts.app')

@section('content') 
  <!-- Content Wrapper. Contains page content -->
 

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Reportes de Casos.
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Módulos</li>
        <li>Gestión de Casos</li>
        <li class="active">Reportes de Casos.</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        Tipos de Reporte
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Módulos</li>
        <li>Gestión Casos</li>
        <li class="active">Reportes Casos</li>
      </ol>
      </div>
    <!-- Main content -->
    <section class="content">
    <!-- Your Page Content Here -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Tipos de Reportes</h3>
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

                <form action="/reportecasos" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="rep1" value="1">
                <tr>
                  <td>1.</td>
                  <td>Reporte Detallado por tipo de evento y Fecha</td>
                  <td>
                  <div class="col-md-3"><p>Por Cuerpo de bombero: <select   class="form-control"  id="cbombero" name="cbombero">
                            <option value="0" selected >Todos</option>
                            @foreach ($cbomberos as $cbombero)
                              <option value="{{$cbombero->id}}"> {{$cbombero->nomcbombero}} </option>
                              @endforeach
                            </select></p>
                  </div>

                            <div class="col-md-3"> <p>Fecha Inicio:<input type="date" name="feini">
                            </div>
                              
                              <div class="col-md-3"> <p>Fecha Fin:<input type="date" name="fefin">
                            </div>
                           

                  </td>
                  <td><button type="submit" class="btn btn-success">Reportar</button></td>
                </tr>
                  </form>

                
                
                <form action="/reportecasos" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="rep2" value="2">
                <tr>
                  <td>2.</td>
                  <td>Reporte Necesidades de equipos - Resumen</td>
                  <td>
                    <div class="col-md-3"><p>Por Cuerpo de bombero:</p> 
                            <select class="form-control"  id="cbombero" name="cbombero">
                              <option value="0" selected >Todos</option>
                                 @foreach ($cbomberos as $cbombero)
                                  <option value="{{$cbombero->id}}"> {{$cbombero->nomcbombero}} </option>
                                   @endforeach
                            </select> </div>

                            <div class="col-md-3"> <p>Por Estacion:</p><select class="form-control"  id="estacion2" name="estacion">
                            <option value="0" selected >Todos</option> 
                            </select>
                            </div>


                  </td>
                  <td><button type="submit" class="btn btn-success">Reportar</button></td>
                </tr>
                </form>


                 <form action="/reportecasos" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="rep3" value="3">
                <tr>
                  <td>3.</td>
                  <td>Reporte Necesidades de equipos - Resumen</td>
                  <td>
                    <div class="col-md-3"><p>Por Cuerpo de bombero:</p> 
                            <select class="form-control"  id="cbombero" name="cbombero">
                              <option value="0" selected >Todos</option>
                                 @foreach ($cbomberos as $cbombero)
                                  <option value="{{$cbombero->id}}"> {{$cbombero->nomcbombero}} </option>
                                   @endforeach
                            </select> </div>

                            <div class="col-md-3"> <p>Por Estacion:</p><select class="form-control"  id="estacion2" name="estacion">
                            <option value="0" selected >Todos</option> 
                            </select>
                            </div>


                  </td>
                  <td><button type="submit" class="btn btn-success">Reportar</button></td>
                </tr>
                </form>


                 <form action="/reportecasos" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="rep2" value="2">
                <tr>
                  <td>4.</td>
                  <td>Reporte Necesidades de equipos - Resumen</td>
                  <td>
                    <div class="col-md-3"><p>Por Cuerpo de bombero:</p> 
                            <select class="form-control"  id="cbombero" name="cbombero">
                              <option value="0" selected >Todos</option>
                                 @foreach ($cbomberos as $cbombero)
                                  <option value="{{$cbombero->id}}"> {{$cbombero->nomcbombero}} </option>
                                   @endforeach
                            </select> </div>

                            <div class="col-md-3"> <p>Por Estacion:</p><select class="form-control"  id="estacion2" name="estacion">
                            <option value="0" selected >Todos</option> 
                            </select>
                            </div>


                  </td>
                  <td><button type="submit" class="btn btn-success">Reportar</button></td>
                </tr>
                </form>

                 <form action="/reportecasos" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="rep2" value="2">
                <tr>
                  <td>5.</td>
                  <td>Reporte Necesidades de equipos - Resumen</td>
                  <td>
                    <div class="col-md-3"><p>Por Cuerpo de bombero:</p> 
                            <select class="form-control"  id="cbombero" name="cbombero">
                              <option value="0" selected >Todos</option>
                                 @foreach ($cbomberos as $cbombero)
                                  <option value="{{$cbombero->id}}"> {{$cbombero->nomcbombero}} </option>
                                   @endforeach
                            </select> </div>

                            <div class="col-md-3"> <p>Por Estacion:</p><select class="form-control"  id="estacion2" name="estacion">
                            <option value="0" selected >Todos</option> 
                            </select>
                            </div>


                  </td>
                  <td><button type="submit" class="btn btn-success">Reportar</button></td>
                </tr>
                </form>
  
              <!--  <form action="/reportecasos" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="rep4" value="4">
                <tr>
                  <td>4.</td>
                  <td>Reporte Necesidades Cursos</td>
                  <td>
                     <div class="col-md-3"><p>Por Cuerpo de bombero:</p> <select   class="form-control"  id="cbombero4" name="cbombero">
                            <option value="0" selected >Todos</option>
                            @foreach ($cbomberos as $cbombero)
                              <option value="{{$cbombero->id}}"> {{$cbombero->nomcbombero}} </option>
                              @endforeach
                            </select> </div>
                    <div class="col-md-3"> <p>Por Estacion:</p><select class="form-control"  id="estacion4" name="estacion">
                            <option value="0" selected >Todos</option> 
                            </select>
                            </div>

                            <div class="col-md-3"> <p>Por status:</p>
                            <select class="form-control"  id="status" name="status">
                              <option value="0">Todos</option>
                              <option value="1">Solicitud</option>
                              <option value="2">Visto</option>
                              <option value="3">Procesado</option>
                            </select>
                            </div>
                  </td>
                  <td><button type="submit" class="btn btn-success">Reportar</button></td>
                </tr>
                </form>
                -->
              
              </table>
            </div>
            <!-- /.box-body -->
           
          </div>
      


    </section>
    <!-- /.content -->
  

    


@endsection
@section('personal_scripts')
<script src="/js/ajax.js"></script>
@endsection
