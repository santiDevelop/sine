@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
        <h1>
        Maestro de tipos de equipamiento
        <small>Creacion de tipos de equipamiento</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de tipos de equipamiento</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
        <h1>
        Maestro de tipos de equipamiento
        <small>Creacion de tipos de equipamiento</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de tipos de equipamiento</li>
      </ol>
      </div>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
  <div class="row container">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/mtequipos') }}">
                                  {{ csrf_field() }}
                      <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                      <label for="id" class="col-md-2 control-label">Numero tipo de equipamiento:
                      </label>
                          <div class="col-md-1">
                          <input id="id" type="text" class="form-control" placeholder="Numero tipo de equipamiento" name="id" maxlength="3" value="{{ $numero }}" required >
                              @if ($errors->has('id'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('id') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                       <div class="form-group{{ $errors->has('nomtipequip') ? ' has-error' : '' }}">
                      <label for="nomtipequip" class="col-md-2 control-label">Nombre tipo de equipamiento:</label>
                          <div class="col-md-6">
                          <input id="nomtipequip" type="text" class="form-control" placeholder="Nombre tipo de equipamiento" name="nomtipequip" maxlength="100" value="{{ old('nomtipequip') }}" required autofocus>
                              @if ($errors->has('nomtipequip'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nomtipequip') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                       <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Registrar
                        </button>
                    </div>
                </div>
          </form>
   </div>

 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tipos de Equipamiento Creados</h3>
            </div>
            <!-- /.box-header -->
            <div class="table-responsive">
            <div class="box-body">
              <table id="example3" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                 <th>Numero Tipos de Equipamiento</th>
                  <th>Nombre Tipos de Equipamiento</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($historico as $h) 
                <tr>
                  <td width="30%">{{$h->id}}</td>
                  <td>{{$h->nomtipequip}}</td>
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
