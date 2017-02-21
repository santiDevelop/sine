@extends('layouts.app2')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
          
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Registro de Equipos y Herramientas
        <small>Formulario para registrar Equipos y Herramientas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Registro</li>
        <li class="active">Equipos y Herramientas</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
      <h1>
        Registro de Equipos y Herramientas
        <small>Formulario para registrar Equipos y Herramientas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Registro</li>
        <li class="active">Equipos y Herramientas</li>
      </ol>
      </section>
      </div>


    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

<!-- Formulario de registro -->
<form class="form-horizontal" role="form" method="POST" action="">

    <div class="box">
          
            <!-- /.box-header -->
            <div class="table-responsive">
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>Elemeto</th>
                  <th>Cant. total</th>
                  <th>Cant. Optimas</th>
                  <th>Cant. Deteriorado</th>
                  <th>Cant. Fuera de Servicio</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Serial Fabrica</th>
                  <th>Observación</th>
                </tr>
                </thead>
                <tbody>
               
               <tr>
                  <td>Cascos</td>
                  <td> <input id="cant-total-cascos" type="number" class="form-control" placeholder="Cantidad" name="cant-total-cascos" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-cascos" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-cascos" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-cascos" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-cascos" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-cascos" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-cascos" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-cascos" type="text" class="form-control" placeholder="Marca" name="marca-cascos" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-cascos" type="text" class="form-control" placeholder="Modelo" name="modelo-cascos" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-cascos" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-cascos" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-cascos" type="text" class="form-control" placeholder="Observacón" name="observacion-cascos" maxlength="250" value="" required autofocus></td>
                </tr>


                <tr>
                  <td>Cascos con visor</td>
                  <td> <input id="cant-total-casco-visor" type="number" class="form-control" placeholder="Cantidad" name="cant-total-casco-visor" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-casco-visor" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-casco-visor" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-casco-visor" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-casco-visor" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-casco-visor" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-casco-visor" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-casco-visor" type="text" class="form-control" placeholder="Marca" name="marca-casco-visor" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-casco-visor" type="text" class="form-control" placeholder="Modelo" name="modelo-casco-visor" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-casco-visor" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-casco-visor" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-casco-visor" type="text" class="form-control" placeholder="Observacón" name="observacion-casco-visor" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Protectores</td>
                  <td> <input id="cant-total-protector" type="number" class="form-control" placeholder="Cantidad" name="cant-total-protector" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-protector" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-protector" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-protector" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-protector" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-protector" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-protector" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-protector" type="text" class="form-control" placeholder="Marca" name="marca-protector" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-protector" type="text" class="form-control" placeholder="Modelo" name="modelo-protector" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-protector" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-protector" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-protector" type="text" class="form-control" placeholder="Observacón" name="observacion-protector" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Botiquín de primeros auxilios</td>
                  <td> <input id="cant-total-primeros-auxilios" type="number" class="form-control" placeholder="Cantidad" name="cant-total-primeros-auxilios" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-primeros-auxilios" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-primeros-auxilios" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-primeros-auxilios" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-primeros-auxilios" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-primeros-auxilios" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-primeros-auxilios" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-primeros-auxilios" type="text" class="form-control" placeholder="Marca" name="marca-primeros-auxilios" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-primeros-auxilios" type="text" class="form-control" placeholder="Modelo" name="modelo-primeros-auxilios" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-primeros-auxilios" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-primeros-auxilios" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-primeros-auxilios" type="text" class="form-control" placeholder="Observacón" name="observacion-primeros-auxilios" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Kit de asistencia prehospitalaria</td>
                  <td> <input id="cant-total-kit" type="number" class="form-control" placeholder="Cantidad" name="cant-total-kit" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-kit" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-kit" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-kit" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-kit" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-kit" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-kit" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-kit" type="text" class="form-control" placeholder="Marca" name="marca-kit" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-kit" type="text" class="form-control" placeholder="Modelo" name="modelo-kit" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-kit" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-kit" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-kit" type="text" class="form-control" placeholder="Observacón" name="observacion-kit" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Camillas</td>
                  <td> <input id="cant-total-camilla" type="number" class="form-control" placeholder="Cantidad" name="cant-total-camilla" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-camilla" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-camilla" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-camilla" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-camilla" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-camilla" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-camilla" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-camilla" type="text" class="form-control" placeholder="Marca" name="marca-camilla" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-camilla" type="text" class="form-control" placeholder="Modelo" name="modelo-camilla" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-camilla" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-camilla" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-camilla" type="text" class="form-control" placeholder="Observacón" name="observacion-camilla" maxlength="250" value="" required autofocus></td>
                </tr>
                <tr>
                  <td>Chalecos paramédicos</td>
                  <td> <input id="cant-total-chaleco" type="number" class="form-control" placeholder="Cantidad" name="cant-total-chaleco" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-chaleco" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-chaleco" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-chaleco" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-chaleco" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-chaleco" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-chaleco" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-chaleco" type="text" class="form-control" placeholder="Marca" name="marca-chaleco" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-chaleco" type="text" class="form-control" placeholder="Modelo" name="modelo-chaleco" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-chaleco" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-chaleco" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-chaleco" type="text" class="form-control" placeholder="Observacón" name="observacion-chaleco" maxlength="250" value="" required autofocus></td>
                </tr>
                <tr>
                  <td>Equipo de protección</td>
                  <td> <input id="cant-total-equi-protec" type="number" class="form-control" placeholder="Cantidad" name="cant-total-equi-protec" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-equi-protec" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-equi-protec" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-equi-protec" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-equi-protec" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-equi-protec" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-equi-protec" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-equi-protec" type="text" class="form-control" placeholder="Marca" name="marca-equi-protec" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-equi-protec" type="text" class="form-control" placeholder="Modelo" name="modelo-equi-protec" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-equi-protec" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-equi-protec" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-equi-protec" type="text" class="form-control" placeholder="Observacón" name="observacion-equi-protec" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Protectores de cabeza</td>
                  <td> <input id="cant-total-protec-cabeza" type="number" class="form-control" placeholder="Cantidad" name="cant-total-protec-cabeza" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-protec-cabeza" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-protec-cabeza" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-protec-cabeza" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-protec-cabeza" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-protec-cabeza" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-protec-cabeza" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-protec-cabeza" type="text" class="form-control" placeholder="Marca" name="marca-protec-cabeza" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-protec-cabeza" type="text" class="form-control" placeholder="Modelo" name="modelo-protec-cabeza" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-protec-cabeza" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-protec-cabeza" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-protec-cabeza" type="text" class="form-control" placeholder="Observacón" name="observacion-protec-cabeza" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Cascos contra incendios</td>
                  <td> <input id="cant-total-casco-incendio" type="number" class="form-control" placeholder="Cantidad" name="cant-total-casco-incendio" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-casco-incendio" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-casco-incendio" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-casco-incendio" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-casco-incendio" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-casco-incendio" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-casco-incendio" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-casco-incendio" type="text" class="form-control" placeholder="Marca" name="marca-casco-incendio" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-casco-incendio" type="text" class="form-control" placeholder="Modelo" name="modelo-casco-incendio" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-casco-incendio" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-casco-incendio" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-casco-incendio" type="text" class="form-control" placeholder="Observacón" name="observacion-casco-incendio" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Paños de manguera medidas</td>
                  <td> <input id="cant-total-paño" type="number" class="form-control" placeholder="Cantidad" name="cant-total-paño" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-paño" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-paño" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-paño" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-paño" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-paño" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-paño" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-paño" type="text" class="form-control" placeholder="Marca" name="marca-paño" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-paño" type="text" class="form-control" placeholder="Modelo" name="modelo-paño" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-paño" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-paño" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-paño" type="text" class="form-control" placeholder="Observacón" name="observacion-paño" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Equipo de autocontenido bombero</td>
                  <td> <input id="cant-total-autocontenido" type="number" class="form-control" placeholder="Cantidad" name="cant-total-autocontenido" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-autocontenido" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-autocontenido" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-autocontenido" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-autocontenido" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-autocontenido" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-autocontenido" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-autocontenido" type="text" class="form-control" placeholder="Marca" name="marca-autocontenido" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-autocontenido" type="text" class="form-control" placeholder="Modelo" name="modelo-autocontenido" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-autocontenido" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-autocontenido" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-autocontenido" type="text" class="form-control" placeholder="Observacón" name="observacion-autocontenido" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Botas contra incendios</td>
                  <td> <input id="cant-total-bota-incendio" type="number" class="form-control" placeholder="Cantidad" name="cant-total-bota-incendio" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-bota-incendio" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-bota-incendio" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-bota-incendio" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-bota-incendio" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-bota-incendio" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-bota-incendio" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-bota-incendio" type="text" class="form-control" placeholder="Marca" name="marca-bota-incendio" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-bota-incendio" type="text" class="form-control" placeholder="Modelo" name="modelo-bota-incendio" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-bota-incendio" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-bota-incendio" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-bota-incendio" type="text" class="form-control" placeholder="Observacón" name="observacion-bota-incendio" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Cascos moto-lentes</td>
                  <td> <input id="cant-total-casco-moto-lente" type="number" class="form-control" placeholder="Cantidad" name="cant-total-casco-moto-lente" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-casco-moto-lente" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-casco-moto-lente" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-casco-moto-lente" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-casco-moto-lente" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-casco-moto-lente" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-casco-moto-lente" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-casco-moto-lente" type="text" class="form-control" placeholder="Marca" name="marca-casco-moto-lente" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-casco-moto-lente" type="text" class="form-control" placeholder="Modelo" name="modelo-casco-moto-lente" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-casco-moto-lente" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-casco-moto-lente" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-casco-moto-lente" type="text" class="form-control" placeholder="Observacón" name="observacion-casco-moto-lente" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Equipo de respiración autónomo</td>
                  <td> <input id="cant-total-equi-respiracion" type="number" class="form-control" placeholder="Cantidad" name="cant-total-equi-respiracion" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-equi-respiracion" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-equi-respiracion" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-equi-respiracion" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-equi-respiracion" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-equi-respiracion" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-equi-respiracion" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-equi-respiracion" type="text" class="form-control" placeholder="Marca" name="marca-equi-respiracion" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-equi-respiracion" type="text" class="form-control" placeholder="Modelo" name="modelo-equi-respiracion" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-equi-respiracion" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-equi-respiracion" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-equi-respiracion" type="text" class="form-control" placeholder="Observacón" name="observacion-equi-respiracion" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Lámparas de emergencia</td>
                  <td> <input id="cant-total-lampara" type="number" class="form-control" placeholder="Cantidad" name="cant-total-lampara" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-lampara" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-lampara" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-lampara" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-lampara" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-lampara" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-lampara" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-lampara" type="text" class="form-control" placeholder="Marca" name="marca-lampara" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-lampara" type="text" class="form-control" placeholder="Modelo" name="modelo-lampara" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-lampara" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-lampara" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-lampara" type="text" class="form-control" placeholder="Observacón" name="observacion-lampara" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Extintores</td>
                  <td> <input id="cant-total-extintor" type="number" class="form-control" placeholder="Cantidad" name="cant-total-extintor" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-extintor" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-extintor" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-extintor" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-extintor" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-extintor" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-extintor" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-extintor" type="text" class="form-control" placeholder="Marca" name="marca-extintor" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-extintor" type="text" class="form-control" placeholder="Modelo" name="modelo-extintor" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-extintor" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-extintor" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-extintor" type="text" class="form-control" placeholder="Observacón" name="observacion-extintor" maxlength="250" value="" required autofocus></td>
                </tr> 

                <tr>
                  <td>Detector de humo</td>
                  <td> <input id="cant-total-detector-humo" type="number" class="form-control" placeholder="Cantidad" name="cant-total-detector-humo" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-detector-humo" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-detector-humo" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-detector-humo" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-detector-humo" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-detector-humo" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-detector-humo" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-detector-humo" type="text" class="form-control" placeholder="Marca" name="marca-detector-humo" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-detector-humo" type="text" class="form-control" placeholder="Modelo" name="modelo-detector-humo" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-detector-humo" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-detector-humo" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-detector-humo" type="text" class="form-control" placeholder="Observacón" name="observacion-detector-humo" maxlength="250" value="" required autofocus></td>
                </tr>



               

                </tbody>
               
              </table>
               </div>
            </div>
            <!-- /.box-body -->
         
          <!-- /.box -->

</div>
  <div class="form-group">
    <div class="col-xs-offset-6">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
  </div>
  
</form>


<!-- Fin Formulario -->

    </section>
    <!-- /.content -->


@endsection
