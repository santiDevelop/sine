@extends('layouts.app')

@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Maestro de cargos
        <small>Registro de Cargos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de cargos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
    
<div class="row">
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/mcargos') }}">
                              {{ csrf_field() }}
                  <div class="form-group{{ $errors->has('numcargo') ? ' has-error' : '' }}">
                  <label for="numcargo" class="col-md-2 control-label">Numero Cargo:</label>
                      <div class="col-md-6">
                      <input id="numcargo" type="text" class="form-control" placeholder="Numero Cargo" name="numcargo" value="{{ old('numcargo') }}" required autofocus>
                          @if ($errors->has('numcargo'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('numcargo') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                   <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
                  <label for="cargo" class="col-md-2 control-label">Cargo:</label>
                      <div class="col-md-6">
                      <input id="cargo" type="text" class="form-control" placeholder="cargo" name="cargo" value="{{ old('cargo') }}" required autofocus>
                          @if ($errors->has('cargo'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('cargo') }}</strong>
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
