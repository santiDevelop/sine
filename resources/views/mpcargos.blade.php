@extends('layouts.app')

@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Maestro de perfil de cargos
        <small>Creacion de perfil de cargos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de perfil de cargos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row container">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/mpcargos') }}">
                                  {{ csrf_field() }}
                      <div class="form-group{{ $errors->has('numpcargo') ? ' has-error' : '' }}">
                      <label for="numpcargo" class="col-md-2 control-label">Numero Perfil de Cargo:
                      </label>
                          <div class="col-md-2">
                          <input id="numpcargo" type="text" class="form-control" placeholder="Numero Perfil de Cargo" name="numpcargo" maxlength="3" value="{{ old('numpcargo') }}" required autofocus>
                              @if ($errors->has('numpcargo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('numpcargo') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                       <div class="form-group{{ $errors->has('nompcargo') ? ' has-error' : '' }}">
                      <label for="nompcargo" class="col-md-2 control-label">Perfil de Cargo:</label>
                          <div class="col-md-6">
                          <input id="nompcargo" type="text" class="form-control" placeholder="Nombre de Perfil de Cargo" name="nompcargo" maxlength="100" value="{{ old('nompcargo') }}" required autofocus>
                              @if ($errors->has('nompcargo'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nompcargo') }}</strong>
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
