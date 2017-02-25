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
  <div class="col-md-12 " ><h1>Reporte Consolidado por:
  <br> cuerpo de bombero:@if(isset($cuerpo->nomcbombero)) {{$cuerpo->nomcbombero}} @else {{'Todas'}} @endif <br> estacion:@if(isset($estacion->nomestacion)) {{$estacion->nomestacion}} @else {{'Todas'}} @endif</h1> <h2>Total personas: {{$personas}} </h2></div>
   <div class="row">

<div class="col-md-4">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Talla Calzado</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
    @foreach($tcalzado as $calzado)
      <div>{{$calzado->tcalzado}} <span class="pull-right-container">
        <small class="label pull-right bg-blue">{{$calzado->Suma}}</small></span></div>
      @endforeach
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>

<div class="col-md-4">
      <!-- DONUT CHART -->
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Talla Pantalón</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        @foreach($tpantalon as $pantalon)
      <div>{{$pantalon->tpantalon}} <span class="pull-right-container">
        <small class="label pull-right bg-blue">{{$pantalon->Suma}}</small></span></div>
      @endforeach
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>

<div class="col-md-4">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Talla Camisa</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
      @foreach($tcamisa as $camisa)
      <div>{{$camisa->tcamisa}} <span class="pull-right-container">
        <small class="label pull-right bg-blue">{{$camisa->Suma}}</small></span></div>
      @endforeach
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>
</div>

<div class="row">

<div class="col-md-4">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Profesión</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
      @foreach($profesiones as $profesion)
      <div>{{$profesion->profesion}} <span class="pull-right-container">
        <small class="label pull-right bg-blue">{{$profesion->Suma}}</small></span></div>
      @endforeach
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>

<div class="col-md-4">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Nivel Académico</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
     @foreach($nacademico as $academico)
      <div>{{$academico->nacademico}} <span class="pull-right-container">
        <small class="label pull-right bg-blue">{{$academico->Suma}}</small></span></div>
      @endforeach
     
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>

<div class="col-md-4">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Rango</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
       @foreach($rangos as $rango)
      <div>{{$rango->rango}} <span class="pull-right-container">
        <small class="label pull-right bg-blue">{{$rango->Suma}}</small></span></div>
      @endforeach
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>
</div>

<div class="row">

<div class="col-md-4">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Cargo</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
      @foreach($cargos as $cargo)
      <div>{{$cargo->cargo}} <span class="pull-right-container">
        <small class="label pull-right bg-blue">{{$cargo->Suma}}</small></span></div>
      @endforeach
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>

<div class="col-md-4">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Estado</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
      @foreach($estados as $estado)
      <div>{{$estado->estado}} <span class="pull-right-container">
        <small class="label pull-right bg-blue">{{$estado->Suma}}</small></span></div>
      @endforeach
     
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>

<div class="col-md-4">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Sexo</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
      @foreach($generos as $genero)
      <div>@if($genero->sexo==1) {{'Masculino'}} @else {{'Femenino'}} @endif <span class="pull-right-container">
        <small class="label pull-right bg-blue">{{$genero->Suma}}</small></span></div>
      @endforeach
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>

<div class="col-md-4">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Estado civil</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
     @foreach($ecivil as $edocivil)
      <div>{{$edocivil->ecivil}} <span class="pull-right-container">
        <small class="label pull-right bg-blue">{{$edocivil->Suma}}</small></span></div>
      @endforeach
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>
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