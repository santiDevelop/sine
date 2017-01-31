@extends('layouts.app')

@section('content')
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="buscar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">PANEL DE CONTROL</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active treeview">
          <a href="/home">
            <i class="fa fa-dashboard"></i> <span>Tablero</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a></li>

          <li>
          <a href="/adminuser">
            <i class="fa fa-user-circle"></i> <span>Administración de usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a></li>

          <li>
          <a href="/mcbombero">
            <i class="fa fa-fire-extinguisher"></i> <span>Maestro de cuerpo <br/>de bomberos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a></li>

          <li>
          <a href="/mcargos">
            <i class="fa fa-tasks"></i> <span>Maestro de cargos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a></li>

          <li>
          <a href="/mpcargos">
            <i class="fa fa-cogs"></i> <span>Maestro de perfil de cargos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a></li>


          <li>
          <a href="/mtequipos">
            <i class="fa fa-wrench"></i> <span>Maestros de tipos <br/>de equipamiento</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a></li>

          <li>
          <a href="/mcemergencia">
            <i class="fa fa-bullhorn"></i> <span>Maestro de categorización <br/>de emergencias</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a></li>

          <li>
          <a href="/resetpw">
            <i class="fa fa-key"></i> <span>Cambio de clave</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tablero
        <small>Pagina de Inicio</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Inicio</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->

@endsection
