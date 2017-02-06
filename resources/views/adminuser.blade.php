@extends('layouts.app')

@section('content') 
  <!-- Content Wrapper. Contains page content -->
 

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Administración de usuarios
        <small>Panel de Usuarios</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Administración de usuarios</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        Administración de usuarios
        <small>Panel de Usuarios</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Administración de usuarios</li>
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

              <h4>Crear Usuario</h4>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="/register" class="small-box-footer">Crear <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


    </div> <!-- fin row -->


    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Usuarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Usuario</th>
                  <th>Nombre</th>
                  <th>Cedula</th>
                  <th>Perfil de Usuario</th>
                  <th>Acción</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user) 
                <tr>
                  <td>{{$user->user}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->cedula}}</td>
                  <td>@if($user->typeuser==1){{"Administrador"}}@else{{"Usuario"}} @endif</td>
                  <td><a href="/editarusuario/{{$user->id}}" title="Editar Usuario"><i class="fa fa-pencil"></i></a> <a href="editarusuario/{{$user->id}}/eliminar" title="Borrar Usuario"><i class="fa fa-trash"></i></a></td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Usuario</th>
                  <th>Nombre</th>
                  <th>Cedula</th>
                  <th>Perfil de Usuario</th>
                  <th>Acción</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->




    </section>
    <!-- /.content -->
  

    


@endsection
