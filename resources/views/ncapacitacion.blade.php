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
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/regbombero') }}">
                                    {{ csrf_field() }}
               
                        <div class="form-group{{ $errors->has('scurso') ? ' has-error' : '' }}">
                        <label for="scurso" class="col-md-2 control-label">Curso:</label>
                        <div class="col-md-6">
                          <input id="scurso" type="text" class="form-control" placeholder="Nombre del curso" name="scurso" maxlength="100" value="{{ old('scurso') }}" required autofocus>
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
                          <input id="cantparti" type="number" class="form-control" placeholder="1" name="cantparti" value="{{ old('cantparti') }}" required autofocus>
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
                          <input id="fesolicitud" type="date" class="form-control"  name="fesolicitud" value="{{ old('fesolicitud') }}" required autofocus>
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
                          <input id="observaciones" type="text" class="form-control" placeholder="Observaciones" name="observaciones" maxlength="250" value="{{ old('observaciones') }}" required autofocus>
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
                            <select class="form-control" id="estatusolicitud">
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
