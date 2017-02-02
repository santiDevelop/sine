@extends('layouts.index')

@section('content')
<div class="row">
  <div class="col-md-6 hidden-xs hidden-sm">
    <div class="logotipo">
  <img src="img/logo-fonbe.png" class="img-responsive" alt="Logo Fonbe">
</div>
  </div>
  <div class="col-md-6">
    <div class="container">
<div class="login-box">
  <div class="login-logo">
    <div class="row">
    <div class="col-md-12 hidden-xs hidden-sm text-rigth">
            <h1>Sigecubo <small> v.0.0.1</small></h1>
        </div>
        <div class="col-xs-3 visible-xs visible-sm">
            <img src="img/logo-fonbe-small.png" class="img-responsive" alt="">
        </div>
        <div class="col-sm-9 visible-xs visible-sm">
            <h1>Sigecubo <small> v.0.0.1</small></h1>
        </div>
    </div>
    
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresa sus credenciales para acceder al sistema</p>

   <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
      <div class="has-feedback">
      <div class="form-group{{ $errors->has('user') ? ' has-error' : '' }}">
        <input id="user" type="text" class="form-control" name="user" value="{{ old('user') }}" placeholder="Usuario" required autofocus>

                                @if ($errors->has('user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user') }}</strong>
                                    </span>
                                @endif
        <span class="fa fa-user-circle form-control-feedback"></span>
      </div>
      </div>
     
      <div class="has-feedback">
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input id="password" type="password" class="form-control" name="password" placeholder="Clave" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
        <span class="fa fa-key form-control-feedback"></span>
    </div>
    </div>
    
    <div class="row">
        <div class="form-group">
            <div class="col-md-6">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Recordarme
                     </label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- /.col -->
        <div class="col-md-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>
        
        <!-- /.col -->
      </div>
    </form>

 

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
  </div>
</div>
@endsection
