@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
       <div class="hidden-xs hidden-sm">
       <section class="content-header">
       <h1>
        
       <h4> Bienvenido <b>{{auth()->user()->name}} </b></h4>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
        <li class="active">Inicio</li>
      </ol>
      </section>
      </div>
      

    
    <div class="hidden-md hidden-lg">
    <section class="content-header-small">
       <h1>
        
        <small>Pagina de Inicio</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
        <li class="active">Inicio</li>
      </ol>
      </div>
  

    <!-- Main content -->
    <section class="content">
    <img id="logo_principal" src="/img/logo-fonbe.png">
      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->

@endsection
