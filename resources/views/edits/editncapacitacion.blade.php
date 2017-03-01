@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
        <h1>
        Solicitud de Capacitación
        <small>Formulario para solicitar Capacitación</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Módulos</li>
        <li>Gestión humana</li>
        <li class="active">Solicitud de Capacitación</li>
      </ol>
      </section>
      </div>
      
 
    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
         <h1>
        Solicitud de Capacitación
        <small>Formulario para solicitar Capacitación</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Módulos</li>
        <li>Gestión humana</li>
        <li class="active">Solicitud de Capacitación</li>
      </ol>
      </section>
      </div>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
   
      <div class="row container">
            <form class="form-horizontal" role="form" method="POST" action="">
                                    {{ csrf_field() }}
                

                <div class="form-group{{ $errors->has('cbombero') ? ' has-error' : '' }}">
                          <label for="cbombero" class="col-md-2 control-label">Cuerpo de bombero:</label>
                          <div class="col-md-6">
                            <select  disabled class="form-control"  id="cbombero" name="cbombero">
                            @foreach ($nc as $n)
                              <option value="{{$n->id}}"> {{$n->nomcbombero}} </option>
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
                          <label for="estacion" class="col-md-2 control-label">Estación:</label>
                          <div class="col-md-6">
                            <select class="form-control" disabled id="estacion" name="estacion">
                              @foreach ($nc as $n)
                              <option value="{{$n->id}}">{{$n->nomestacion}}</option>
                              @endforeach
                            </select>
                              @if ($errors->has('estacion'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('estacion') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>


                        <div class="form-group{{ $errors->has('scurso') ? ' has-error' : '' }}">
                        <label for="scurso" class="col-md-2 control-label">Curso:</label>
                        <div class="col-md-3">
                          <select class="form-control" disabled name="scurso" value="{{ old('scurso') }} id="scurso" autofocus>
                          @foreach ($nc as $n)
                            <option value="{{$n->id}}">{{$n->nomcurso}}</option>
                          @endforeach
                          </select>
                            @if ($errors->has('scurso'))
                              <span class="help-block">
                                <strong>{{ $errors->first('scurso') }}</strong>
                              </span>
                            @endif
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('cantparti') ? ' has-error' : '' }}">
                        <label for="cantparti" class="col-md-2 control-label">Cantidad de participantes:</label>
                        <div class="col-md-2">
                          <input id="cantparti" type="number" disabled class="form-control" placeholder="0" name="cantparti" value="{{ $n->cantidad }}" required autofocus>
                            @if ($errors->has('cantparti'))
                              <span class="help-block">
                                <strong>{{ $errors->first('cantparti') }}</strong>
                              </span>
                            @endif
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('fesolicitud') ? ' has-error' : '' }}">
                        <label for="fesolicitud" class="col-md-2 control-label">Fecha de solicitud:</label>
                        <div class="col-md-2">
                          <input id="fesolicitud" type="date" disabled class="form-control"  name="fesolicitud" value="{{ $n->fesolicitud }}" required autofocus>
                            @if ($errors->has('fesolicitud'))
                              <span class="help-block">
                                <strong>{{ $errors->first('fesolicitud') }}</strong>
                              </span>
                            @endif
                        </div>
                      </div>

                       <div class="form-group{{ $errors->has('observaciones') ? ' has-error' : '' }}">
                        <label for="observaciones" class="col-md-2 control-label">Observaciones:</label>
                        <div class="col-md-6">
                          <textarea class="form-control" rows="3"  disabled name="observaciones" maxlength="250"  required autofocus>{{ $n->observaciones }}</textarea>
                            @if ($errors->has('observaciones'))
                              <span class="help-block">
                                <strong>{{ $errors->first('observaciones') }}</strong>
                              </span>
                            @endif
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('estatusolicitud') ? ' has-error' : '' }}">
                          <label for="estatusolicitud" class="col-md-2 control-label">Estatus:</label>
                          <div class="col-md-2">
                            <select @if(auth()->user()->typeuser!='1') {{"disabled"}} @endif class="form-control" id="estatusolicitud" name="estatusolicitud">
                              <option @if($n->estatusolicitud==1) {{'selected'}} @endif value="1">Solicitud</option>
                              <option @if($n->estatusolicitud==2) {{'selected'}} @endif value="2">Visto</option>
                              <option @if($n->estatusolicitud==3) {{'selected'}} @endif value="3">Procesado</option>
                            </select>
                              @if ($errors->has('estatusolicitud'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('estatusolicitud') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

                  
                         <div class="form-group">
                      <div class="col-md-6 col-md-offset-4">
                          <button type="submit" class="btn btn-primary">
                              Solicitar
                          </button>
                      </div>
                  </div>
            </form>
      </div>




    </section>
    <!-- /.content -->

@endsection
