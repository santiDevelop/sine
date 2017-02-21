@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
          
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Solicitud de Meterial de Comunicaciones
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Necesidades</li>
        <li class="active">Material de Comunicaciones</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        Solicitud de Material de Comunicaciones
        <small>Formulario para solicitar el Material de Comunicaciones</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Necesidades</li>
        <li class="active">Material de Comunicaciones</li>
      </ol>
      </section>
      </div>


    <!-- Main content -->
<section class="content">

      <!-- Your Page Content Here -->


<!-- Formulario de registro -->
<div class="box">
<div class="box-body">

      <form class="form-horizontal" role="form" method="POST" action="">
        <div class="form-group">
          <label for="radios" class="col-md-1 control-label">Radios:</label>
            <div class="col-md-2">
              <input id="cant-radios" type="number" class="form-control" placeholder="Cantidad" name="cant-radios" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-radios" type="date" class="form-control" name="fecha-radios" required autofocus>
            </div>
            <div class="col-md-6">
              <input id="obse-radios" type="text" class="form-control" placeholder="Observación" name="obse-radios" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="telefonos" class="col-md-1 control-label">Teléfonos:</label>
            <div class="col-md-2">
              <input id="cant-telefonos" type="number" class="form-control" placeholder="Cantidad" name="cant-telefonos" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-telefonos" type="date" class="form-control" name="fecha-telefonos" required autofocus>
            </div>
            <div class="col-md-6">
              <input id="obse-telefonos" type="text" class="form-control" placeholder="Observación" name="obse-telefonos" maxlength="150" required autofocus>
            </div>
        </div>
</div> <!-- Fin box body --> 
</div> <!-- Fin box --> 

        <div class="form-group">
          <div class="col-xs-offset-6">
              <button type="submit" class="btn btn-primary">Solicitar</button>
          </div>
        </div>  
      </form>



<!-- Fin Formulario -->


</section>
    <!-- /.content -->

@endsection
