@extends('layouts.app2')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
          
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Registro de Casos
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Registro de Casos</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
      <h1>
        Registro de Casos
        <small>Formulario para Registro de Casos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Registro de Casos</li>
        <li>Registro</li>
        <li class="active">Casos o eventos</li>
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
                <label for="solicitud" class="col-md-2 control-label">Numero reg. Caso</label>
                                  <div class="col-md-2">
                                  <h5><strong>{{$numero}}</strong></h5>
                                     
                                  </div>
                         </div>


  <div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
                              <label for="fecha" class="col-md-2 control-label">Fecha del Caso</label>
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

   <div class="form-group{{ $errors->has('emergencia_id') ? ' has-error' : '' }}">
                              <label for="emergencia_id" class="col-md-2 control-label">Tipo de Emergencia</label>
                                  <div class="col-md-4">
                                  <select class="form-control" id="emergencia_id" name="emergencia_id" required>
                                  <option value='0'>--Seleccione--</option>
                                                @foreach ($tipo as $t)
                                            <option value="{{$t->id}}">{{$t->nomcatemerg}}</option>
                                            @endforeach
                                        </select>
                                      @if ($errors->has('emergencia_id'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('emergencia_id') }}</strong>
                                      </span>
                                      @endif
                                       @if(session('problema')) 
                                      <span class="help-block">
                                          <strong>{{session('problema')}}</strong>
                                      </span>
                                      @endif
                                  </div>
       </div>


  <div class="form-group{{ $errors->has('condicion') ? ' has-error' : '' }}">
                          <label for="condicion" class="col-md-2 control-label">Condicion del Evento:</label>
                          <div class="col-md-2">
                            <select @if(auth()->user()->typeuser!='1') {{"disabled"}} @endif class="form-control" id="condicion" name="condicion">
                              <option value="1">Atendido</option>
                              <option value="2">Rechazado</option>
                              <option value="3">Transferido</option>
                            </select>
                              @if ($errors->has('condicion'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('condicion') }}</strong>
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
                  <th >Hora del Caso</th>
                  <th >Estado</th>
                  <th >Municipio</th>
                  <th >Parroquia</th>
                  <th >Atendido por: Bombero</th>
                  <th >Nro. personas</th>
                  <th >Nro. de Heridos</th>
                  <th >Nro. de Decesos</th>
                  <th>Descripcion</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><input type="time" name="hora"></td>
                  <td><select class="form-control" id="estado" name="estado">
                            @foreach ($estados as $estado)
                              <option {{ old('estado')==$estado->id ? 'selected="selected"' : '' }} value="{{$estado->id}}">{{$estado->estado}}</option>
                            @endforeach 
                            </select>
                  </td>
                  <td><input type="text" name="municipio"></td>
                  <td><input type="text" name="parroquia"></td>
                  <td>Cedula bombero</td>
                  <td><input type="text" name="nro_personas"></td>
                  <td><input type="text" name="nro_heridos"></td>
                  <td><input type="text" name="nro_decesos"></td>
                  <td><input type="text" name="descripcion"></td>
                </tr>
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