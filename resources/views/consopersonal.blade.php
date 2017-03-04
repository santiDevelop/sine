<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" >
 <style>
table {
    width:100%;
}
table, th, td {
    border-top: 2px solid black;
    border: 1px solid black;
    
    border-collapse: collapse;
    width:300px;
    table-layout:fixed;
    font-size: 13px;
    padding-right: 10px;
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
  margin:0px;
  font-size: 20px;
  text-align: left;

}
h2{
  font-size: 15px;
}
div.row1{
float: left;
}
div.row2{
float: right;
}
</style>
  <body >
  <div><h1>Reporte Consolidado por: <img  src="{{ asset('img/logo-fonbe-small.png') }}" align="right">
  <br> cuerpo de bombero:@if(isset($cuerpo->nomcbombero)) {{$cuerpo->nomcbombero}} @else {{'Todas'}} @endif <br> estacion:@if(isset($estacion->nomestacion)) {{$estacion->nomestacion}} @else {{'Todas'}} @endif</h1> <h2>Total personas: {{$personas}} </h2></div>
   


<div class="row1">
<h3>Talla Calzado</h3>
<table id="t01">
 <thead>
<tr>
  <th>Talla</th>
  <th>Total Suma:</th>
</tr>
  </thead>
@foreach($tcalzado as $calzado)
  <tr>
    <td>{{$calzado->tcalzado}} </td>
    <td>{{$calzado->Suma}}</td>
  </tr>
 @endforeach

</table>

<h3>Talla Pantalon</h3>
<table id="t01">

<tr>
  <th>Talla</th>
  <th>Total Suma:</th>
</tr>
 @foreach($tpantalon as $pantalon)
  <tr>
    <td>{{$pantalon->tpantalon}} </td>
    <td>{{$pantalon->Suma}}</td>
  </tr>
 @endforeach

</table>


<h3>Talla Camisa</h3>
<table id="t01">

<tr>
  <th>Talla</th>
  <th>Total Suma:</th>
</tr>
 @foreach($tcamisa as $camisa)
  <tr>
    <td>{{$camisa->tcamisa}} </td>
    <td>{{$camisa->Suma}}</td>
  </tr>
 @endforeach

</table>






<h3>Profesiones</h3>
<table id="t01">

<tr>
  <th>Profesion</th>
  <th>Total Suma:</th>
</tr>
 @foreach($profesiones as $profesion)
  <tr>
    <td>{{$profesion->profesion}} </td>
    <td>{{$profesion->Suma}}</td>
  </tr>
 @endforeach

</table>


<h3>Nivel Académico</h3>
<table id="t01">

<tr>
  <th>Nivel Académico</th>
  <th>Total Suma:</th>
</tr>
 @foreach($nacademico as $academico)
  <tr>
    <td>{{$academico->nacademico}} </td>
    <td>{{$academico->Suma}}</td>
  </tr>
 @endforeach

</table>
</div>


<div class="row2">
<h3>Rangos</h3>
<table id="t01">

<tr>
  <th>Rango</th>
  <th>Total Suma:</th>
</tr>
 @foreach($rangos as $rango)
  <tr>
    <td>{{$rango->rango}} </td>
    <td>{{$rango->Suma}}</td>
  </tr>
 @endforeach

</table>







<h3>Cargos</h3>
<table id="t01">

<tr>
  <th>Cargo</th>
  <th>Total Suma:</th>
</tr>
 @foreach($cargos as $cargo)
  <tr>
    <td>{{$cargo->cargo}} </td>
    <td>{{$cargo->Suma}}</td>
  </tr>
 @endforeach

</table>


<h3>Estados</h3>
<table id="t01">

<tr>
  <th>Estado</th>
  <th>Total Suma:</th>
</tr>
 @foreach($estados as $estado)
  <tr>
    <td>{{$estado->estado}} </td>
    <td>{{$estado->Suma}}</td>
  </tr>
 @endforeach

</table>

<h3>Sexos</h3>
<table id="t01">

<tr>
  <th>Sexo</th>
  <th>Total Suma:</th>
</tr>
 @foreach($generos as $genero)
  <tr>
    <td>{{$genero->sexo}} </td>
    <td>{{$genero->Suma}}</td>
  </tr>
 @endforeach

</table>

<h3>Estados civil</h3>
<table id="t01">

<tr>
  <th>Estado civil</th>
  <th>Total Suma:</th>
</tr>
 @foreach($ecivil as $edocivil)
  <tr>
    <td>{{$edocivil->ecivil}} </td>
    <td>{{$edocivil->Suma}}</td>
  </tr>
 @endforeach

</table>



</div>
             











           


</body>
</html>