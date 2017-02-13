@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
        <h1>
        Maestro de Estaciones
        <small>Maestro de Estaciones</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de Estaciones</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
         <h1>
        Maestro de Estaciones
        <small>Maestro de Estaciones</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de Estaciones</li>
      </ol>
      </div>


    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
   
      <div class="row container">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/mestaciones') }}">
                                    {{ csrf_field() }}
                        


                         <div class="form-group{{ $errors->has('mcbombero_id') ? ' has-error' : '' }}">
                              <label for="mcbombero_id" class="col-md-2 control-label">Cuerpo de Bombero Asociado:</label>
                                  <div class="col-md-6">
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




                        <div class="form-group{{ $errors->has('numestacion') ? ' has-error' : '' }}">
                        <label for="numestacion" class="col-md-2 control-label">Numero Estacion:</label>
                            <div class="col-md-2">
                            <input id="numestacion" type="text" class="form-control" placeholder="Numero Estacion" name="numestacion" maxlength="3" value="{{ old('numestacion') }}" required autofocus>
                                @if ($errors->has('numestacion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numestacion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('nomestacion') ? ' has-error' : '' }}">
                        <label for="nomestacion" class="col-md-2 control-label">Nombre Estacion:</label>
                            <div class="col-md-6">
                            <input id="nomestacion" type="text" class="form-control" placeholder="Nombre Estacion" name="nomestacion" maxlength="100" value="{{ old('nomestacion') }}" required autofocus>
                                @if ($errors->has('nomestacion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nomestacion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group">
                      <div class="col-md-6 col-md-offset-4">
                          <button type="submit" class="btn btn-primary">
                              Registrar
                          </button>
                      </div>
                  </div>
            </form>
      </div>




    </section>
    <!-- /.content -->

@endsection
