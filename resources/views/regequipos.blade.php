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
