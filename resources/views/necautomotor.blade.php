@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
          
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Solicitud de Unidades automotoras
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Necesidades</li>
        <li class="active">Unidades automotoras</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        Solicitud de Unidades automotoras
        <small>Formulario para solicitar Unidades automotoras</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Necesidades</li>
        <li class="active">Unidades automotoras</li>
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
          <label for="unidad-incendios" class="col-md-2 control-label">Unidades de supresión de incendios:</label>
            <div class="col-md-2">
              <input id="cant-unidad-incendios" type="number" class="form-control" placeholder="Cantidad" name="cant-unidad-incendios" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-unidad-incendios" type="date" class="form-control" name="fecha-unidad-incendios" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-unidad-incendios" type="text" class="form-control" placeholder="Observación" name="obse-unidad-incendios" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="cisternas" class="col-md-2 control-label">Cisternas:</label>
            <div class="col-md-2">
              <input id="cant-cisternas" type="number" class="form-control" placeholder="Cantidad" name="cant-cisternas" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-cisternas" type="date" class="form-control" name="fecha-cisternas" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-cisternas" type="text" class="form-control" placeholder="Observación" name="obse-cisternas" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="super-cisternas" class="col-md-2 control-label">Supercisternas:</label>
            <div class="col-md-2">
              <input id="cant-super-cisternas" type="number" class="form-control" placeholder="Cantidad" name="cant-super-cisternas" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-super-cisternas" type="date" class="form-control" name="fecha-super-cisternas" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-super-cisternas" type="text" class="form-control" placeholder="Observación" name="obse-super-cisternas" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="unidad-rescate" class="col-md-2 control-label">Unidades de rescate:</label>
            <div class="col-md-2">
              <input id="cant-unidad-rescate" type="number" class="form-control" placeholder="Cantidad" name="cant-unidad-rescate" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-unidad-rescate" type="date" class="form-control" name="fecha-unidad-rescate" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-unidad-rescate" type="text" class="form-control" placeholder="Observación" name="obse-unidad-rescate" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="unidad-mat-pel" class="col-md-2 control-label">Unidades MAT-PEL:</label>
            <div class="col-md-2">
              <input id="cant-unidad-mat-pel" type="number" class="form-control" placeholder="Cantidad" name="cant-unidad-mat-pel" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-unidad-mat-pel" type="date" class="form-control" name="fecha-unidad-mat-pel" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-unidad-mat-pel" type="text" class="form-control" placeholder="Observación" name="obse-unidad-mat-pel" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="unidad-multiproposito" class="col-md-2 control-label">Unidades multipropósitos:</label>
            <div class="col-md-2">
              <input id="cant-unidad-multiproposito" type="number" class="form-control" placeholder="Cantidad" name="cant-unidad-multiproposito" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-unidad-multiproposito" type="date" class="form-control" name="fecha-unidad-multiproposito" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-unidad-multiproposito" type="text" class="form-control" placeholder="Observación" name="obse-unidad-multiproposito" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="helicopteros" class="col-md-2 control-label">Helicópteros:</label>
            <div class="col-md-2">
              <input id="cant-helicopteros" type="number" class="form-control" placeholder="Cantidad" name="cant-helicopteros" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-helicopteros" type="date" class="form-control" name="fecha-helicopteros" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-helicopteros" type="text" class="form-control" placeholder="Observación" name="obse-helicopteros" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="carros" class="col-md-2 control-label">Carros:</label>
            <div class="col-md-2">
              <input id="cant-carros" type="number" class="form-control" placeholder="Cantidad" name="cant-carros" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-carros" type="date" class="form-control" name="fecha-carros" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-carros" type="text" class="form-control" placeholder="Observación" name="obse-carros" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="camionetas" class="col-md-2 control-label">Camionetas:</label>
            <div class="col-md-2">
              <input id="cant-camionetas" type="number" class="form-control" placeholder="Cantidad" name="cant-camionetas" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-camionetas" type="date" class="form-control" name="fecha-camionetas" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-camionetas" type="text" class="form-control" placeholder="Observación" name="obse-camionetas" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="motos" class="col-md-2 control-label">Motos:</label>
            <div class="col-md-2">
              <input id="cant-motos" type="number" class="form-control" placeholder="Cantidad" name="cant-motos" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-motos" type="date" class="form-control" name="fecha-motos" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-motos" type="text" class="form-control" placeholder="Observación" name="obse-motos" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="gruas" class="col-md-2 control-label">Grúas:</label>
            <div class="col-md-2">
              <input id="cant-gruas" type="number" class="form-control" placeholder="Cantidad" name="cant-gruas" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-gruas" type="date" class="form-control" name="fecha-gruas" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-gruas" type="text" class="form-control" placeholder="Observación" name="obse-gruas" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="moto-bombas" class="col-md-2 control-label">Moto bombas:</label>
            <div class="col-md-2">
              <input id="cant-moto-bombas" type="number" class="form-control" placeholder="Cantidad" name="cant-moto-bombas" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-moto-bombas" type="date" class="form-control" name="fecha-moto-bombas" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-moto-bombas" type="text" class="form-control" placeholder="Observación" name="obse-moto-bombas" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="ambulancias" class="col-md-2 control-label">Ambulancias:</label>
            <div class="col-md-2">
              <input id="cant-ambulancias" type="number" class="form-control" placeholder="Cantidad" name="cant-ambulancias" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-ambulancias" type="date" class="form-control" name="fecha-ambulancias" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-ambulancias" type="text" class="form-control" placeholder="Observación" name="obse-ambulancias" maxlength="150" required autofocus>
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
