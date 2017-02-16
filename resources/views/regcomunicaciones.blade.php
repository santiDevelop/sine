@extends('layouts.app')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
          
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Registro de Comunicaciones
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Registro</li>
        <li class="active">Comunicaciones</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        Registro de Comunicaciones
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Registro</li>
        <li class="active">Comunicaciones</li>
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
                  <td>Radios</td>
                  <td> <input id="cant-total-radio" type="number" class="form-control" placeholder="Cantidad" name="cant-total-radio" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-radio" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-radio" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-radio" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-radio" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-radio" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-radio" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-radio" type="text" class="form-control" placeholder="Observacón" name="observacion-radio" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Teléfonos</td>
                  <td> <input id="cant-total-telefono" type="number" class="form-control" placeholder="Cantidad" name="cant-total-telefono" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-telefono" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-telefono" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-telefono" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-telefono" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-telefono" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-telefono" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-telefono" type="text" class="form-control" placeholder="Observacón" name="observacion-telefono" maxlength="250" value="" required autofocus></td>
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
