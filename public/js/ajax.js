$('#cbombero').on('change',BuscarEstacion);
$('#cbombero2').on('change',BuscarEstacion2);

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