@extends('layouts.app')

@section('content') 
  <!-- Content Wrapper. Contains page content -->
 

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Administración de personal
        <small>Panel para crear o editar personal</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Módulos</li>
        <li>Gestión humana</li>
        <li class="active">Administración de personal</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        Administración de personal
        <small>Panel para crear o editar personal</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li>Módulos</li>
        <li>Gestión humana</li>
        <li class="active">Administración de personal</li>
      </ol>
      </div>
    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    <div class="row">
      <div class="col-xs-4 ">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><i class="fa fa-user-plus"></i></h3>

              <h4>Crear Necesidad Personal</h4>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="/npersonal" class="small-box-footer">Crear <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        

        <div class="col-xs-4 ">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><i class="fa fa-user-plus"></i></h3>

              <h4>Crear Necesidad Capacitacion</h4>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/ncapacitacion" class="small-box-footer">Crear <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

    </div> <!-- fin row -->


    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado Necesidades Personal</h3>
            </div>
            <!-- /.box-header -->
            <div class="table-responsive">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th width ='8%'>Numero de Solicitud</th>
                  <th>Cargo Necesitado</th>
                  <th>Cuerpo de Bombero</th>
                  <th>Estacion</th>
                  <th>fecha Solicitud</th>
                  <th>Estatus</th>
                  <th>Acción</th>
                </tr>
                </thead>
                <tbody>
                @foreach($personals as $personal)
                <tr>
                  <td>{{$personal->id}}</td>
                  <td>{{$personal->cargo}}</td>
                  <td>{{$personal->nomcbombero}}</td>
                  <td>{{$personal->nomestacion}}</td>
                  <td>{{$personal->fesolicitud}}</td>
                  <td> @php
                        switch   ($personal->estatusolicitud){
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
                        @endphp</td>
                  <td><a href="/editnpersonal/{{$personal->id}}" title="Editar Necesidad Personal "><i class="fa fa-pencil"></i></a> </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Numero de Solicitud</th>
                  <th>Cargo Necesitado</th>
                  <th>Cuerpo de Bombero</th>
                  <th>Estacion</th>
                  <th>fecha Solicitud</th>
                  <th>Estatus</th>
                  <th>Acción</th>
                </tr>
                </tfoot>
              </table>
               </div>
            </div>
            <!-- /.box-body -->
         
          <!-- /.box -->

</div>

    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado Necesidades de Capacitacion</h3>
            </div>
            <!-- /.box-header -->
            <div class="table-responsive">
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th width ='8%' >Numero de Solicitud</th>
                  <th>Curso Necesitado</th>
                  <th>Cuerpo de Bombero</th>
                  <th>Estacion</th>
                  <th>fecha Solicitud</th>
                  <th>Estatus</th>
                  <th>Acción</th>
                </tr>
                </thead>
                <tbody>
                @foreach($nc as $n)
                <tr>
                  <td >{{$n->id}}</td>
                  <td>{{$n->nomcurso}}</td>
                  <td>{{$n->nomcbombero}}</td>
                  <td>{{$n->nomestacion}}</td>
                  <td>{{$n->fesolicitud}}</td>
                  <td> @php
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
                        @endphp</td>
                  <td><a href="/editncapacitacion/{{$n->id}}" title="Editar Necesidad de Capacitacion  "><i class="fa fa-pencil"></i></a> </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>Numero de Solicitud</th>
                 <th>Curso Necesitado</th>
                  <th>Cuerpo de Bombero</th>
                  <th>Estacion</th>
                  <th>fecha Solicitud</th>
                  <th>Estatus</th>
                  <th>Acción</th>
                </tr>
                </tfoot>
              </table>
               </div>
            </div>
            <!-- /.box-body -->
         
          <!-- /.box -->

</div>



<!-- MODAL PARA CONFIRMAR LA ELIMINACION DE USUARIO -->

<div class="modal fade" id="confirmar" tabindex="-1" role="dialog" aria-labelledby="confirmarLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirmación </h4>
      </div>
      <div class="modal-body">
        <p>¿Está seguro de eliminar a la persona?</p>
        <small>De ser así se borrara para siempre a esta persona de la base de datos.</small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Si, Eliminar</button>
      </div>
    </div>
  </div>
</div><!-- /.modal -->

    </section>
    <!-- /.content -->
  

    


@endsection
