@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
          
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Solicitud de Infraestructura
        <small>Formulario para solicitar infraestructura</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Necesidades</li>
        <li class="active">Infraestructura</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        Solicitud de Infraestructura
        <small>Formulario para solicitar infraestructura</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Necesidades</li>
        <li class="active">Infraestructura</li>
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
          <label for="puestos-trabajo" class="col-md-3 control-label">Medidas de la estación de bomberos (MT2):</label>
            <div class="col-md-2">
              <input id="cant-puestos-trabajo" type="text" class="form-control" placeholder="Cantidad MT2" name="cant-puestos-trabajo" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-puestos-trabajo" type="date" class="form-control" name="fecha-puestos-trabajo" required autofocus>
            </div>
            <div class="col-md-4">
              <input id="obse-puestos-trabajo" type="text" class="form-control" placeholder="Observación" name="obse-puestos-trabajo" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="puestos-trabajo" class="col-md-3 control-label">Espacio disponible para construcción o ampliación (MT2):</label>
            <div class="col-md-2">
              <input id="cant-puestos-trabajo" type="text" class="form-control" placeholder="Cantidad MT2" name="cant-puestos-trabajo" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-puestos-trabajo" type="date" class="form-control" name="fecha-puestos-trabajo" required autofocus>
            </div>
            <div class="col-md-4">
              <input id="obse-puestos-trabajo" type="text" class="form-control" placeholder="Observación" name="obse-puestos-trabajo" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="puestos-trabajo" class="col-md-2 control-label">Puestos de trabajo:</label>
            <div class="col-md-2">
              <input id="cant-puestos-trabajo" type="number" class="form-control" placeholder="Cantidad" name="cant-puestos-trabajo" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-puestos-trabajo" type="date" class="form-control" name="fecha-puestos-trabajo" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-puestos-trabajo" type="text" class="form-control" placeholder="Observación" name="obse-puestos-trabajo" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="sanitarios" class="col-md-2 control-label">Sanitarios:</label>
            <div class="col-md-2">
              <input id="cant-sanitarios" type="number" class="form-control" placeholder="Cantidad" name="cant-sanitarios" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-sanitarios" type="date" class="form-control" name="fecha-sanitarios" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-sanitarios" type="text" class="form-control" placeholder="Observación" name="obse-sanitarios" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="duchas" class="col-md-2 control-label">Duchas:</label>
            <div class="col-md-2">
              <input id="cant-duchas" type="number" class="form-control" placeholder="Cantidad" name="cant-duchas" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-duchas" type="date" class="form-control" name="fecha-duchas" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-duchas" type="text" class="form-control" placeholder="Observación" name="obse-duchas" maxlength="150" required autofocus>
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
