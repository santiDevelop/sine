@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Maestro de cuerpo de bomberos
        <small>Creacion de Cuerpo de Bomberos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de cuerpo de bomberos</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        Maestro de cuerpo de bomberos
        <small>Creacion de Cuerpo de Bomberos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de cuerpo de bomberos</li>
      </ol>
      </div>




    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
    
      <div class="row container">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/mcbombero') }}">
                                    {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('numcbomb') ? ' has-error' : '' }}">
                        <label for="numcargo" class="col-md-2 control-label">Numero Cuerpo Bombero:</label>
                            <div class="col-md-2">
                            <input id="numcargo" type="text" class="form-control" placeholder="Numero C. Bombero" name="numcargo" maxlength="3" value="{{ old('numcargo') }}" required autofocus>
                                @if ($errors->has('numcargo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numcargo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('nomcbombero') ? ' has-error' : '' }}">
                        <label for="nomcbombero" class="col-md-2 control-label">Cuerpo Bombero:</label>
                            <div class="col-md-6">
                            <input id="nomcbombero" type="text" class="form-control" placeholder="Nombre de Cuerpo Bombero" name="nomcbombero" maxlength="100" value="{{ old('nomcbombero') }}" required autofocus>
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
