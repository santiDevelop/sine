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
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#total {
    border-top: none;
    text-align: center;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: blue;
    color: white;
}

h1,tfoot{
  text-align: center;

}
</style>
  <!-- Font Awesome -->

  <!-- Theme style -->



  <body >
  <h1>Reporte de Solicitudes de Capacitacion</h1>
   <div class="wrapper">
    <table id="t01">
    <thead>
    <tr>
      <th>Usuario Solicitante</th>
      <th>Cuerpo de bombero</th>
      <th>Estacion</th>
      <th>Curso Solicitado</th>
      <th>Cantidad Solicitada</th>
      <th>Fecha Solicitud</th>
      <th>Observaciones</th>
      <th>Estatus</th>
      
  </tr>
  </thead>
  @foreach($nc as $n)
    <tr>

    <td> {{$n->user}} </td>
    <td>{{$n->nomcbombero}}</td>
    <td>{{$n->nomestacion}}</td>
    <td>{{$n->nomcurso}}</td>
    <td>{{$n->cantidad}}</td>
    <td>{{date("d-m-Y", strtotime($n->fesolicitud))}}</td>
    <td>{{$n->observaciones}}</td>
    <td>
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
        <td>Totales</td>
      </tr>
    </table>
           </div>

<!-- page script -->
<!-- FastClick -->
</body>
</html>