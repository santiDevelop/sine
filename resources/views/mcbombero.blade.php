@extends('layouts.app')

@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Maestro de cuerpo de bomberos
        <small>Descripcion de la pagina</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de cuerpo de bomberos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
    <div class="row container">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/mcbombero') }}">
                                  {{ csrf_field() }}
                      <div class="form-group{{ $errors->has('numcbomb') ? ' has-error' : '' }}">
                      <label for="numcbomb" class="col-md-2 control-label">Numero Cuerpo Bombero:
                      </label>
                          <div class="col-md-6">
                          <input id="numcbomb" type="text" class="form-control" placeholder="Numero Cuerpo Bombero" name="numcbomb" value="{{ old('numcbomb') }}" required autofocus>
                              @if ($errors->has('numcbomb'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('numcbomb') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                       <div class="form-group{{ $errors->has('nomcbombero') ? ' has-error' : '' }}">
                      <label for="nomcbombero" class="col-md-2 control-label">Cuerpo Bombero:</label>
                          <div class="col-md-6">
                          <input id="nomcbombero" type="text" class="form-control" placeholder="Cuerpo Bombero" name="nomcbombero" value="{{ old('nomcbombero') }}" required autofocus>
                              @if ($errors->has('nomcbombero'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nomcbombero') }}</strong>
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
