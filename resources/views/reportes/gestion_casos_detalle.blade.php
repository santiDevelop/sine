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
div#t01 span:nth-child(even) {
    background-color: #eee;
}
div#total {
    border-top: none;
}
div#t01 span:nth-child(odd) {
   background-color:#fff;
}
div#t01 th {
    background-color: #3399ff;
    color: white;
}

h1,tfoot{
  padding:0px;
  margin:0px;
  font-size: 20px;
  text-align: left;

}
h1{
  font-size: 25px;
  text-align: center;
}
div.row1{
float: left;
}
div.row2{
float: right;
}
</style>
  <!-- Font Awesome -->

  <!-- Theme style -->



  <body >


  <div class="titulo">
  <h1>Reporte detallado del Caso: <img  src="{{ asset('img/logo-fonbe-small.png') }}" align="right"></h1>
  </div>

    @foreach($datos as $d)
  <div class=" ">
   <div id="t01">
    <span class="label label-default">Numero Caso:</span>
    <input type="text" name="" value="{{$d->id}}">
    </div>
    <div id="t01">
    <span class="label label-default">Fecha Caso:</span>
    <input type="text" name="" value="{{$d->fecha}}">
    </div>
    <div id="t01">
    <span class="label label-default">Cuerpo de Bombero Registrador: </span>
    <input type="text" name="" value="{{$d->nomcbombero}}">
    </div>
    <div id="t01">
    <span class="label label-default">Estacion Registrador: </span>
    <input type="text" name="" value="{{$d->nomestacion}}">
    </div>
  </div>

<div >
    <div id="t01">
    <span class="label label-default">Emergencia Atendida:</span>
    <input type="text" name="" value="{{$d->nomcatemerg}}">
    </div>
    <div id="t01">
    <span class="label label-default">Condicion del Evento:</span>
    <input type="text" name="" value="{{$status}}">
    </div>
    <div id="t01">
    <span class="label label-default">Estado del Evento: </span>
    <input type="text" name="" value="{{$d->estado}}">
    </div>
    <div id="t01">
    <span class="label label-default">Direccion del Evento: </span>
    <input type="text" name="" value="{{$d->direccion}}">
    </div>
    <div id="t01">
    <span class="label label-default">Bomberos Asociados:@if(isset($personal)) @foreach($personal as $p)
    <input type="text" name="" value="{{$p->cedbombero}} ">
    @endforeach @endif</span>
    </div>
    <div id="t01">
    <span class="label label-default">Descripcion del Evento: </span>
    <input type="text" name="" value="{{$d->descripcion}}">
       </div>  
</div>
@endforeach
<!-- page script -->
<!-- FastClick -->
</body>
</html>