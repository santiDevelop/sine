@extends('layouts.app')

@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cambio de Contraseña
        <small>Panel cambio de Clave</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li><a href="/adminuser">Administración de usuarios</a></li>
        <li class="active">Cambio de Clave</li>
      </ol>
    </section>
  

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    
      <div class="row">
        <form class="form-horizontal">
              <div class="form-group">
                <label for="current_password" class="col-sm-2 control-label">Clave actual</label>
                  <div class="col-sm-4">
                    <input type="password" class="form-control" id="current_password" placeholder="Clave actual">
                  </div>
              </div>
             
              <div class="form-group">
                <label for="new_password" class="col-sm-2 control-label">Nueva clave</label>
                  <div class="col-sm-4">
                    <input type="password" class="form-control" id="new_password" placeholder="Nueva clave">
                  </div>
              </div>
              
              <div class="form-group">
                <label for="confirm_password" class="col-sm-2 control-label">Repetid nueva clave</label>
                  <div class="col-sm-4">
                    <input type="password" class="form-control" id="confirm_password" placeholder="Repetid nueva clave">
                  </div>
              </div>



              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </div>
            </form>
      </div>

    </section>
    <!-- /.content -->

@endsection
