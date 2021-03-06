@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
        <h1>
        Registro de bomberos
        <small>Formulario de registro de bomberos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Módulos</li>
        <li>Gestión humana</li>
        <li>Administración de Personal</li>
        <li class="active">Registro de Personal</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
          <h1>
        Registro de Bomberos
        <small>Formulario de registro de bomberos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li><a href="#">Módulos</a></li>
        <li><a href="#">Gestión humana</a></li>
        <li>Administración de Personal</li>
        <li class="active">Registro de Personal</li>
      </ol>
      </section>
      </div>


    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
   
      <div class="row container">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/regbombero') }}">
                                    {{ csrf_field() }}
               
                  <div class="col-xs-12 col-md-6">
                  <div class="icon-tittle">
                    <h3><i class="fa fa-address-card-o"></i> Información Personal</h3>
                  </div>
                      
                    

                      <div class="form-group{{ $errors->has('nombombero') ? ' has-error' : '' }}">
                        <label for="nombombero" class="col-md-3 control-label">Nombre:</label>
                        <div class="col-md-7">
                          <input id="nombombero" type="text" class="form-control" placeholder="Nombre" name="nombombero" maxlength="100" value="{{ old('nombombero') }}" required autofocus>
                            @if ($errors->has('nombombero'))
                              <span class="help-block">
                                <strong>{{ $errors->first('nombombero') }}</strong>
                              </span>
                            @endif
                        </div>
                      </div>

                       <div class="form-group{{ $errors->has('apebombero') ? ' has-error' : '' }}">
                        <label for="apebombero" class="col-md-3 control-label">Apellido:</label>
                        <div class="col-md-7">
                          <input id="apebombero" type="text" class="form-control" placeholder="Apellido" name="apebombero" maxlength="100" value="{{ old('apebombero') }}" required autofocus>
                            @if ($errors->has('apebombero'))
                              <span class="help-block">
                                <strong>{{ $errors->first('apebombero') }}</strong>
                              </span>
                            @endif
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('cedbombero') ? ' has-error' : '' }}">
                        <label for="cedbombero" class="col-md-3 control-label">Cédula:</label>
                        <div class="col-md-2">
                          <select name="nacionalidad" id="nacionalidad" class="form-control">
                            <option value="Venezolana">V</option>
                            <option value="Extranjera">E</option>
                          </select>
                        </div>
                        <div class="col-md-5">
                          <input id="cedbombero" type="text" class="form-control" placeholder="Cédula" name="cedbombero" maxlength="8" value="{{ old('cedbombero') }}" required autofocus>
                            @if ($errors->has('cedbombero'))
                              <span class="help-block">
                                <strong>{{ $errors->first('cedbombero') }}</strong>
                              </span>
                            @endif
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('fnacimiento') ? ' has-error' : '' }}">
                        <label for="fnacimiento" class="col-md-3 control-label">Fecha de nacimiento:</label>
                        <div class="col-md-7">
                          <input id="fnacimiento" type="date" class="form-control" name="fnacimiento" value="{{ old('fnacimiento') }}" required autofocus>
                            @if ($errors->has('fnacimiento'))
                              <span class="help-block">
                                <strong>{{ $errors->first('fnacimiento') }}</strong>
                              </span>
                            @endif
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('lnacimiento') ? ' has-error' : '' }}">
                        <label for="lnacimiento" class="col-md-3 control-label">Lugar de nacimiento:</label>
                        <div class="col-md-7">
                          <input id="lnacimiento" type="text" class="form-control" placeholder="Estado y Municipio" name="lnacimiento" maxlength="100" value="{{ old('lnacimiento') }}" required autofocus>
                            @if ($errors->has('lnacimiento'))
                              <span class="help-block">
                                <strong>{{ $errors->first('lnacimiento') }}</strong>
                              </span>
                            @endif
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('sexo') ? ' has-error' : '' }}">
                        <label for="sexo" class="col-md-3 control-label">Genero:</label>
                        <div class="col-md-7">
                          <select class="form-control" id="sexo" name="sexo">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                          </select>
                            @if ($errors->has('sexo'))
                              <span class="help-block">
                                <strong>{{ $errors->first('sexo') }}</strong>
                              </span>
                            @endif
                        </div>
                      </div>

                        <div class="form-group{{ $errors->has('ecivil') ? ' has-error' : '' }}">
                          <label for="ecivil" class="col-md-3 control-label">Estado civil:</label>
                          <div class="col-md-7">
                            <select class="form-control" id="ecivil" name="ecivil">
                              <option value="Soltero">Soltero</option>
                              <option value="Casado">Casado</option>
                              <option value="Divorciado">Divorciado</option>
                              <option value="Viudo">Viudo</option>
                            </select>
                              @if ($errors->has('ecivil'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('ecivil') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

                      <div class="form-group{{ $errors->has('nhijos') ? ' has-error' : '' }}">
                        <label for="nhijos" class="col-md-3 control-label">Número de hijos:</label>
                        <div class="col-md-2">
                          <input id="nhijos" type="number" placeholder="0" maxlength="2" class="form-control" name="nhijos" value="{{ old('nhijos') }}" required autofocus>
                            @if ($errors->has('nhijos'))
                              <span class="help-block">
                                <strong>{{ $errors->first('nhijos') }}</strong>
                              </span>
                            @endif
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('telbombero') ? ' has-error' : '' }}">
                        <label for="telbombero" class="col-md-3 control-label">Teléfono:</label>
                        <div class="col-md-7">
                          <input id="telbombero" type="tel" class="form-control" placeholder="Teléfono" name="telbombero" maxlength="11" value="{{ old('telbombero') }}" required autofocus>
                            @if ($errors->has('telbombero'))
                              <span class="help-block">
                                <strong>{{ $errors->first('telbombero') }}</strong>
                              </span>
                            @endif
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('correoelec') ? ' has-error' : '' }}">
                        <label for="correoelec" class="col-md-3 control-label">Correo electrónico:</label>
                        <div class="col-md-7">
                          <input id="correoelec" type="email" class="form-control" placeholder="ejemplo@dominio.com" name="correoelec" maxlength="100" value="{{ old('correoelec') }}" required autofocus>
                            @if ($errors->has('correoelec'))
                              <span class="help-block">
                                <strong>{{ $errors->first('correoelec') }}</strong>
                              </span>
                            @endif
                        </div>
                      </div>

                       <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                          <label for="estado" class="col-md-3 control-label">Estado:</label>
                          <div class="col-md-7">
                            <select class="form-control" id="estado" name="estado">
                            @foreach ($estados as $estado)
                              <option value="{{$estado->id}}">{{$estado->estado}}</option>
                            @endforeach 
                            </select>
                              @if ($errors->has('estado'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('estado') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>


                      <div class="form-group{{ $errors->has('dirbombero') ? ' has-error' : '' }}">
                        <label for="dirbombero" class="col-md-3 control-label">Dirección:</label>
                        <div class="col-md-7">
                          <input id="dirbombero" type="text" class="form-control" placeholder="Avenida, calle, parroquia, edificio, casa, piso, numero" name="dirbombero" maxlength="250" value="{{ old('dirbombero') }}" required autofocus>
                            @if ($errors->has('dirbombero'))
                              <span class="help-block">
                                <strong>{{ $errors->first('dirbombero') }}</strong>
                              </span>
                            @endif
                        </div>
                      </div>

                      <div class="form-group">
                          <label for="talla" class="col-md-3 control-label">Tallas:</label>
                          <div class="col-md-2">
                            <select class="form-control" id="tcamisa" name="tcamisa">
                              <option selected="Seleccione" value="0">Camisa</option>
                              <option value="XS" {{ old('tcamisa')=='XS' ? 'selected="selected"' : '' }} >XS</option>
                              <option value="S" {{ old('tcamisa')=='S' ? 'selected="selected"' : '' }} >S</option>
                              <option value="M" {{ old('tcamisa')=='M' ? 'selected="selected"' : '' }} >M</option>
                              <option value="L" {{ old('tcamisa')=='L' ? 'selected="selected"' : '' }} >L</option>
                              <option value="XL" {{ old('tcamisa')=='XL' ? 'selected="selected"' : '' }} >XL</option>
                              <option value="XXL" {{ old('tcamisa')=='XXL' ? 'selected="selected"' : '' }} >XXL</option>
                              <option value="XXXL" {{ old('tcamisa')=='XXXL' ? 'selected="selected"' : '' }} >XXXL</option>
                            </select>
                          </div>
                          <div class="col-md-2">
                            <select class="form-control" id="tpantalon" name="tpantalon">
                              <option selected="Seleccione" value="0">Pantalón</option>
                              <option value="XS" {{ old('tpantalon')=='XS' ? 'selected="selected"' : '' }} >XS</option>
                              <option value="S" {{ old('tpantalon')=='S' ? 'selected="selected"' : '' }} >S</option>
                              <option value="M" {{ old('tpantalon')=='M' ? 'selected="selected"' : '' }} >M</option>
                              <option value="L" {{ old('tpantalon')=='L' ? 'selected="selected"' : '' }} >L</option>
                              <option value="XL" {{ old('tpantalon')=='XL' ? 'selected="selected"' : '' }} >XL</option>
                              <option value="XXL" {{ old('tpantalon')=='XXL' ? 'selected="selected"' : '' }} >XXL</option>
                              <option value="XXXL" {{ old('tpantalon')=='XXXL' ? 'selected="selected"' : '' }} >XXXL</option>
                            </select>
                          </div>
                          <div class="col-md-2">
                            <select class="form-control" id="tcalzado" name="tcalzado">
                              <option selected="Seleccione" value="0">Calzado</option>
                              <option value="4" {{ old('tcalzado')=='4' ? 'selected="selected"' : '' }} >4</option>
                              <option value="5" {{ old('tcalzado')=='5' ? 'selected="selected"' : '' }} >5</option>
                              <option value="6" {{ old('tcalzado')=='6' ? 'selected="selected"' : '' }} >6</option>
                              <option value="7" {{ old('tcalzado')=='7' ? 'selected="selected"' : '' }} >7</option>
                              <option value="8" {{ old('tcalzado')=='8' ? 'selected="selected"' : '' }} >8</option>
                              <option value="9" {{ old('tcalzado')=='9' ? 'selected="selected"' : '' }} >9</option>
                              <option value="10" {{ old('tcalzado')=='10' ? 'selected="selected"' : '' }} >10</option>
                              <option value="11" {{ old('tcalzado')=='11' ? 'selected="selected"' : '' }} >11</option>
                            </select>
                          </div>
                        </div>
                    </div>
                  
                  <div class="col-xs-12 col-md-6">
                  <div class="icon-tittle2">
                    <h3><i class="fa fa-university"></i> Información Académica</h3>
                    </div>
                       <div class="form-group{{ $errors->has('profesion') ? ' has-error' : '' }}">
                          <label for="profesion" class="col-md-3 control-label">Profesión:</label>
                          <div class="col-md-6">
                            <select class="form-control" id="profesion" name="profesion">
                            @foreach($profesiones as $profesion)
                              <option value="{{$profesion->id}}">{{$profesion->profesion}}</option>
                            @endforeach
                            </select>
                              @if ($errors->has('profesion'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('profesion') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('nacademico') ? ' has-error' : '' }}">
                          <label for="nacademico" class="col-md-3 control-label">Nivel académico:</label>
                          <div class="col-md-6">
                            <select class="form-control" id="nacademico" name="nacademico">
                              <option value="Ninguno">Ninguno</option>
                              <option value="Primaria">Primaria</option>
                              <option value="Bachiller">Bachiller</option>
                              <option value="Técnico Superior">Técnico Superior</option>
                              <option value="Universitario">Universitario</option>
                              <option value="Maestría">Maestría</option>
                              <option value="PostGrado">PostGrado</option>
                              <option value="Doctorado">Doctorado</option>
                            </select>
                              @if ($errors->has('nacademico'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('nacademico') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('ultitulo') ? ' has-error' : '' }}">
                          <label for="ultitulo" class="col-md-3 control-label">Ultimo título obtenido:</label>
                          <div class="col-md-6">
                            <select class="form-control" id="ultitulo" name="ultitulo">
                              <option value="Ninguno">Ninguno</option>
                              <option value="Bachiller">Bachiller</option>
                              <option value="Licenciado">Licenciado</option>
                              <option value="Ingeniero">Ingeniero</option>
                              <option value="Master">Master</option>
                            </select>
                              @if ($errors->has('ultitulo'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('ultitulo') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('egresado') ? ' has-error' : '' }}">
                          <label for="egresado" class="col-md-3 control-label">Egresado de:</label>
                          <div class="col-md-6">
                           <input type="text" maxlength="100" class="form-control" name="egresado" placeholder="Universidad - Instituto" value="{{ old('egresado') }}">
                              @if ($errors->has('egresado'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('egresado') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('cursos') ? ' has-error' : '' }}">
                        <label for="cursos" class="col-md-3 control-label">Cursos:</label>
                        
                          
                          <div class="col-md-6">
                          <div class="input_fields_wrap">
                            <button class="btn-info">Agrega mas Cursos</button>
                             
                            </div>
                            </div>
                              @if ($errors->has('cursos'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('cursos') }}</strong>
                                </span>
                              @endif
                          
                          
                        </div>

                        
                    <div class="icon-tittle3">
                    <h3><i class="fa fa-fire-extinguisher"></i> Información Profesional</h3>
                    </div>
                      <div class="form-group{{ $errors->has('rango') ? ' has-error' : '' }}">
                          <label for="rango" class="col-md-3 control-label">Rango:</label>
                          <div class="col-md-6">
                            <select class="form-control"  id="rango" name="rango">
                              @foreach ($rangos as $rango)
                              <option value="{{$rango->id}}">{{$rango->rango}}</option>
                            @endforeach 
                             
                            </select>
                              @if ($errors->has('rango'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('rango') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
                          <label for="cargo" class="col-md-3 control-label">Cargo:</label>
                          <div class="col-md-6">
                            <select class="form-control"  id="cargo" name="cargo">
                              @foreach ($cargos as $cargo)
                              <option value="{{$cargo->id}}"> {{$cargo->cargo}} </option>
                              @endforeach
                            </select>
                              @if ($errors->has('cargo'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('cargo') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

                      <div class="form-group{{ $errors->has('feingreso') ? ' has-error' : '' }}">
                        <label for="feingreso" class="col-md-3 control-label">Fecha de ingreso:</label>
                        <div class="col-md-6">
                          <input id="feingreso" type="date" class="form-control" name="feingreso" value="{{ old('feingreso') }}" required autofocus>
                            @if ($errors->has('feingreso'))
                              <span class="help-block">
                                <strong>{{ $errors->first('feingreso') }}</strong>
                              </span>
                            @endif
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('proximoascenso') ? ' has-error' : '' }}">
                        <label for="proximoascenso" class="col-md-3 control-label">Estimado próximo ascenso:</label>
                        <div class="col-md-6">
                          <input id="proximoascenso" type="date" class="form-control" name="proximoascenso" value="{{ old('proximoascenso') }}" required autofocus>
                            @if ($errors->has('proximoascenso'))
                              <span class="help-block">
                                <strong>{{ $errors->first('proximoascenso') }}</strong>
                              </span>
                            @endif
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('cbombero') ? ' has-error' : '' }}">
                          <label for="cbombero" class="col-md-3 control-label">Cuerpo de bombero:</label>
                          <div class="col-md-6">
                            <select class="form-control"  id="cbombero" name="cbombero">
                            @foreach ($cbomberos as $cbombero)
                              <option value="{{$cbombero->id}}"> {{$cbombero->nomcbombero}} </option>
                              @endforeach
                            </select>
                              @if ($errors->has('cbombero'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('cbombero') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

                        

                        <div class="form-group{{ $errors->has('estacion') ? ' has-error' : '' }}">
                          <label for="estacion" class="col-md-3 control-label">Estación:</label>
                          <div class="col-md-6">
                            <select class="form-control"  id="estacion" name="estacion">
                              @foreach ($estaciones as $estacion)
                              <option value="{{$estacion->id}}">{{$estacion->nomestacion}}</option>
                              @endforeach
                            </select>
                              @if ($errors->has('estacion'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('estacion') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('estatus') ? ' has-error' : '' }}">
                          <label for="estatus" class="col-md-3 control-label">Estatus:</label>
                          <div class="col-md-6">
                            <select class="form-control"  id="estatus" name="estatus">
                              <option value="Activo">Activo</option>
                              <option value="Egresado">Egresado</option>
                              <option value="Suspendido">Suspendido</option>
                              <option value="Vacaciones">Vacaciones</option>
                            </select>
                              @if ($errors->has('estatus'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('estatus') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>


                  </div>

        </div>
        <div class="row">
                        
                         <div class="form-group">
                      <div class="col-md-6 col-md-offset-6">
                          <button type="submit" class="btn btn-primary">
                              Registrar
                          </button>
                      </div>
                  </div>
            </form>
      </div>




    </section>
    <!-- /.content -->

@stop
@section('personal_scripts')

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
            input=('<div><a href="#" class="remove_field">Remover Curso</a><select class="form-control"  id="curso" name="curso['+x+']"> @foreach ($cursos as $curso) <option value="{{$curso->id}}">{{$curso->nomcurso}}</option>@endforeach</div>')
              $(wrapper).append(input); //add input box

        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
<script type="text/javascript">
$('select').click(function () {
  $('option[selected="Seleccione"]', this).remove();
});
</script>
@stop

