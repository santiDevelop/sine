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
                                            <a class="btn btn-default " href="/home" role="button">Regresar al menu</a>
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
                                      <th width="10%">Editar o Borrar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($historico as $h) 
                                    <tr>
                                      <td width="30%">{{$h->numcbomb}}</td>
                                      <td>{{$h->nomcbombero}}</td>
                                     <td><a href="#" title="Editar Elemento"><i class="fa fa-pencil"></i></a> <a type="button" data-toggle="modal" data-target="#model-{{ $h->id }}" title="Borrar Elemento"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <div class="modal fade" id="model-{{ $h->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmarLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Confirmación </h4>
                                          </div>
                                          <div class="modal-body">
                                            <p>¿Está seguro de eliminar el Cuerpo de Bombero "{{$h->nomcbombero}}"?</p>
                                            <small>De ser así se borrara para siempre a este elemento de la base de datos.</small>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            
                                            <a href="#" type="button" class="btn btn-primary">Si, Eliminar</a>
                                            
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div><!-- /.modal -->
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
