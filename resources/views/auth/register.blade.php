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
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Tablero</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a></li>

          <li class="active treeview">
          <a href="#">
            <i class="fa fa-user-circle"></i> <span>Administración de usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a></li>

          <li>
          <a href="#">
            <i class="fa fa-fire-extinguisher"></i> <span>Maestro de cuerpo <br/>de bomberos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a></li>

          <li>
          <a href="#">
            <i class="fa fa-tasks"></i> <span>Maestro de cargos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a></li>

          <li>
          <a href="#">
            <i class="fa fa-cogs"></i> <span>Maestro de perfil de cargos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a></li>


          <li>
          <a href="#">
            <i class="fa fa-wrench"></i> <span>Maestros de tipos <br/>de equipamiento</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a></li>

          <li>
          <a href="#">
            <i class="fa fa-bullhorn"></i> <span>Maestro de categorización <br/>de emergencias</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a></li>

          <li>
          <a href="#">
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
        Creación de Nuevo Usuario
        <small>Formulario de Registro</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li><a href="#">Administración de usuarios</a></li>
        <li class="active">Nuevo Usuario</li>
      </ol>
    </section>
  

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    
      <div class="row">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Nombre:</label>
                <div class="col-md-6">
                <input id="name" type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            
            <div class="form-group{{ $errors->has('user') ? ' has-error' : '' }}">
            <label for="user" class="col-md-4 control-label">Usuario:</label>
                <div class="col-md-6">
                <input id="user" type="text" class="form-control" name="user" placeholder="Usuario" value="{{ old('user') }}" required autofocus>
                    @if ($errors->has('user'))
                    <span class="help-block">
                        <strong>{{ $errors->first('user') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">Correo electrónico:</label>
                <div class="col-md-6">
                <input id="email" type="email" class="form-control" placeholder="Correo electrónico" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
            <label for="cedula" class="col-md-4 control-label">Cédula:</label>
                <div class="col-md-6">
                <input id="cedula" type="text" class="form-control" name="cedula" placeholder="Cédula" value="{{ old('cedula') }}" required>
                    @if ($errors->has('cedula'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cedula') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
            <label for="cargo" class="col-md-4 control-label">Cargo:</label>
                <div class="col-md-6">
                <select class="form-control" id="cargo" name="cargo" required>
                        <option value="1">Cargo 1</option>
                        <option value="2">Cargo 2</option>
                </select>
                    @if ($errors->has('cargo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cargo') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
            <label for="status" class="col-md-4 control-label">Estatus:</label>
                <div class="col-md-6">
                <select class="form-control" id="status" name="status" required>
                        <option value="1">Activo</option>
                        <option value="2">Suspendido</option>
                </select>
                    @if ($errors->has('status'))
                    <span class="help-block">
                        <strong>{{ $errors->first('status') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('typeuser') ? ' has-error' : '' }}">
            <label for="typeuser" class="col-md-4 control-label">Perfil de Usuario:</label>
                <div class="col-md-6">
                <select class="form-control" id="typeuser" name="typeuser" required>
                        <option value="1">Perfil 1</option>
                        <option value="2">Perfil 2</option>
                </select>
                    @if ($errors->has('typeuser'))
                    <span class="help-block">
                        <strong>{{ $errors->first('typeuser') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            
            <div class="form-group{{ $errors->has('cbombero') ? ' has-error' : '' }}">
            <label for="cbombero" class="col-md-4 control-label">Cuerpo de Bombero Asociado:</label>
                <div class="col-md-6">
                <select class="form-control" id="cbombero" name="cbombero" required>
                        <option value="1">Cuerpo de Bombero 1</option>
                        <option value="2">Cuerpo de Bombero 2</option>
                </select>
                    @if ($errors->has('cbombero'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cbombero') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Contaseña</label>
                <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

             <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </div>
        </form>
      </div>

    </section>
    <!-- /.content -->


@endsection
