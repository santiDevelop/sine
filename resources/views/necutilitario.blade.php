@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
          
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Solicitud de Material Utilitario
        <small>Formulario para solicitar el material utilitario</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Necesidades</li>
        <li class="active">Material Utilitario</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        Solicitud de Material Utilitario
        <small>Formulario para solicitar el material utilitario</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Necesidades</li>
        <li class="active">Material Utilitario</li>
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
          <label for="camas" class="col-md-1 control-label">Camas:</label>
            <div class="col-md-2">
              <input id="cantcamas" type="number" class="form-control" placeholder="Cantidad" name="cantcamas" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fechacamas" type="date" class="form-control" name="fechacamas" required autofocus>
            </div>
            <div class="col-md-6">
              <input id="obsecamas" type="text" class="form-control" placeholder="Observación" name="obsecamas" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="camas" class="col-md-1 control-label">Colchones:</label>
            <div class="col-md-2">
              <input id="cantcolchones" type="number" class="form-control" placeholder="Cantidad" name="cantcolchones" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fechacolchones" type="date" class="form-control" name="fechacolchones" required autofocus>
            </div>
            <div class="col-md-6">
              <input id="obsecolchones" type="text" class="form-control" placeholder="Observación" name="obsecolchones" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="camas" class="col-md-1 control-label">Almohadas:</label>
            <div class="col-md-2">
              <input id="cantalmohadas" type="number" class="form-control" placeholder="Cantidad" name="cantalmohadas" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fechaalmohadas" type="date" class="form-control" name="fechaalmohadas" required autofocus>
            </div>
            <div class="col-md-6">
              <input id="obsealmohadas" type="text" class="form-control" placeholder="Observación" name="obsealmohadas" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="camas" class="col-md-1 control-label">Sábanas:</label>
            <div class="col-md-2">
              <input id="cantsabanas" type="number" class="form-control" placeholder="Cantidad" name="cantsabanas" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fechasabanas" type="date" class="form-control" name="fechasabanas" required autofocus>
            </div>
            <div class="col-md-6">
              <input id="obsesabanas" type="text" class="form-control" placeholder="Observación" name="obsesabanas" maxlength="150" required autofocus>
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
