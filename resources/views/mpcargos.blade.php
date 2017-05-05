@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Maestro de Rangos
        <small>Creacion de Rangos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de Rangos</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        Maestro de Rangos
        <small>Creacion de Rangos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de Rangos</li>
      </ol>
      </div>

    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row container">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/mpcargos') }}">
                                  {{ csrf_field() }}
                      <div class="form-group{{ $errors->has('numrango') ? ' has-error' : '' }}">
                      <label for="numrango" class="col-md-2 control-label">Numero Perfil de Rango:
                      </label>
                          <div class="col-md-1">
                          <input id="numrango" type="text" class="form-control" placeholder="Numero Perfil de Rango" name="numrango" maxlength="3" value="{{$numero}}" required >
                              @if ($errors->has('numrango'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('numrango') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                       <div class="form-group{{ $errors->has('rango') ? ' has-error' : '' }}">
                      <label for="rango" class="col-md-2 control-label">Nombre Rango:</label>
                          <div class="col-md-6">
                          <input id="rango" type="text" class="form-control" placeholder="Nombre de Perfil de Rango" name="rango" maxlength="100" value="{{ old('rango') }}" required autofocus>
                              @if ($errors->has('rango'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('rango') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                       <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Registrar
                        </button>
                        <a class="btn btn-default " href="/home" role="button">Regresar al menu</a>
                    </div>
                </div>
          </form>
   </div>

  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Rangos Creados</h3>
            </div>
            <!-- /.box-header -->
            <div class="table-responsive">
            <div class="box-body">
              <table id="example3" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                 <th>Numero Rango</th>
                  <th>Nombre de Rango</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($historico as $h) 
                <tr>
                  <td width="30%">{{$h->numrango}}</td>
                  <td>{{$h->rango}}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
               </div>
            </div>
            <!-- /.box-body -->
         
          <!-- /.box -->

</div>
    </section>
    <!-- /.content -->

@endsection
