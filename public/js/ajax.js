$('#cbombero').on('change',BuscarEstacion);


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