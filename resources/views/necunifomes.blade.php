@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
          
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Solicitud de Uniformes
        <small>Formulario para solicitar Uniformes</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Necesidades</li>
        <li class="active">Uniformes</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        Solicitud de Uniformes
        <small>Formulario para solicitar Uniformes</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Necesidades</li>
        <li class="active">Uniformes</li>
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
          <label for="cascos" class="col-md-2 control-label">Cascos:</label>
            <div class="col-md-2">
              <input id="cant-cascos" type="number" class="form-control" placeholder="Cantidad" name="cant-cascos" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-cascos" type="date" class="form-control" name="fecha-cascos" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-cascos" type="text" class="form-control" placeholder="Observación" name="obse-cascos" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="cascos-visor" class="col-md-2 control-label">Cascos con visor:</label>
            <div class="col-md-2">
              <input id="cant-cascos-visor" type="number" class="form-control" placeholder="Cantidad" name="cant-cascos-visor" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-cascos-visor" type="date" class="form-control" name="fecha-cascos-visor" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-cascos-visor" type="text" class="form-control" placeholder="Observación" name="obse-cascos-visor" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="protectores" class="col-md-2 control-label">Protectores:</label>
            <div class="col-md-2">
              <input id="cant-protectores" type="number" class="form-control" placeholder="Cantidad" name="cant-protectores" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-protectores" type="date" class="form-control" name="fecha-protectores" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-protectores" type="text" class="form-control" placeholder="Observación" name="obse-protectores" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="botiquin-primeros-auxilios" class="col-md-2 control-label">Botiquín de primeros auxilios:</label>
            <div class="col-md-2">
              <input id="cant-botiquin-primeros-auxilios" type="number" class="form-control" placeholder="Cantidad" name="cant-botiquin-primeros-auxilios" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-botiquin-primeros-auxilios" type="date" class="form-control" name="fecha-botiquin-primeros-auxilios" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-botiquin-primeros-auxilios" type="text" class="form-control" placeholder="Observación" name="obse-botiquin-primeros-auxilios" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="prehospitalaria" class="col-md-2 control-label">Kit de asistencia prehospitalaria:</label>
            <div class="col-md-2">
              <input id="cant-prehospitalaria" type="number" class="form-control" placeholder="Cantidad" name="cant-prehospitalaria" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-prehospitalaria" type="date" class="form-control" name="fecha-prehospitalaria" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-prehospitalaria" type="text" class="form-control" placeholder="Observación" name="obse-prehospitalaria" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="camillas" class="col-md-2 control-label">Camillas:</label>
            <div class="col-md-2">
              <input id="cant-camillas" type="number" class="form-control" placeholder="Cantidad" name="cant-camillas" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-camillas" type="date" class="form-control" name="fecha-camillas" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-camillas" type="text" class="form-control" placeholder="Observación" name="obse-camillas" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="chaleco-paramedico" class="col-md-2 control-label">Chalecos paramédicos:</label>
            <div class="col-md-2">
              <input id="cant-chaleco-paramedico" type="number" class="form-control" placeholder="Cantidad" name="cant-chaleco-paramedico" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-chaleco-paramedico" type="date" class="form-control" name="fecha-chaleco-paramedico" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-chaleco-paramedico" type="text" class="form-control" placeholder="Observación" name="obse-chaleco-paramedico" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="equipo-proteccion" class="col-md-2 control-label">Equipo de protección:</label>
            <div class="col-md-2">
              <input id="cant-equipo-proteccion" type="number" class="form-control" placeholder="Cantidad" name="cant-equipo-proteccion" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-equipo-proteccion" type="date" class="form-control" name="fecha-equipo-proteccion" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-equipo-proteccion" type="text" class="form-control" placeholder="Observación" name="obse-equipo-proteccion" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="protector-cabeza" class="col-md-2 control-label">Protectores de cabeza:</label>
            <div class="col-md-2">
              <input id="cant-protector-cabeza" type="number" class="form-control" placeholder="Cantidad" name="cant-protector-cabeza" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-protector-cabeza" type="date" class="form-control" name="fecha-protector-cabeza" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-protector-cabeza" type="text" class="form-control" placeholder="Observación" name="obse-protector-cabeza" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="casco-incendio" class="col-md-2 control-label">Cascos contra incendios:</label>
            <div class="col-md-2">
              <input id="cant-casco-incendio" type="number" class="form-control" placeholder="Cantidad" name="cant-casco-incendio" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-casco-incendio" type="date" class="form-control" name="fecha-casco-incendio" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-casco-incendio" type="text" class="form-control" placeholder="Observación" name="obse-casco-incendio" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="pano-manguera-medidas" class="col-md-2 control-label">Paños de manguera medidas:</label>
            <div class="col-md-2">
              <input id="cant-pano-manguera-medidas" type="number" class="form-control" placeholder="Cantidad" name="cant-pano-manguera-medidas" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-pano-manguera-medidas" type="date" class="form-control" name="fecha-pano-manguera-medidas" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-pano-manguera-medidas" type="text" class="form-control" placeholder="Observación" name="obse-pano-manguera-medidas" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="autocontenido-equipo" class="col-md-2 control-label">Equipo de autocontenido bombero:</label>
            <div class="col-md-2">
              <input id="cant-autocontenido-equipo" type="number" class="form-control" placeholder="Cantidad" name="cant-autocontenido-equipo" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-autocontenido-equipo" type="date" class="form-control" name="fecha-autocontenido-equipo" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-autocontenido-equipo" type="text" class="form-control" placeholder="Observación" name="obse-autocontenido-equipo" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="botas-incendio" class="col-md-2 control-label">Botas contra incendios:</label>
            <div class="col-md-2">
              <input id="cant-botas-incendio" type="number" class="form-control" placeholder="Cantidad" name="cant-botas-incendio" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-botas-incendio" type="date" class="form-control" name="fecha-botas-incendio" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-botas-incendio" type="text" class="form-control" placeholder="Observación" name="obse-botas-incendio" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="cascos-moto-lentes" class="col-md-2 control-label">Cascos moto-lentes:</label>
            <div class="col-md-2">
              <input id="cant-cascos-moto-lentes" type="number" class="form-control" placeholder="Cantidad" name="cant-cascos-moto-lentes" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-cascos-moto-lentes" type="date" class="form-control" name="fecha-cascos-moto-lentes" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-cascos-moto-lentes" type="text" class="form-control" placeholder="Observación" name="obse-cascos-moto-lentes" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="respiracion-autonomo" class="col-md-2 control-label">Equipo de respiración autónomo:</label>
            <div class="col-md-2">
              <input id="cant-respiracion-autonomo" type="number" class="form-control" placeholder="Cantidad" name="cant-respiracion-autonomo" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-respiracion-autonomo" type="date" class="form-control" name="fecha-respiracion-autonomo" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-respiracion-autonomo" type="text" class="form-control" placeholder="Observación" name="obse-respiracion-autonomo" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="lamparas-emergencia" class="col-md-2 control-label">Lámparas de emergencia:</label>
            <div class="col-md-2">
              <input id="cant-lamparas-emergencia" type="number" class="form-control" placeholder="Cantidad" name="cant-lamparas-emergencia" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-lamparas-emergencia" type="date" class="form-control" name="fecha-lamparas-emergencia" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-lamparas-emergencia" type="text" class="form-control" placeholder="Observación" name="obse-lamparas-emergencia" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="extintores" class="col-md-2 control-label">Extintores:</label>
            <div class="col-md-2">
              <input id="cant-extintores" type="number" class="form-control" placeholder="Cantidad" name="cant-extintores" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-extintores" type="date" class="form-control" name="fecha-extintores" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-extintores" type="text" class="form-control" placeholder="Observación" name="obse-extintores" maxlength="150" required autofocus>
            </div>
        </div>

        <div class="form-group">
          <label for="detector-humo" class="col-md-2 control-label">Detector de humo:</label>
            <div class="col-md-2">
              <input id="cant-detector-humo" type="number" class="form-control" placeholder="Cantidad" name="cant-detector-humo" required autofocus>
            </div>
            <div class="col-md-2">
              <input id="fecha-detector-humo" type="date" class="form-control" name="fecha-detector-humo" required autofocus>
            </div>
            <div class="col-md-5">
              <input id="obse-detector-humo" type="text" class="form-control" placeholder="Observación" name="obse-detector-humo" maxlength="150" required autofocus>
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
