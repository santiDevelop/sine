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


    </div> <!-- fin row -->


    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Usuarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="table-responsive">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>Apellido</th>
                  <th>Nombre</th>
                  <th>Cédula</th>
                  <th>Fecha de nacimiento</th>
                  <th>Lugar de nacimiento</th>
                  <th>Sexo</th>
                  <th>Estado civil</th>
                  <th>Número de hijos</th>
                  <th>Teléfono</th>
                  <th>Correo electrónico</th>
                  <th>Dirección</th>
                  <th>Camisa</th>
                  <th>Pantalón</th>
                  <th>Calzado</th>
                  <th>Acción</th>
                </tr>
                </thead>
                <tbody>
                
                <tr>
                  <td>Ronaldo</td>
                  <td>Cristiano</td>
                  <td>c12345678</td>
                  <td>05/02/1985</td>
                  <td>Funchal,Madeira,Portugal</td>
                  <td>Maculino</td>
                  <td>Soltero</td>
                  <td>1</td>
                  <td>55555555</td>
                  <td>cr7@halamdrid.com</td>
                  <td>Casa 7 del fraccionamiento 7, Madrid, España</td>
                  <td>M</td>
                  <td>M</td>
                  <td>7</td>
                  <td><a href="#" title="Editar Usuario"><i class="fa fa-pencil"></i></a> <a type="button" data-toggle="modal" data-target="#confirmar" href="#" title="Borrar Usuario"><i class="fa fa-trash"></i></a></td>
                </tr>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Apellido</th>
                  <th>Nombre</th>
                  <th>Cédula</th>
                  <th>Fecha de nacimiento</th>
                  <th>Lugar de nacimiento</th>
                  <th>Sexo</th>
                  <th>Estado civil</th>
                  <th>Número de hijos</th>
                  <th>Teléfono</th>
                  <th>Correo electrónico</th>
                  <th>Dirección</th>
                  <th>Camisa</th>
                  <th>Pantalón</th>
                  <th>Calzado</th>
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
        <p>¿Está seguro de eliminar a la persona  “Aquí Nombre y Apellido”?</p>
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
