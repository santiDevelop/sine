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

  <h1>Reporte Estadistico de Casos: <img  src="{{ asset('img/logo-fonbe-small.png') }}" align="right"></h1>
 <h2>Cuerpo de bombero:@if(isset($cuerpo->nomcbombero)) {{$cuerpo->nomcbombero}} @else {{'Todos'}} @endif <br> Estacion:@if(isset($estacion->nomestacion)) {{$estacion->nomestacion}} @else {{'Todos'}} @endif <br> Desde Fecha: {{$feini}} Hasta Fecha: {{$fefin}}  <br> Estatus: {{$status}} <br> Estado: @if(isset($estado)) {{$estado->estado}} @else {{'Todos'}} @endif</h2>
 
   <div class="wrapper">
    <table id="t01">
    <thead>
    <tr>
      <th>Categoria Emergencia</th>
      <th>Nro Personas Afectadas</th>
      <th>Nro de Personas Heridas</th>
      <th>Nro de Personas Fallecidas</th>
      
      
      
  </tr>
  </thead>
  @foreach($datos as $d)
  <tr>
    <td>{{$d->nomcatemerg}}</td>
    <td>@if($d->nro_personas==null) {{'0'}}@else {{ number_format($d->nro_personas,0,',','.') }} @endif</td>
    <td>@if($d->nro_heridos==null) {{'0'}}@else {{ number_format($d->nro_heridos,0,',','.') }} @endif</td> 
    <td>@if($d->nro_decesos==null) {{'0'}}@else {{ number_format($d->nro_decesos,0,',','.') }} @endif</td> 
  
  </tr>
  @endforeach
  <table id="total">
    <thead>
      
      <tr>
      @foreach($sumas as $s)
      <th>Casos Atendidos: {{$s->casos}}</th>
      <th>Total Peronas Atendidas: {{$s->nro_personas}}</th>
      <th>Total Personas Heridas: {{$s->nro_heridos}}</th>
      <th>Total Descesos: {{$s->nro_decesos}}</th>
      @endforeach
      </tr>
    </thead>

  </table>
           </div>

<!-- page script -->
<!-- FastClick -->
</body>
</html>