<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" >
    <!-- Bootstrap 3.3.6 -->
  
 <style>
table {
    width:100%;
}
table, th, td {
    border-top: 2px solid black;
    border: 1px solid black;
    border-collapse: collapse;
    width:1050px;
    table-layout:fixed;
    font-size: 13px;
}
th, td {
    padding: 5px;
    text-align: Center;
    word-wrap:break-word;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#total {
    border-top: none;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: #3399ff;
    color: white;
}

h1,tfoot{
  padding:0px;
  margin-bottom: 0px;
  font-size: 20px;
  text-align: left;

}
h2{
  font-size: 15px;
}

</style>
  <!-- Font Awesome -->

  <!-- Theme style -->



  <body >

  <h1>Reporte de Existencias de Equipos y Suministros: <img  src="{{ asset('img/logo-fonbe-small.png') }}" align="right"></h1>
 <h2>Cuerpo de bombero:@if(isset($cuerpo->nomcbombero)) {{$cuerpo->nomcbombero}} @else {{'todos'}} @endif <br> Estacion:@if(isset($estacion->nomestacion)) {{$estacion->nomestacion}} @else {{'todos'}} @endif <br></h2>
 
   <div class="wrapper">
    <table id="t01">
    <thead>
    <tr>
      <th>Tipo de equipo</th>
      <th>Nombre de equipo</th>
      <th>Total Existencia</th>
      <th>Total Optimas</th>
      <th>Total Deteriorado</th>
      <th>Total Fuera Servicio</th>
      
      
  </tr>
  </thead>
  @foreach($datos as $d)
  <tr>
    <td>{{$d->nomtipequip}}</td>
    <td>{{$d->nomelemento}}</td>
    <td>@if($d->cant_total==null) {{'0'}}@else {{ number_format($d->cant_total,0,',','.') }} @endif</td> 
    <td>@if($d->cant_optima==null) {{'0'}}@else {{ number_format($d->cant_optima,0,',','.') }} @endif</td> 
    <td>@if($d->cant_deteriorado==null) {{'0'}}@else {{ number_format($d->cant_deteriorado,0,',','.') }} @endif</td> 
    <td>@if($d->cant_fuera==null) {{'0'}}@else {{ number_format($d->cant_fuera,0,',','.') }} @endif</td>

  </tr>
  @endforeach
  
           </div>

<!-- page script -->
<!-- FastClick -->
</body>
</html>