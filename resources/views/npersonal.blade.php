@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
        <h1>
        Solicitud de personal
        <small>Formulario para solicitar personal</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Módulos</li>
        <li>Gestión humana</li>
        <li class="active">Solicitud de personal</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
         <h1>
        Solicitud de personal
        <small>Formulario para solicitar personal</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Módulos</li>
        <li>Gestión humana</li>
        <li class="active">Solicitud de personal</li>
      </ol>
      </section>
      </div>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
   
      <div class="row container">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/regbombero') }}">
                                    {{ csrf_field() }}
               
                        <div class="form-group{{ $errors->has('cvacante') ? ' has-error' : '' }}">
                        <label for="cvacante" class="col-md-2 control-label">Cargo vacante:</label>
                        <div class="col-md-6">
                          <input id="cvacante" type="text" class="form-control" placeholder="Cargo vacante" name="cvacante" maxlength="100" value="{{ old('cvacante') }}" required autofocus>
                            @if ($errors->has('cvacante'))
                              <span class="help-block">
                                <strong>{{ $errors->first('cvacante') }}</strong>
                              </span>
                            @endif
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('cvacantecant') ? ' has-error' : '' }}">
                        <label for="cvacantecant" class="col-md-2 control-label">Cantidad:</label>
                        <div class="col-md-2">
                          <input id="cvacantecant" type="number" class="form-control" placeholder="1" name="cvacantecant" value="{{ old('cvacantecant') }}" required autofocus>
                            @if ($errors->has('cvacantecant'))
                              <span class="help-block">
                                <strong>{{ $errors->first('cvacantecant') }}</strong>
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
