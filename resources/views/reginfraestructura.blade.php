@extends('layouts.app2')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
          
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Registro de Infraestructura
        <small>Formulario para registrar el infraestructura</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Registro</li>
        <li class="active">Infraestructura</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
      <h1>
        Registro de Infraestructura
        <small>Formulario para registrar el infraestructura</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Registro</li>
        <li class="active">Infraestructura</li>
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
                  <td>Medidas de la estación de bomberos (MT2)</td>
                  <td> <input id="cant-total-estacion" type="text" class="form-control" placeholder="MT2" name="cant-total-estacion" maxlength="5" value="" required autofocus></td>
                  <td><input id="cant-optima-estacion" type="text" class="form-control" placeholder="MT2" name="cant-optima-estacion" maxlength="5" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-estacion" type="text" class="form-control" placeholder="MT2" name="cant-deteriorado-estacion" maxlength="5" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-estacion" type="text" class="form-control" placeholder="MT2" name="cant-fuera-servicio-estacion" maxlength="5" value="" required autofocus></td>
                  <td> <input id="observacion-estacion" type="text" class="form-control" placeholder="Observacón" name="observacion-estacion" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Espacio disponible para construcción o ampliación (MT2)</td>
                  <td> <input id="cant-total-construccion" type="text" class="form-control" placeholder="MT2" name="cant-total-construccion" maxlength="5" value="" required autofocus></td>
                  <td><input id="cant-optima-construccion" type="text" class="form-control" placeholder="MT2" name="cant-optima-construccion" maxlength="5" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-construccion" type="text" class="form-control" placeholder="MT2" name="cant-deteriorado-construccion" maxlength="5" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-construccion" type="text" class="form-control" placeholder="MT2" name="cant-fuera-servicio-construccion" maxlength="5" value="" required autofocus></td>
                  <td> <input id="observacion-construccion" type="text" class="form-control" placeholder="Observacón" name="observacion-construccion" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Puestos de trabajo</td>
                  <td> <input id="cant-total-puestos-trabajo" type="number" class="form-control" placeholder="Cantidad" name="cant-total-puestos-trabajo" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-puestos-trabajo" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-puestos-trabajo" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-puestos-trabajo" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-puestos-trabajo" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-puestos-trabajo" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-puestos-trabajo" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-puestos-trabajo" type="text" class="form-control" placeholder="Observacón" name="observacion-puestos-trabajo" maxlength="250" value="" required autofocus></td>
                </tr>
                
               <tr>
                  <td>Sanitarios</td>
                  <td> <input id="cant-total-sanitario" type="number" class="form-control" placeholder="Cantidad" name="cant-total-sanitario" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-sanitario" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-sanitario" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-sanitario" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-sanitario" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-sanitario" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-sanitario" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-sanitario" type="text" class="form-control" placeholder="Observacón" name="observacion-sanitario" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Duchas</td>
                  <td> <input id="cant-total-ducha" type="number" class="form-control" placeholder="Cantidad" name="cant-total-ducha" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-ducha" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-ducha" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-ducha" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-ducha" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-ducha" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-ducha" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-ducha" type="text" class="form-control" placeholder="Observacón" name="observacion-ducha" maxlength="250" value="" required autofocus></td>
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
