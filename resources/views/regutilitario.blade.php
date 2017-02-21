@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
          
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Registro de Material Utilitario
        <small>Formulario para registrar el material utilitario</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Registro</li>
        <li class="active">Material Utilitario</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        Registro de Material Utilitario
        <small>Formulario para registrar el material utilitario</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Registro</li>
        <li class="active">Material Utilitario</li>
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
                  <td>Camas</td>
                  <td> <input id="cant-total-cama" type="number" class="form-control" placeholder="Cantidad" name="cant-total-cama" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-cama" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-cama" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-cama" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-cama" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-cama" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-cama" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-cama" type="text" class="form-control" placeholder="Observacón" name="observacion-cama" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Colchones</td>
                  <td> <input id="cant-total-colchon" type="number" class="form-control" placeholder="Cantidad" name="cant-total-colchon" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-colchon" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-colchon" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-colchon" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-colchon" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-colchon" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-colchon" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-colchon" type="text" class="form-control" placeholder="Observacón" name="observacion-colchon" maxlength="250" value="" required autofocus></td>
                </tr>
                
               <tr>
                  <td>Almohadas</td>
                  <td> <input id="cant-total-almohada" type="number" class="form-control" placeholder="Cantidad" name="cant-total-almohada" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-almohada" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-almohada" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-almohada" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-almohada" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-almohada" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-almohada" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-almohada" type="text" class="form-control" placeholder="Observacón" name="observacion-almohada" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Sábanas</td>
                  <td> <input id="cant-total-sabana" type="number" class="form-control" placeholder="Cantidad" name="cant-total-sabana" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-sabana" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-sabana" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-sabana" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-sabana" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-sabana" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-sabana" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-sabana" type="text" class="form-control" placeholder="Observacón" name="observacion-sabana" maxlength="250" value="" required autofocus></td>
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
