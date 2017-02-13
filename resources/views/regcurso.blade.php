@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Creacion de Cursos
        <small>Creacion de Cursos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Creacion de Cursos</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        Creacion de Cursos
        <small>Creacion de Cursos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Creacion de Cursos</li>
      </ol>
      </div>




    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
    
      <div class="row container">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/regcurso') }}">
                                    {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('numcurso') ? ' has-error' : '' }}">
                        <label for="numcurso" class="col-md-2 control-label">Numero Curso:</label>
                            <div class="col-md-2">
                            <input id="numcurso" type="text" class="form-control" placeholder="Numero Curso" name="numcurso" maxlength="3" value="{{ old('numcurso') }}" required autofocus>
                                @if ($errors->has('numcurso'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numcurso') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('nomcurso') ? ' has-error' : '' }}">
                        <label for="nomcurso" class="col-md-2 control-label">Nombre Curso:</label>
                            <div class="col-md-6">
                            <input id="nomcurso" type="text" class="form-control" placeholder="Nombre Curso" name="nomcurso" maxlength="100" value="{{ old('nomcurso') }}" required autofocus>
                                @if ($errors->has('nomcurso'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nomcurso') }}</strong>
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
