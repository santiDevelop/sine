@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
      <h1>
        Maestro de categorización de emergencia 
        <small>Creacion Categoria Emergencia</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de categorización de emergencia</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
      <h1>
        Maestro de categorización de emergencia 
        <small>Creacion Categoria Emergencia</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de categorización de emergencia</li>
      </ol>
      </div>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
    <div class="row container">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/mcemergencia') }}">
                                  {{ csrf_field() }}
                      <div class="form-group{{ $errors->has('numcatemerg') ? ' has-error' : '' }}">
                      <label for="numcatemerg" class="col-md-2 control-label">Numero Categoria Emergencia:
                      </label>
                          <div class="col-md-1">
                          <input id="numcatemerg" type="text" class="form-control" placeholder="Numero Categoria Emergencia" name="numcatemerg" maxlength="3" value="{{ $numero }}" required >
                              @if ($errors->has('numcatemerg'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('numcatemerg') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                       <div class="form-group{{ $errors->has('nomcatemerg') ? ' has-error' : '' }}">
                      <label for="nomcatemerg" class="col-md-2 control-label">Categoria Emergencia:</label>
                          <div class="col-md-6">
                          <input id="nomcatemerg" type="text" class="form-control" placeholder="Categoria Emergencia" name="nomcatemerg" maxlength="100" value="{{ old('nomcatemerg') }}" required autofocus>
                              @if ($errors->has('nomcatemerg'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nomcatemerg') }}</strong>
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
              <h3 class="box-title">categorización de emergencia Creados</h3>
            </div>
            <!-- /.box-header -->
            <div class="table-responsive">
            <div class="box-body">
              <table id="example3" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                 <th>Numero categorización de emergencia</th>
                  <th>Nombre categorización de emergencia</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($historico as $h) 
                <tr>
                  <td width="30%">{{$h->numcatemerg}}</td>
                  <td>{{$h->nomcatemerg}}</td>
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
