@extends('layouts.app2')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
          
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Registro de Equipos y Herramientas
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Registro</li>
        <li class="active">Equipos y Herramientas</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
      <h1>
        Registro de Equipos y Herramientas
        <small>Formulario para registrar Equipos y Herramientas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Registro</li>
        <li class="active">Equipos y Herramientas</li>
      </ol>
      </section>
      </div>


    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

<!-- Formulario de registro -->
<form class="form-horizontal" role="form" method="POST" action="">
            {{ csrf_field() }}
            

 @if($errors->any())
 <div class="alert alert-danger">
 @foreach ($errors->all() as $error) 
  <strong> * {{$error}}<br> </strong>
  @endforeach
</div>
@endif

 <div class="form-group">
                <label for="solicitud" class="col-md-2 control-label">Numero de Solicitud</label>
                                  <div class="col-md-2">
                                  <h5><strong>{{$numero}}</strong></h5>
                                     
                                  </div>
                         </div>

                         
  <div class="form-group{{ $errors->has('mcbombero_id') ? ' has-error' : '' }}">
                              <label for="mcbombero_id" class="col-md-2 control-label">Cuerpo de Bombero Registrador</label>
                                  <div class="col-md-4">
                                  <select class="form-control" id="mcbombero_id" name="mcbombero_id" required>
                                                @foreach ($mcbomberos as $mcbombero)
                                                @if($mcbombero->id == auth()->user()->cbombero)
                                            <option value="{{$mcbombero->id}}">{{$mcbombero->nomcbombero}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                      @if ($errors->has('mcbombero_id'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('mcbombero_id') }}</strong>
                                      </span>
                                      @endif
                                  </div>
                         </div>


   <div class="form-group{{ $errors->has('estacion_id') ? ' has-error' : '' }}">
                              <label for="estacion_id" class="col-md-2 control-label">Estacion Registrador</label>
                                  <div class="col-md-4">
                                  <select class="form-control" id="estacion_id" name="estacion_id" required>
                                                @foreach ($estaciones as $estacion)
                                            <option value="{{$estacion->id}}">{{$estacion->nomestacion}}</option>
                                            @endforeach
                                        </select>
                                      @if ($errors->has('estacion_id'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('estacion_id') }}</strong>
                                      </span>
                                      @endif
                                  </div>
       </div>

   <div class="form-group{{ $errors->has('tipo_id') ? ' has-error' : '' }}">
                              <label for="tipo_id" class="col-md-2 control-label">Tipo Equipamiento a Registrar</label>
                                  <div class="col-md-4">
                                  <select class="form-control" id="tipo_id" name="tipo_id" required>
                                  <option value='0'>--Seleccione--</option>
                                                @foreach ($tipo as $t)
                                            <option value="{{$t->id}}">{{$t->nomtipequip}}</option>
                                            @endforeach
                                        </select>
                                      @if ($errors->has('tipo_id'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('tipo_id') }}</strong>
                                      </span>
                                      @endif
                                       @if(session('problema')) 
                                      <span class="help-block">
                                          <strong>{{session('problema')}}</strong>
                                      </span>
                                      @endif
                                  </div>
       </div>

    <div class="box">
          
            <!-- /.box-header -->
            <div class="table-responsive">
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>Elemeto</th>
                  <th>Cant. total</th>
                  <th>Cant. Optimas</th>
                  <th>Cant. Deteriorado</th>
                  <th>Cant. Fuera de Servicio</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Serial Fabrica</th>
                  <th>Observación</th>
                </tr>
                </thead>
                <tbody class="lista-tipo">
                </tbody>
               
              </table>
               </div>
            </div>
            <!-- /.box-body -->
         
          <!-- /.box -->

</div>
  <div class="form-group">
    <div class="col-xs-offset-6">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
  </div>
  
</form>


<!-- Fin Formulario -->

    </section>
    <!-- /.content -->


@endsection
@section('personal_scripts')
<script src="/js/ajax.js"></script>
@stop