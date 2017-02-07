@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
        <h1>
        Maestro de tipos de equipamiento
        <small>Creacion de tipos de equipamiento</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de tipos de equipamiento</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
        <h1>
        Maestro de tipos de equipamiento
        <small>Creacion de tipos de equipamiento</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de tipos de equipamiento</li>
      </ol>
      </div>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
  <div class="row container">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/mtequipos') }}">
                                  {{ csrf_field() }}
                      <div class="form-group{{ $errors->has('numtipequip') ? ' has-error' : '' }}">
                      <label for="numtipequip" class="col-md-2 control-label">Numero tipo de equipamiento:
                      </label>
                          <div class="col-md-2">
                          <input id="numtipequip" type="text" class="form-control" placeholder="Numero tipo de equipamiento" name="numtipequip" maxlength="3" value="{{ old('numtipequip') }}" required autofocus>
                              @if ($errors->has('numtipequip'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('numtipequip') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                       <div class="form-group{{ $errors->has('nomtipequip') ? ' has-error' : '' }}">
                      <label for="nomtipequip" class="col-md-2 control-label">Nombre tipo de equipamiento:</label>
                          <div class="col-md-6">
                          <input id="nomtipequip" type="text" class="form-control" placeholder="Nombre tipo de equipamiento" name="nomtipequip" maxlength="100" value="{{ old('nomtipequip') }}" required autofocus>
                              @if ($errors->has('nomtipequip'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nomtipequip') }}</strong>
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
