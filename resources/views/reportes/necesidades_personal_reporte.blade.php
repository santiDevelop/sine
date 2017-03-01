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
    text-align: left;
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
  <h1>Reporte Necesidades Personal:</h1>
 <h2>Cuerpo de bombero:@if(isset($cuerpo->nomcbombero)) {{$cuerpo->nomcbombero}} @else {{'Todas'}} @endif <br> Estacion:@if(isset($estacion->nomestacion)) {{$estacion->nomestacion}} @else {{'Todas'}} @endif <br> Estatus:{{$status}}</h2>
   <div class="wrapper">
    <table id="t01">
    <thead>
    <tr>
      <th>Usuario Solicitante</th>
      <th>Cuerpo de bombero</th>
      <th>Estacion</th>
      <th>Cargo vacante</th>
      <th>Cantidad Solicitada</th>
      <th>Fecha Solicitud</th>
      <th>Observaciones</th>
      <th>Estatus</th>
      
  </tr>
  </thead>
  @foreach($np as $n)
    <tr>

    <td width ='10%'>{{$n->user}} </td>
    <td width ='8%' >{{$n->nomcbombero}}</td>
    <td width ='8%'>{{$n->nomestacion}}</td>
    <td width ='8%'>{{$n->cargo}}</td>
    <td width ='8%' >{{$n->cantidad}}</td>
    <td width ='9%' >{{date("d-m-Y", strtotime($n->fesolicitud))}}</td>
    <td>{{$n->observaciones}}</td>
    <td width ='9%' >
    @php
  switch   ($n->estatusolicitud){
  case  1:
  echo 'Solicitado';
  break;
  case 2:
  echo 'Visto';
  break;
  case 3:
  echo 'Procesado';
  break;
  }
  @endphp
    </td>
  
    
  </tr>
  @endforeach
  
  
  
    </table>
    <table id="total">
      <tr>
       <td>Totales: {{$Suma}}</td>
      </tr>
    </table>
           </div>

<!-- page script -->
<!-- FastClick -->
</body>
</html>