$('#cbombero').on('change',BuscarEstacion);
$('#cbombero2').on('change',BuscarEstacion2);
$('#cbombero3').on('change',BuscarEstacion3);
$('#cbombero4').on('change',BuscarEstacion4);

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