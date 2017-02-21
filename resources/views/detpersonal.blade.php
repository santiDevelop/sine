<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" >
    <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/bootstrap/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="/css/AdminLTE.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/iCheck/square/blue.css">
  <!-- Styles -->
  <link href="/css/skins/skin-blue.css" rel="stylesheet">

  <body >
   <div class="wrapper">
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Cedula</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Fecha Nacimiento</th>
                  <th>Lugar de nacimiento</th>
                  <th>Genero</th>
                  <th>Estado Civil</th>
                  <th>Numero de hijos</th>
                  <th>Estado</th>
                  <th>Telefono</th>
                  <th>Corre Electronico</th>
                  <th>Direccion</th>
                  <th>Talla camisa</th>
                  <th>talla pantalon</th>
                  <th>Talla Calzado</th>
                  <th>Profesion</th>
                  <th>Nivel Academico</th>
                  <th>Ultimo titulo</th>
                  <th>Cursos</th>
                  <th>Egresado</th>
                  <th>Rango</th>
                  <th>Cargo</th>
                  <th>Fecha Ingreso</th>
                  <th>Proximo ascenso</th>
                  <th>Cuerpo de bombero</th>
                  <th>Estacion</th>
                  <th>Estatus</th>
                </tr>
                </thead>
                <tbody>
                @foreach($personals as $personal)
                <tr>
                
                  <td>{{ number_format($personal->cedbombero,0,',','.') }}</td>
                  <td>{{$personal->nombombero}}</td>
                  <td>{{$personal->apebombero}}</td>
                  <td>{{$personal->fnacimiento}}</td>
                  <td>{{$personal->lnacimiento}}</td>
                  <td>@if($personal->sexo==1) {{'Masculino'}} @else {{'Femenino'}} @endif</td>
                  <td> 
                  @php
                 switch($personal->ecivil){
                  case 1:
                  echo 'Soltero';
                  break;
                  case 2:
                  echo 'Casado';
                  break;
                  case 3:
                  echo 'Divorciado';
                  break;
                  case 4:
                  echo 'Viudo';
                  break;
                  }
                  @endphp
                  </td>
                  <td>{{$personal->nhijos}}</td>
                  
                  <td>@foreach($estados as $estado)@if($personal->estado==$estado->id) {{$estado->estado}} @endif @endforeach</td>
                  
                  <td>{{$personal->telbombero}}</td>
                  <td>{{$personal->correoelec}}</td>
                  <td>{{$personal->dirbombero}}</td>
                  <td>{{$personal->tcamisa}}</td>
                  <td>{{$personal->tpantalon}}</td>
                  <td>{{$personal->tcalzado}}</td>
                  <td>{{$personal->profesion}}</td>
                  <td>{{$personal->nacademico}}</td>
                  <td>{{$personal->ultitulo}}</td>
                  
                  <td>@foreach ($cursos as $curso) @if($curso->id_bombero==$personal->id) <ul><li>{{$curso->nomcurso}}</li></ul> @endif @endforeach</td>
                 
                  <td>{{$personal->egresado}}</td>
                  <td>{{$personal->rango}}</td>
                  
                  <td>@foreach($cargos as $cargo) @if($personal->cargo_id==$cargo->id) {{$cargo->cargo}} @endif @endforeach</td>
                  
                  <td>{{$personal->feingreso}}</td>
                  <td>{{$personal->proximoascenso}}</td>
                  
                  <td>@foreach($cbomberos as $cbombero) @if($cbombero->id==$personal->mcbombero_id) {{$cbombero->nomcbombero}} @endif  @endforeach</td>
                 
                  
                  <td>@foreach($estaciones as $estacion) @if($estacion->id==$personal->estacion_id) {{$estacion->nomestacion}} @endif @endforeach</td>
                  
                  <td>
                    @php
                 switch($personal->status){
                  case 1:
                  echo 'Activo';
                  break;
                  case 2:
                  echo 'Egresado';
                  break;
                  case 3:
                  echo 'Suspendido';
                  break;
                  case 4:
                  echo 'Vacaciones';
                  break;
                  }
                  @endphp
                  </td>
                  
                </tr>
                @endforeach
                </tbody>
              
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           </div>

           <script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/js/app.min.js"></script>
<script src="/plugins/datatables/jquery.dataTables.js"></script>
<script src="/plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- SlimScroll -->
<script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/plugins/fastclick/fastclick.js"></script>
<!-- page script -->
<!-- FastClick -->
<script src="/js/bootbox.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>