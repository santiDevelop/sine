$('#cbombero').on('change',BuscarEstacion);
$('#cbombero2').on('change',BuscarEstacion2);
$('#cbombero3').on('change',BuscarEstacion3);
$('#cbombero4').on('change',BuscarEstacion4);
$('#tipo_id').on('change',BuscarLista);

function BuscarEstacion(){

  var cbombero=$(this).val();
  var html='<option value="0"> Todas </option>';
  $.get('/api/reportespersonal/'+cbombero+'/estaciones',function(data){
    for (var i = 0; i<data.length; ++i) {
    html +='<option value="'+data[i].id+'">'+data[i].nomestacion+'</option>';
      
    }
    $('#estacion').html(html);


  });


}

  function BuscarEstacion2(){

  var cbombero2=$(this).val();
  var html='<option value="0"> Todas </option>';
  $.get('/api/reportespersonal/'+cbombero2+'/estaciones',function(data){
    for (var i = 0; i<data.length; ++i) {
    html +='<option value="'+data[i].id+'">'+data[i].nomestacion+'</option>';
      
    }
    $('#estacion2').html(html);
  });


}

  function BuscarEstacion3(){

  var cbombero3=$(this).val();
  var html='<option value="0"> Todas </option>';
  $.get('/api/reportespersonal/'+cbombero3+'/estaciones',function(data){
    for (var i = 0; i<data.length; ++i) {
    html +='<option value="'+data[i].id+'">'+data[i].nomestacion+'</option>';
      
    }
    $('#estacion3').html(html);
  });


}

  function BuscarEstacion4(){

  var cbombero4=$(this).val();
  var html='<option value="0"> Todas </option>';
  $.get('/api/reportespersonal/'+cbombero4+'/estaciones',function(data){
    for (var i = 0; i<data.length; ++i) {
    html +='<option value="'+data[i].id+'">'+data[i].nomestacion+'</option>';
      
    }
    $('#estacion4').html(html);
  });


}

  function BuscarLista(){
  var input='';
  var lista=$(this).val();
  $.get('/api/BuscarListaEquip/'+lista,function(data){
    for (var i = 0; i<data.length; ++i) {
    input +=('<tr><td>'+data[i].nomelemento+'</td><td> <input id="cant-total" type="number" class="form-control" placeholder="Cantidad" name="cant_total['+i+']" value="" required autofocus></td><td><input id="cant-optima" type="number" class="form-control" placeholder="Cantidad" name="cant_optima['+i+']" value="" required autofocus></td><td><input id="cant-deteriorado" type="number" class="form-control" placeholder="Cantidad" name="cant_deteriorado['+i+']" value="" required autofocus></td><td><input id="cant-fuera-servicio" type="number" class="form-control" placeholder="Cantidad" name="cant_fuera_servicio['+i+']" value="" required autofocus></td><td><input id="cant-deteriorado" type="text" class="form-control" placeholder="Marca" name="marca['+i+']" value="" required autofocus></td><td><input id="marca" type="text" class="form-control" placeholder="Modelo" name="modelo['+i+']" value="" required autofocus></td><td><input id="modelo" type="text" class="form-control" placeholder="Serial" name="serial_fabrica['+i+']" value="" required autofocus></td><td> <input id="serial-fabrica" type="text" class="form-control" placeholder="Observacón" name="observacion['+i+']" maxlength="250" value="" required autofocus></td></tr>')

      
    }
    $('.lista-tipo').html(input);
  });


}