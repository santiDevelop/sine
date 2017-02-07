@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
        <h1>
        Administrador de Usuarios
        <small>Edicion de Usuario</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li><a href="/adminuser">Administrador de Usuarios</a></li>
        <li class="active">Edicion de Usuario</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
        <h1>
        Administrador de Usuarios
        <small>Edicion de Usuario</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li><a href="/adminuser">Administrador de Usuarios</a></li>
        <li class="active">Edicion de Usuario</li>
      </ol>
      </div>




    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
       
      <div class="row container">
        <form class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">Nombre:</label>
                <div class="col-md-6">
                <input id="name" type="text" class="form-control" placeholder="Nombre" name="name" value="{{$users->name}}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            
            <div class="form-group{{ $errors->has('user') ? ' has-error' : '' }}">
            <label for="user" class="col-md-2 control-label">Usuario:</label>
                <div class="col-md-6">
                <input id="user" type="text" class="form-control" name="user" placeholder="Usuario" value="{{ $users->user }}" required readonly autofocus>
                    @if ($errors->has('user'))
                    <span class="help-block">
                        <strong>{{ $errors->first('user') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
            <label for="cedula" class="col-md-2 control-label">Cédula:</label>
                <div class="col-md-6">
                <input id="cedula" type="text" class="form-control" name="cedula" placeholder="Cédula" value="{{ $users->cedula }}" required>
                    @if ($errors->has('cedula'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cedula') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
            <label for="cargo" class="col-md-2 control-label">Cargo:</label>
                <div class="col-md-6">
                <select class="form-control" id="cargo" name="cargo" required>
                        @foreach ($cargos as $cargo)
                    <option value="{{$cargo->numcargo}}">{{$cargo->cargo}}</option>
                    @endforeach
                </select>
                    @if ($errors->has('cargo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cargo') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
            <label for="status" class="col-md-2 control-label">Estatus:</label>
                <div class="col-md-6">
                <select class="form-control" id="status" name="status" required>
                        <option value="1">Activo</option>
                        <option value="2">Bloqueado</option>
                </select>
                    @if ($errors->has('status'))
                    <span class="help-block">
                        <strong>{{ $errors->first('status') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

          
            
            <div class="form-group{{ $errors->has('cbombero') ? ' has-error' : '' }}">
            <label for="cbombero" class="col-md-2 control-label">Cuerpo de Bombero Asociado:</label>
                <div class="col-md-6">
                <select class="form-control" id="cbombero" name="cbombero" required>
                    @foreach ($cbomberos as $cbombero)
                    <option value="{{$cbombero->numcbomb}}">{{$cbombero->nomcbombero}}</option>
                    @endforeach
                </select>
                    @if ($errors->has('cbombero'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cbombero') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-2 control-label">Contaseña <em>Ingresar solo si se quiere cambiar</em></label>
                <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password">
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
                        Guardar Cambios
                    </button>
                </div>
            </div>
        </form>
      </div>

    </section>
    <!-- /.content -->


@endsection
