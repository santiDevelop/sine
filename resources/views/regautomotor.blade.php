@extends('layouts.app2')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
          
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Registro de Unidades automotoras
        <small>Formulario para registrar Unidades automotoras</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Registro</li>
        <li class="active">Unidades automotoras</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
      <h1>
        Registro de Unidades automotoras
        <small>Formulario para registrar Unidades automotoras</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Registro</li>
        <li class="active">Unidades automotoras</li>
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
                  <td>Unidades de supresión de incendios</td>
                  <td> <input id="cant-total-supresion-incendios" type="number" class="form-control" placeholder="Cantidad" name="cant-total-supresion-incendios" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-supresion-incendios" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-supresion-incendios" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-supresion-incendios" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-supresion-incendios" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-supresion-incendios" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-supresion-incendios" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-supresion-incendios" type="text" class="form-control" placeholder="Marca" name="marca-supresion-incendios" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-supresion-incendios" type="text" class="form-control" placeholder="Modelo" name="modelo-supresion-incendios" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-supresion-incendios" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-supresion-incendios" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-supresion-incendios" type="text" class="form-control" placeholder="Observacón" name="observacion-supresion-incendios" maxlength="250" value="" required autofocus></td>
                </tr>


                <tr>
                  <td>Cisternas</td>
                  <td> <input id="cant-total-cisterna" type="number" class="form-control" placeholder="Cantidad" name="cant-total-cisterna" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-cisterna" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-cisterna" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-cisterna" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-cisterna" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-cisterna" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-cisterna" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-cisterna" type="text" class="form-control" placeholder="Marca" name="marca-cisterna" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-cisterna" type="text" class="form-control" placeholder="Modelo" name="modelo-cisterna" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-cisterna" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-cisterna" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-cisterna" type="text" class="form-control" placeholder="Observacón" name="observacion-cisterna" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Supercisternas</td>
                  <td> <input id="cant-total-supercisterna" type="number" class="form-control" placeholder="Cantidad" name="cant-total-supercisterna" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-supercisterna" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-supercisterna" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-supercisterna" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-supercisterna" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-supercisterna" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-supercisterna" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-supercisterna" type="text" class="form-control" placeholder="Marca" name="marca-supercisterna" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-supercisterna" type="text" class="form-control" placeholder="Modelo" name="modelo-supercisterna" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-supercisterna" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-supercisterna" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-supercisterna" type="text" class="form-control" placeholder="Observacón" name="observacion-supercisterna" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Unidades de rescate</td>
                  <td> <input id="cant-total-unidad-rescate" type="number" class="form-control" placeholder="Cantidad" name="cant-total-unidad-rescate" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-unidad-rescate" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-unidad-rescate" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-unidad-rescate" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-unidad-rescate" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-unidad-rescate" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-unidad-rescate" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-unidad-rescate" type="text" class="form-control" placeholder="Marca" name="marca-unidad-rescate" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-unidad-rescate" type="text" class="form-control" placeholder="Modelo" name="modelo-unidad-rescate" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-unidad-rescate" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-unidad-rescate" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-unidad-rescate" type="text" class="form-control" placeholder="Observacón" name="observacion-unidad-rescate" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Unidades MAT-PEL</td>
                  <td> <input id="cant-total-mat-pel" type="number" class="form-control" placeholder="Cantidad" name="cant-total-mat-pel" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-mat-pel" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-mat-pel" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-mat-pel" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-mat-pel" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-mat-pel" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-mat-pel" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-mat-pel" type="text" class="form-control" placeholder="Marca" name="marca-mat-pel" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-mat-pel" type="text" class="form-control" placeholder="Modelo" name="modelo-mat-pel" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-mat-pel" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-mat-pel" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-mat-pel" type="text" class="form-control" placeholder="Observacón" name="observacion-mat-pel" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Unidades multipropósitos</td>
                  <td> <input id="cant-total-multiproposito" type="number" class="form-control" placeholder="Cantidad" name="cant-total-multiproposito" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-multiproposito" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-multiproposito" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-multiproposito" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-multiproposito" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-multiproposito" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-multiproposito" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-multiproposito" type="text" class="form-control" placeholder="Marca" name="marca-multiproposito" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-multiproposito" type="text" class="form-control" placeholder="Modelo" name="modelo-multiproposito" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-multiproposito" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-multiproposito" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-multiproposito" type="text" class="form-control" placeholder="Observacón" name="observacion-multiproposito" maxlength="250" value="" required autofocus></td>
                </tr>
                <tr>
                  <td>Helicópteros</td>
                  <td> <input id="cant-total-helicoptero" type="number" class="form-control" placeholder="Cantidad" name="cant-total-helicoptero" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-helicoptero" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-helicoptero" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-helicoptero" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-helicoptero" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-helicoptero" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-helicoptero" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-helicoptero" type="text" class="form-control" placeholder="Marca" name="marca-helicoptero" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-helicoptero" type="text" class="form-control" placeholder="Modelo" name="modelo-helicoptero" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-helicoptero" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-helicoptero" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-helicoptero" type="text" class="form-control" placeholder="Observacón" name="observacion-helicoptero" maxlength="250" value="" required autofocus></td>
                </tr>
                <tr>
                  <td>Carros</td>
                  <td> <input id="cant-total-carro" type="number" class="form-control" placeholder="Cantidad" name="cant-total-carro" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-carro" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-carro" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-carro" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-carro" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-carro" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-carro" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-carro" type="text" class="form-control" placeholder="Marca" name="marca-carro" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-carro" type="text" class="form-control" placeholder="Modelo" name="modelo-carro" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-carro" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-carro" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-carro" type="text" class="form-control" placeholder="Observacón" name="observacion-carro" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Camionetas</td>
                  <td> <input id="cant-total-camioneta" type="number" class="form-control" placeholder="Cantidad" name="cant-total-camioneta" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-camioneta" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-camioneta" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-camioneta" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-camioneta" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-camioneta" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-camioneta" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-camioneta" type="text" class="form-control" placeholder="Marca" name="marca-camioneta" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-camioneta" type="text" class="form-control" placeholder="Modelo" name="modelo-camioneta" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-camioneta" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-camioneta" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-camioneta" type="text" class="form-control" placeholder="Observacón" name="observacion-camioneta" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Motos</td>
                  <td> <input id="cant-total-moto" type="number" class="form-control" placeholder="Cantidad" name="cant-total-moto" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-moto" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-moto" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-moto" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-moto" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-moto" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-moto" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-moto" type="text" class="form-control" placeholder="Marca" name="marca-moto" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-moto" type="text" class="form-control" placeholder="Modelo" name="modelo-moto" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-moto" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-moto" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-moto" type="text" class="form-control" placeholder="Observacón" name="observacion-moto" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Grúas</td>
                  <td> <input id="cant-total-grua" type="number" class="form-control" placeholder="Cantidad" name="cant-total-grua" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-grua" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-grua" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-grua" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-grua" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-grua" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-grua" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-grua" type="text" class="form-control" placeholder="Marca" name="marca-grua" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-grua" type="text" class="form-control" placeholder="Modelo" name="modelo-grua" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-grua" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-grua" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-grua" type="text" class="form-control" placeholder="Observacón" name="observacion-grua" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Moto bombas</td>
                  <td> <input id="cant-total-moto-bomba" type="number" class="form-control" placeholder="Cantidad" name="cant-total-moto-bomba" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-moto-bomba" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-moto-bomba" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-moto-bomba" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-moto-bomba" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-moto-bomba" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-moto-bomba" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-moto-bomba" type="text" class="form-control" placeholder="Marca" name="marca-moto-bomba" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-moto-bomba" type="text" class="form-control" placeholder="Modelo" name="modelo-moto-bomba" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-moto-bomba" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-moto-bomba" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-moto-bomba" type="text" class="form-control" placeholder="Observacón" name="observacion-moto-bomba" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Ambulancias</td>
                  <td> <input id="cant-total-ambulancia" type="number" class="form-control" placeholder="Cantidad" name="cant-total-ambulancia" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-ambulancia" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-ambulancia" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-ambulancia" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-ambulancia" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-ambulancia" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-ambulancia" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-ambulancia" type="text" class="form-control" placeholder="Marca" name="marca-ambulancia" maxlength="50" value="" required autofocus></td>
                  <td><input id="marca-ambulancia" type="text" class="form-control" placeholder="Modelo" name="modelo-ambulancia" maxlength="50" value="" required autofocus></td>
                  <td><input id="modelo-ambulancia" type="text" class="form-control" placeholder="Serial" name="serial-fabrica-ambulancia" maxlength="50" value="" required autofocus></td>
                  <td> <input id="serial-fabrica-ambulancia" type="text" class="form-control" placeholder="Observacón" name="observacion-ambulancia" maxlength="250" value="" required autofocus></td>
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
