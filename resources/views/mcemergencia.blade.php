@extends('layouts.app')

@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Maestro de categorización de emergencia 
        <small>Creacion Categoria Emergencia</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de categorización de emergencia</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
    <div class="row container">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/mcemergencia') }}">
                                  {{ csrf_field() }}
                      <div class="form-group{{ $errors->has('numcatemerg') ? ' has-error' : '' }}">
                      <label for="numcatemerg" class="col-md-2 control-label">Numero Categoria Emergencia:
                      </label>
                          <div class="col-md-2">
                          <input id="numcatemerg" type="text" class="form-control" placeholder="Numero Categoria Emergencia" name="numcatemerg" maxlength="3" value="{{ old('numcatemerg') }}" required autofocus>
                              @if ($errors->has('numcatemerg'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('numcatemerg') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                       <div class="form-group{{ $errors->has('nomcatemerg') ? ' has-error' : '' }}">
                      <label for="nomcatemerg" class="col-md-2 control-label">Categoria Emergencia:</label>
                          <div class="col-md-6">
                          <input id="nomcatemerg" type="text" class="form-control" placeholder="Categoria Emergencia" name="nomcatemerg" maxlength="100" value="{{ old('nomcatemerg') }}" required autofocus>
                              @if ($errors->has('nomcatemerg'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nomcatemerg') }}</strong>
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
