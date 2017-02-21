@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
          
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Solicitud de Meterial y Equipos de oficina
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Necesidades</li>
        <li class="active">Material y equipos de oficina</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        Solicitud de Material y equipos de oficina
        <small>Formulario para solicitar el Material y equipos de oficina</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Necesidades</li>
        <li class="active">Material y equipos de oficina</li>
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
          <label for="resmas-hojas" class="col-md-1 control-label">Resmas de hojas:</label>
            <div class="col-md-2">
              <input id="cant-resmas-hojas" type="number" class="form-control" placeholder="Cantidad" name="cant-resmas-hojas" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-resmas-hojas" type="date" class="form-control" name="fecha-resmas-hojas" required autofocus>
            </div>
            <div class="col-md-6">
              <input id="obse-resmas-hojas" type="text" class="form-control" placeholder="Observación" name="obse-resmas-hojas" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="lapiz" class="col-md-1 control-label">Lápiz:</label>
            <div class="col-md-2">
              <input id="cant-lapiz" type="number" class="form-control" placeholder="Cantidad" name="cant-lapiz" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-lapiz" type="date" class="form-control" name="fecha-lapiz" required autofocus>
            </div>
            <div class="col-md-6">
              <input id="obse-lapiz" type="text" class="form-control" placeholder="Observación" name="obse-lapiz" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="boligrafos" class="col-md-1 control-label">Bolígrafos:</label>
            <div class="col-md-2">
              <input id="cant-boligrafos" type="number" class="form-control" placeholder="Cantidad" name="cant-boligrafos" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-boligrafos" type="date" class="form-control" name="fecha-boligrafos" required autofocus>
            </div>
            <div class="col-md-6">
              <input id="obse-boligrafos" type="text" class="form-control" placeholder="Observación" name="obse-boligrafos" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="marcadores" class="col-md-1 control-label">Marcadores:</label>
            <div class="col-md-2">
              <input id="cant-marcadores" type="number" class="form-control" placeholder="Cantidad" name="cant-marcadores" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-marcadores" type="date" class="form-control" name="fecha-marcadores" required autofocus>
            </div>
            <div class="col-md-6">
              <input id="obse-marcadores" type="text" class="form-control" placeholder="Observación" name="obse-marcadores" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="almohadillas" class="col-md-1 control-label">Almohadilla:</label>
            <div class="col-md-2">
              <input id="cant-almohadillas" type="number" class="form-control" placeholder="Cantidad" name="cant-almohadillas" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-almohadillas" type="date" class="form-control" name="fecha-almohadillas" required autofocus>
            </div>
            <div class="col-md-6">
              <input id="obse-almohadillas" type="text" class="form-control" placeholder="Observación" name="obse-almohadillas" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="monitor" class="col-md-1 control-label">Monitor:</label>
            <div class="col-md-2">
              <input id="cant-monitor" type="number" class="form-control" placeholder="Cantidad" name="cant-monitor" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-monitor" type="date" class="form-control" name="fecha-monitor" required autofocus>
            </div>
            <div class="col-md-6">
              <input id="obse-monitor" type="text" class="form-control" placeholder="Observación" name="obse-monitor" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="impresora" class="col-md-1 control-label">Impresora:</label>
            <div class="col-md-2">
              <input id="cant-impresora" type="number" class="form-control" placeholder="Cantidad" name="cant-impresora" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-impresora" type="date" class="form-control" name="fecha-impresora" required autofocus>
            </div>
            <div class="col-md-6">
              <input id="obse-impresora" type="text" class="form-control" placeholder="Observación" name="obse-impresora" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="toner-tinta" class="col-md-1 control-label">Toner o Tinta:</label>
            <div class="col-md-2">
              <input id="cant-toner-tinta" type="number" class="form-control" placeholder="Cantidad" name="cant-toner-tinta" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-toner-tinta" type="date" class="form-control" name="fecha-toner-tinta" required autofocus>
            </div>
            <div class="col-md-6">
              <input id="obse-toner-tinta" type="text" class="form-control" placeholder="Observación" name="obse-toner-tinta" maxlength="150" required autofocus>
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
