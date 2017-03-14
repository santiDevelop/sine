@extends('layouts.app2')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
          
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Registro de necesidades de Equipos y Herramientas
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Registro de necesidades de Equipos y Herramientas</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
      <h1>
        Registro de Necesidades
        <small>Formulario para registrar necesidades</small>
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

  <div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
                              <label for="fecha" class="col-md-2 control-label">Fecha de Solicitud</label>
                                  <div class="col-md-4">
                                  <input type="date" name="fecha" value="{{$fecha}}">
                                      @if ($errors->has('fecha'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('fecha') }}</strong>
                                      </span>
                                      @endif
                                  </div>
                         </div>



  <div class="form-group{{ $errors->has('mcbombero_id') ? ' has-error' : '' }}">
                              <label for="mcbombero_id" class="col-md-2 control-label">Cuerpo de Bombero Solicitante</label>
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
                              <label for="estacion_id" class="col-md-2 control-label">Estacion Solicitante</label>
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

   <div class="form-group{{ $errors->has('tipequip_id') ? ' has-error' : '' }}">
                              <label for="tipequip_id" class="col-md-2 control-label">Tipo Equipamiento a Solicitar</label>
                                  <div class="col-md-4">
                                  <select class="form-control" id="tipequip_id" name="tipequip_id" required>
                                  <option value='0'>--Seleccione--</option>
                                                @foreach ($tipo as $t)
                                            <option value="{{$t->id}}">{{$t->nomtipequip}}</option>
                                            @endforeach
                                        </select>
                                      @if ($errors->has('tipequip_id'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('tipequip_id') }}</strong>
                                      </span>
                                      @endif
                                       @if(session('problema')) 
                                      <span class="help-block">
                                          <strong>{{session('problema')}}</strong>
                                      </span>
                                      @endif
                                  </div>
       </div>


  <div class="form-group{{ $errors->has('estatusolicitud') ? ' has-error' : '' }}">
                          <label for="estatusolicitud" class="col-md-2 control-label">Estatus:</label>
                          <div class="col-md-2">
                            <select @if(auth()->user()->typeuser!='1') {{"disabled"}} @endif class="form-control" id="estatusolicitud" name="estatusolicitud">
                              <option value="1">Solicitud</option>
                              <option value="2">Visto</option>
                              <option value="3">Procesado</option>
                            </select>
                              @if ($errors->has('estatusolicitud'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('estatusolicitud') }}</strong>
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
                  <th width="40%">Equipo Solicitado</th>
                  <th width="25%">Cantidad Solicitada</th>
                  <th >Observación</th>
                </tr>
                </thead>
                <tbody class="lista-tipo2">
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
<script src="/js/ajax.js?8"></script>
@stop