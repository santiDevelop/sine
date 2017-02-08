@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
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
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
        <h1>
        Cambio de Contraseña
        <small>Panel cambio de Clave</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li><a href="/adminuser">Administración de usuarios</a></li>
        <li class="active">Cambio de Clave</li>
      </ol>
      </div> 

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    
      <div class="row">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/resetpw') }}">
        {{ csrf_field() }}
              <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
                <label for="current_password" class="col-sm-2 control-label">Clave actual</label>
                  <div class="col-sm-4">
                    <input type="password" name="current_password" class="form-control" 
                    id="current_password" placeholder="Clave actual">
                     @if ($errors->has('current_password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('current_password') }}</strong>
                        </span>
                    @endif
                    @if(session('error_clave')) 
                     <span class="help-block">
                            <strong>{{session('error_clave')}}</strong>
                        </span>
                    @endif
                  </div>
              </div>
             
             
              
              <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label for="password_confirmation"  class="col-sm-2 control-label">Nueva clave</label>
                  <div class="col-sm-4">
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Verificar clave">
                     @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              
               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-sm-2 control-label">Verificar clave</label>
                  <div class="col-sm-4">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Nueva clave">
                     @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>


              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-10">
                  <button type="submit" class="btn btn-primary">Cambiar Password</button>
                </div>
              </div>
            </form>
      </div>

    </section>
    <!-- /.content -->

@endsection
