@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Registro de Infraestructura
        <small>Formulario para registrar la infraestructura</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Registro</li>
        <li class="active">Infraestructura</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        Registro de Infraestructura
        <small>Formulario para registrar la infraestructura</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Registro</li>
        <li class="active">Infraestructura</li>
      </ol>
      </div>




    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
    
      <div class="row container">


      <div class="row hidden-xs hidden-sm">
        <div class="col-md-4">
          <h3>Elemeto</h3>

        </div>
        <div class="col-md-2">
          <h3>Cantidad</h3>
        </div>
        <div class="col-md-2">
          <h3>Condición</h3>
        </div>
        <div class="col-md-4">
          <h3>Observación</h3>
        </div>
      </div>

      <div class="row hidden-md hidden-lg">
        <div class="col-xs-3">
          <p>Elemeto</p>

        </div>
        <div class="col-xs-3">
          <p>Cantidad</p>
        </div>
        <div class="col-xs-3">
          <p>Condición</p>
        </div>
        <div class="col-xs-3">
          <p>Observación</p>
        </div>
      </div>





            <form class="form-horizontal" role="form" method="POST" action="">
                                    
                        <div class="form-group{{ $errors->has('numcurso') ? ' has-error' : '' }}">
                        <label for="numcurso" class="col-md-2 control-label">Numero Curso:</label>
                            <div class="col-md-2">
                            <input id="numcurso" type="text" class="form-control" placeholder="Numero Curso" name="numcurso" maxlength="3" value="{{ old('numcurso') }}" required autofocus>
                               
                                    <span class="help-block">
                                        <strong>Error</strong>
                                    </span>
                             
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
