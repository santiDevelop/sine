@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
        <h1>
        Maestro de cargos
        <small>Registro de Cargos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de cargos</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
         <h1>
        Maestro de cargos
        <small>Registro de Cargos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de cargos</li>
      </ol>
      </div>


    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
   
      <div class="row container">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/mcargos') }}">
                                    {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('numcargo') ? ' has-error' : '' }}">
                        <label for="numcargo" class="col-md-2 control-label">Numero Cargo:</label>
                            <div class="col-md-1">
                            <input id="numcargo" type="text" class="form-control" placeholder="Numero de Cargo" name="numcargo" maxlength="3" value="{{$numero }}" required >
                                @if ($errors->has('numcargo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numcargo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
                        <label for="cargo" class="col-md-2 control-label">Cargo:</label>
                            <div class="col-md-6">
                            <input id="cargo" type="text" class="form-control" placeholder="Nombre de Cargo" name="cargo" maxlength="100" value="{{ old('cargo') }}" required autofocus>
                                @if ($errors->has('cargo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cargo') }}</strong>
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
              <h3 class="box-title">Cargos Creados</h3>
            </div>
            <!-- /.box-header -->
            <div class="table-responsive">
            <div class="box-body">
              <table id="example3" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                 <th>Numero Cargo</th>
                  <th>Nombre de Cargo</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($historico as $h) 
                <tr>
                  <td width="30%">{{$h->numcargo}}</td>
                  <td>{{$h->cargo}}</td>
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
