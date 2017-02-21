@extends('layouts.app2')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
          
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Registro de Uniforme
        <small>Formulario para registrar el Uniforme</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Registro</li>
        <li class="active">Uniforme</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
      <h1>
        Registro de Uniforme
        <small>Formulario para registrar el Uniforme</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Registro</li>
        <li class="active">Uniforme</li>
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
                  <th>Observación</th>
                </tr>
                </thead>
                <tbody>
               
               <tr>
                  <td>Botas</td>
                  <td> <input id="cant-total-bota" type="number" class="form-control" placeholder="Cantidad" name="cant-total-bota" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-bota" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-bota" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-bota" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-bota" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-bota" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-bota" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-bota" type="text" class="form-control" placeholder="Observacón" name="observacion-bota" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Guantes</td>
                  <td> <input id="cant-total-guante" type="number" class="form-control" placeholder="Cantidad" name="cant-total-guante" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-guante" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-guante" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-guante" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-guante" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-guante" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-guante" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-guante" type="text" class="form-control" placeholder="Observacón" name="observacion-guante" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Chaquetas</td>
                  <td> <input id="cant-total-chaqueta" type="number" class="form-control" placeholder="Cantidad" name="cant-total-chaqueta" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-chaqueta" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-chaqueta" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-chaqueta" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-chaqueta" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-chaqueta" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-chaqueta" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-chaqueta" type="text" class="form-control" placeholder="Observacón" name="observacion-chaqueta" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Uniforme tipo Ranger</td>
                  <td> <input id="cant-total-ranger" type="number" class="form-control" placeholder="Cantidad" name="cant-total-ranger" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-ranger" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-ranger" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-ranger" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-ranger" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-ranger" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-ranger" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-ranger" type="text" class="form-control" placeholder="Observacón" name="observacion-ranger" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Uniforme tipo Braga</td>
                  <td> <input id="cant-total-braga" type="number" class="form-control" placeholder="Cantidad" name="cant-total-braga" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-braga" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-braga" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-braga" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-braga" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-braga" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-braga" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-braga" type="text" class="form-control" placeholder="Observacón" name="observacion-braga" maxlength="250" value="" required autofocus></td>
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
