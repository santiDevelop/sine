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
    width:950px;
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
  text-align: center;

}
h2{
  font-size: 15px;
}

</style>
  <!-- Font Awesome -->

  <!-- Theme style -->



  <body >

  <h1>
<img  src="{{ asset('img/logo-fonbe-small.png') }}" align="right">
      ESTADISTICA DE EMERGENCIAS <br> ATENDIDAS A NIVEL  NACIONAL
      <br> 
      POR ESTACIONES - {{$year}}: <br><br></h1>
      
   <div class="wrapper">
    <table id="t01">
    <thead>
    <tr>
      <th width ='20%'>ESTACION</th>
      <th>Ene</th>
      <th>Feb</th>
      <th>Mar</th>
      <th>Abr</th>
      <th>May</th>
      <th>Jun</th>
      <th>Jul</th>
      <th>Ago</th>
      <th>Sep</th>
      <th>Oct</th>
      <th>Nov</th>
      <th>Dic</th>
      <th>Total</th>
      
  </tr>
  </thead>

  @foreach($datos as $d)
  <tr>
    <td>{{$d->nomestacion}}</td>
    <td>{{$d->Ene}}</td>
    <td>{{$d->Feb}}</td>
    <td>{{$d->Mar}}</td>
    <td>{{$d->Abr}}</td>
    <td>{{$d->May}}</td>
    <td>{{$d->Jun}}</td>
    <td>{{$d->Jul}}</td>
    <td>{{$d->Ago}}</td>
    <td>{{$d->Sep}}</td>
    <td>{{$d->Oct}}</td>
    <td>{{$d->Nov}}</td>
    <td>{{$d->Dic}}</td>
    <td>{{$d->Suma}}</td>
  
  </tr>
  @endforeach


  <table id="total">
    <thead>
      @foreach($totales as $t)
      <tr>
     <td width ='20%'>Totales</td>
    <td>{{$t->Ene}}</td>
    <td>{{$t->Feb}}</td>
    <td>{{$t->Mar}}</td>
    <td>{{$t->Abr}}</td>
    <td>{{$t->May}}</td>
    <td>{{$t->Jun}}</td>
    <td>{{$t->Jul}}</td>
    <td>{{$t->Ago}}</td>
    <td>{{$t->Sep}}</td>
    <td>{{$t->Oct}}</td>
    <td>{{$t->Nov}}</td>
    <td>{{$t->Dic}}</td>
    <td>{{$t->Suma}}</td>
      </tr>
      @endforeach
    </thead>

  </table>
           </div>

<!-- page script -->
<!-- FastClick -->
</body>
</html>