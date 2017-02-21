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

              <h4>Crear Personal</h4>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="/regbombero" class="small-box-footer">Crear <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        

        <div class="col-xs-4 ">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><i class="fa fa-user-plus"></i></h3>

              <h4>Crear Cursos</h4>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/regcurso" class="small-box-footer">Crear <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

    </div> <!-- fin row -->


    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Personal</h3>
            </div>
            <!-- /.box-header -->
            <div class="table-responsive">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Cédula</th>
                  <th>Estatus</th>
                  
                  <th>Acción</th>
                </tr>
                </thead>
                <tbody>
                @foreach($personals as $personal)
                <tr>
                  <td>{{$personal->nombombero}}</td>
                  <td>{{$personal->apebombero}}</td>
                  <td>{{ number_format($personal->cedbombero,0,',','.') }}</td>
                   <td>
                    @php
                 switch($personal->status){
                  case 1:
                  echo 'Activo';
                  break;
                  case 2:
                  echo 'Egresado';
                  break;
                  case 3:
                  echo 'Suspendido';
                  break;
                  case 4:
                  echo 'Vacaciones';
                  break;
                  }
                  @endphp
                  </td>
                  
                  <td><a href="/editarpersonal/{{$personal->id}}" title="Editar Personal"><i class="fa fa-pencil"></i></a> <a type="button" data-toggle="modal" data-target="#confirmar" href="/borrarpersonal/{{$personal->id}}" title="Borrar Personal"><i class="fa fa-trash"></i></a></td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Cédula</th>
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
