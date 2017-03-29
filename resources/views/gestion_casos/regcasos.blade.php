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
   
      <div class="row container">
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
<div class="col-xs-12 col-md-6">

 <div class="form-group">
                <label for="solicitud" class="col-md-3 control-label">Numero reg. Caso</label>
                                  <div class="col-md-7">
                                  <h5><strong>{{$numero}}</strong></h5>
                                     
                                  </div>
                         </div>


  <div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
                              <label for="fecha" class="col-md-3 control-label">Fecha del Caso</label>
                                  <div class="col-md-7">
                                  <input type="date" name="fecha" value="{{$fecha}}">
                                      @if ($errors->has('fecha'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('fecha') }}</strong>
                                      </span>
                                      @endif
                                  </div>
                         </div>



  <div class="form-group{{ $errors->has('mcbombero_id') ? ' has-error' : '' }}">
                              <label for="mcbombero_id" class="col-md-3 control-label">Cuerpo de Bombero Registrador</label>
                                  <div class="col-md-5">
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
                              <label for="estacion_id" class="col-md-3 control-label">Estacion Registrador</label>
                                  <div class="col-md-5">
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
                              <label for="emergencia_id" class="col-md-3 control-label">Tipo de Emergencia</label>
                                  <div class="col-md-5">
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
                          <label for="condicion" class="col-md-3 control-label">Condicion del Evento:</label>
                          <div class="col-md-5">
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

<div class="form-group{{ $errors->has('hora') ? ' has-error' : '' }}">
                          <label for="hora" class="col-md-3 control-label">Hora del Evento:</label>
                          <div class="col-md-5">
                           <div class="bootstrap-timepicker">
                  <div class="input-group">
                    <input type="text" class="form-control timepicker">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
              </div>
                              @if ($errors->has('hora'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('hora') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

                    <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                          <label for="estado" class="col-md-3 control-label">Estado:</label>
                          <div class="col-md-5">
                            <select class="form-control" id="estado" name="estado">
                            @foreach ($estados as $estado)
                              <option {{ old('estado')==$estado->id ? 'selected="selected"' : '' }} value="{{$estado->id}}">{{$estado->estado}}</option>
                            @endforeach 
                            </select>
                              @if ($errors->has('estado'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('estado') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>
</div>

<div class="col-xs-12 col-md-6">

                        <div class="form-group{{ $errors->has('municipio') ? ' has-error' : '' }}">
                          <label for="municipio" class="col-md-3 control-label">Municipio:</label>
                          <div class="col-md-5">
                            <input type="text" class="form-control" name="municipio" placeholder="Municipio">
                              @if ($errors->has('municipio'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('municipio') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('parroquia') ? ' has-error' : '' }}">
                          <label for="parroquia" class="col-md-3 control-label">Parroquia:</label>
                          <div class="col-md-5">
                            <input type="text" class="form-control" name="parroquia" placeholder="Parroquia">
                              @if ($errors->has('parroquia'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('parroquia') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

                          
                          <div class="form-group{{ $errors->has('bombero_id') ? ' has-error' : '' }}">
                        <label for="bombero_id" class="col-md-3 control-label">Agregar Bomberos:</label>
                        
                          
                          <div class="col-md-6">
                          <div class="input_fields_wrap">
                            <button class="btn-info">Agrega Bomberos Asociados</button> 
                            </div>
                            </div>
                              @if ($errors->has('bombero_id'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('bombero_id') }}</strong>
                                </span>
                              @endif
                        </div>

                     <div class="form-group{{ $errors->has('nro_personas') ? ' has-error' : '' }}">
                          <label for="nro_personas" class="col-md-3 control-label">Nro personas afectadas:</label>
                          <div class="col-md-5">
                            <input type="number" class="form-control" name="nro_personas" placeholder="Nro personas Afectadas">
                              @if ($errors->has('nro_personas'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('nro_personas') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

                         <div class="form-group{{ $errors->has('nro_heridos') ? ' has-error' : '' }}">
                          <label for="nro_heridos" class="col-md-3 control-label">Nro Heridos:</label>
                          <div class="col-md-5">
                            <input type="number" class="form-control" name="nro_heridos" placeholder="Nro de Heridos">
                              @if ($errors->has('nro_heridos'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('nro_heridos') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

                         <div class="form-group{{ $errors->has('nro_decesos') ? ' has-error' : '' }}">
                          <label for="nro_decesos" class="col-md-3 control-label">Nro Decesos:</label>
                          <div class="col-md-5">
                            <input type="number" class="form-control" name="nro_decesos" placeholder="Nro Decesos">
                              @if ($errors->has('nro_decesos'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('nro_decesos') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

                         <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                          <label for="descripcion" class="col-md-3 control-label">Descripcion:</label>
                          <div class="col-md-7">
                            <textarea class="form-control" rows="6" name="descripcion" placeholder="Escriba Descripcion del caso."></textarea>
                              @if ($errors->has('descripcion'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('descripcion') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

    
</div>


   <div class="form-group">
                      <div class="col-md-6 col-md-offset-6">
                          <button type="submit" class="btn btn-primary">
                              Registrar
                          </button>
                      </div>
                  </div>
  </div>
</form>


<!-- Fin Formulario -->

    </section>
    <!-- /.content -->


@endsection
@section('personal_scripts')
<script src="/js/ajax.js"></script>
<script type="text/javascript">
  
 //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
</script>

<script type="text/javascript">
$(document).ready(function() {
    var max_fields      = 8; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".btn-info"); //Add button ID
    
    var x = 0; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            input=('<div><a href="#" class="remove_field">Remover Bombero</a><input type="text" placeholder="Cedula de Bombero" class="form-control"  id="bombero_id['+x+']" name="bombero_id['+x+']"><label id="nombre['+x+']"></label>Jose</div>')
              $(wrapper).append(input); //add input box

        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
@stop