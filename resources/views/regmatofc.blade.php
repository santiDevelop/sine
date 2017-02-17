@extends('layouts.app')

@section('content')

div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
          
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Registro de Meterial y Equipos de oficina
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Registro</li>
        <li class="active">Meterial y Equipos de oficina</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        Registro de Meterial y Equipos de oficina
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Gestión de recursos y equipos</li>
        <li>Registro</li>
        <li class="active">Meterial y Equipos de oficina</li>
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
                  <td>Resmas de hojas</td>
                  <td> <input id="cant-total-hojas" type="number" class="form-control" placeholder="Cantidad" name="cant-total-hojas" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-hojas" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-hojas" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-hojas" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-hojas" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-hojas" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-hojas" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-hojas" type="text" class="form-control" placeholder="Observacón" name="observacion-hojas" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Lápiz</td>
                  <td> <input id="cant-total-lapiz" type="number" class="form-control" placeholder="Cantidad" name="cant-total-lapiz" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-lapiz" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-lapiz" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-lapiz" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-lapiz" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-lapiz" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-lapiz" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-lapiz" type="text" class="form-control" placeholder="Observacón" name="observacion-lapiz" maxlength="250" value="" required autofocus></td>
                </tr>
                
               <tr>
                  <td>Bolígrafos</td>
                  <td> <input id="cant-total-boligrafo" type="number" class="form-control" placeholder="Cantidad" name="cant-total-boligrafo" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-boligrafo" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-boligrafo" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-boligrafo" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-boligrafo" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-boligrafo" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-boligrafo" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-boligrafo" type="text" class="form-control" placeholder="Observacón" name="observacion-boligrafo" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Marcadores</td>
                  <td> <input id="cant-total-marcador" type="number" class="form-control" placeholder="Cantidad" name="cant-total-marcador" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-marcador" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-marcador" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-marcador" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-marcador" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-marcador" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-marcador" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-marcador" type="text" class="form-control" placeholder="Observacón" name="observacion-marcador" maxlength="250" value="" required autofocus></td>
                </tr>

                 <tr>
                  <td>Almohadilla</td>
                  <td> <input id="cant-total-almohadilla" type="number" class="form-control" placeholder="Cantidad" name="cant-total-almohadilla" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-almohadilla" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-almohadilla" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-almohadilla" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-almohadilla" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-almohadilla" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-almohadilla" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-almohadilla" type="text" class="form-control" placeholder="Observacón" name="observacion-almohadilla" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Monitor</td>
                  <td> <input id="cant-total-monitor" type="number" class="form-control" placeholder="Cantidad" name="cant-total-monitor" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-monitor" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-monitor" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-monitor" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-monitor" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-monitor" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-monitor" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-monitor" type="text" class="form-control" placeholder="Observacón" name="observacion-monitor" maxlength="250" value="" required autofocus></td>
                </tr>
                
               <tr>
                  <td>Impresora</td>
                  <td> <input id="cant-total-impresora" type="number" class="form-control" placeholder="Cantidad" name="cant-total-impresora" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-impresora" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-impresora" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-impresora" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-impresora" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-impresora" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-impresora" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-impresora" type="text" class="form-control" placeholder="Observacón" name="observacion-impresora" maxlength="250" value="" required autofocus></td>
                </tr>

                <tr>
                  <td>Toner o Tinta</td>
                  <td> <input id="cant-total-tinta" type="number" class="form-control" placeholder="Cantidad" name="cant-total-tinta" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-optima-tinta" type="number" class="form-control" placeholder="Cantidad" name="cant-optima-tinta" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-deteriorado-tinta" type="number" class="form-control" placeholder="Cantidad" name="cant-deteriorado-tinta" maxlength="1" value="" required autofocus></td>
                  <td><input id="cant-fuera-servicio-tinta" type="number" class="form-control" placeholder="Cantidad" name="cant-fuera-servicio-tinta" maxlength="1" value="" required autofocus></td>
                  <td> <input id="observacion-tinta" type="text" class="form-control" placeholder="Observacón" name="observacion-tinta" maxlength="250" value="" required autofocus></td>
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
