@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
        <h1>
        Elementos de tipo de equipamiento
        <small>Elementos de tipo de equipamiento</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Elementos de tipo de equipamiento</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
         <h1>
        Elementos de tipo de equipamiento
        <small>Elementos de tipo de equipamiento</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Elementos de tipo de equipamiento</li>
      </ol>
      </div>


    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
   
      <div class="row container">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/relementos') }}">
                                    {{ csrf_field() }}
                        


                         <div class="form-group{{ $errors->has('tipequip_id') ? ' has-error' : '' }}">
                              <label for="tipequip_id" class="col-md-2 control-label"> tipo Equipamiento:</label>
                                  <div class="col-md-3">
                                  <select class="form-control" id="tipequip_id" name="tipequip_id" required>
                                  @foreach($tipo as $t)
                                  <option value="{{$t->id}}">{{$t->nomtipequip}}</option>
                                   @endforeach
                                        </select>
                                      @if ($errors->has('tipequip_id'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('tipequip_id') }}</strong>
                                      </span>
                                      @endif
                                  </div>
                         </div>




                        

                         <div class="form-group{{ $errors->has('nomelemento') ? ' has-error' : '' }}">
                        <label for="nomelemento" class="col-md-2 control-label">Nombre Elemento:</label>
                            <div class="col-md-6">
                            <input id="nomelemento" type="text" class="form-control" placeholder="Nombre Elemento" name="nomelemento" maxlength="100" value="{{ old('nomelemento') }}" required autofocus>
                                @if ($errors->has('nomelemento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nomelemento') }}</strong>
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
            
            <!-- /.box-header -->
            <div class="table-responsive">
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                 <th>Tipo Elemento</th>
                  <th>Numero de Elemento</th>
                  <th>Nombre elemento</th>
                  <th width="10%">Editar o Borrar</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($elementos))
               @foreach($elementos as $e)
                <tr>
                  <td>{{$e->nomtipequip}}</td>
                  <td>{{$e->id}}</td>
                  <td>{{$e->nomelemento}} </td>
                  <td><a href="/editelemento/{{$e->id}}" title="Editar Elemento"><i class="fa fa-pencil"></i></a> <a type="button" data-toggle="modal" data-target="#model-{{ $e->id }}" title="Borrar Elemento"><i class="fa fa-trash"></i></a></td>
                </tr>
                <div class="modal fade" id="model-{{ $e->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmarLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Confirmación </h4>
                      </div>
                      <div class="modal-body">
                        <p>¿Está seguro de eliminar el elemento "{{$e->nomelemento}}"?</p>
                        <small>De ser así se borrara para siempre a este elemento de la base de datos.</small>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        
                        <a href="/editelemento/{{$e->id}}/eliminar" type="button" class="btn btn-primary">Si, Eliminar</a>
                        
                        
                      </div>
                    </div>
                  </div>
                </div><!-- /.modal -->

               @endforeach 
               
               @endif
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
