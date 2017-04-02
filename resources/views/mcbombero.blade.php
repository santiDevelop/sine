@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        Maestro de cuerpo de bomberos
        <small>Creacion de Cuerpo de Bomberos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de cuerpo de bomberos</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        Maestro de cuerpo de bomberos
        <small>Creacion de Cuerpo de Bomberos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Maestro de Cuerpo de Bomberos</li>
      </ol>
      </div>




    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
    
                          <div class="row container">
                              <form class="form-horizontal" role="form" method="POST" action="{{ url('/mcbombero') }}">
                                                      {{ csrf_field() }}
                                          <div class="form-group{{ $errors->has('numcbomb') ? ' has-error' : '' }}">
                                          <label for="numcbomb" class="col-md-2 control-label">Numero Cuerpo Bombero:</label>
                                              <div class="col-md-1">
                                              <input id="numcbomb" type="text" class="form-control" placeholder="Numero C. Bombero" name="numcbomb" maxlength="3" value="{{$numero }}" required >
                                                  @if ($errors->has('numcbomb'))
                                                      <span class="help-block">
                                                          <strong>{{ $errors->first('numcbomb') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>

                                           <div class="form-group{{ $errors->has('nomcbombero') ? ' has-error' : '' }}">
                                          <label for="nomcbombero" class="col-md-2 control-label">Cuerpo Bombero:</label>
                                              <div class="col-md-6">
                                              <input id="nomcbombero" type="text" class="form-control" placeholder="Nombre de Cuerpo Bombero" name="nomcbombero" maxlength="100" value="{{ old('nomcbombero') }}" required autofocus>
                                                  @if ($errors->has('nomcbombero'))
                                                      <span class="help-block">
                                                          <strong>{{ $errors->first('nomcbombero') }}</strong>
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
                                  <h3 class="box-title">Cuerpo de Bomberos Creados</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="table-responsive">
                                <div class="box-body">
                                  <table id="example3" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                     <th>Numero Cuerpo bombero</th>
                                      <th>Nombre Cuerpo de Bombero</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($historico as $h) 
                                    <tr>
                                      <td width="30%">{{$h->numcbomb}}</td>
                                      <td>{{$h->nomcbombero}}</td>
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
