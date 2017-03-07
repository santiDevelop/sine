@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
        <h1>
       Edicion de Elementos
        <small>Edicion de Elementos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Edicion de Elementos</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
         <h1>
       Edicion de Elementos
        <small>Edicion de Elementos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Tablero</a></li>
        <li class="active">Edicion de Elementos</li>

      </ol>
      </div>


    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
   
      <div class="row container">
            <form class="form-horizontal" role="form" method="POST" action="">
                                    {{ csrf_field() }}
                        


                         <div class="form-group{{ $errors->has('tipequip_id') ? ' has-error' : '' }}">
                              <label for="tipequip_id" class="col-md-2 control-label"> tipo Equipamiento:</label>
                                  <div class="col-md-3">
                                  <select class="form-control" id="tipequip_id" name="tipequip_id" required>
                                  @foreach($tipo as $t)
                                  <option @if($t->id==$elemento->tipequip_id)  {{'selected'}} @endif value="{{$t->id}}">{{$t->nomtipequip}}</option>
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
                            <input id="nomelemento" type="text" class="form-control" placeholder="Nombre Elemento" name="nomelemento" maxlength="100" value="{{ $elemento->nomelemento,old('nomelemento') }}" required autofocus>
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
                         
                          
                          <a class="btn btn-default " href="/relementos" role="button">Regresar al menu</a>

                          
                      </div>
                  </div>
            </form>
      </div>


 


    </section>
    <!-- /.content -->

@endsection
