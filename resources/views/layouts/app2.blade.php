<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" >
    <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/bootstrap/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/plugins/datatables/dataTables.bootstrap.css">
   <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="/plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="/css/AdminLTE.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/iCheck/square/blue.css">
  <!-- Styles -->
  <link href="/css/skins/skin-blue.css" rel="stylesheet">
  <!-- Select2 -->
  <link href="/dist/css/select2.min.css" rel="stylesheet">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
        
</div>
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
<nav class="navbar-default navbar-static-top">
           <div class="row">
                <div class="col-xs-8">
                            <img src="/img/gobierno-bilivariano.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-xs-4 a-toda-vida">

                            <img src="/img/logo-zamora.png" class="img-responsive" alt="">
                </div>
            
        </nav>
    <!-- Logo -->
    <a href="/home" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SINECUBO</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SINECUBO </b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-sign-out"></i>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <p>
                   {{auth()->user()->user}}
                </p>
                <button class="btn btn-info btn-sm" href="{{ url('/logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Salir del sistema
                </button>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                                            {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
 
        @include('includes.menu2')
        @yield('content')
        

   </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      SINECUBO 
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#">Fonbe</a>.</strong> Todos los Derechos Reservados.
  </footer>

 
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/js/app.min.js"></script>
<script src="/plugins/datatables/jquery.dataTables.js"></script>
<script src="/plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- SlimScroll -->
<script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/plugins/fastclick/fastclick.js"></script>
<!-- page script -->
<!-- bootstrap time picker -->
<script src="/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- FastClick -->
<script src="/js/bootbox.min.js"></script>
<!-- page script -->
<!-- Select 2 script -->
<script src="/dist/js/select2.min.js"></script>
<!-- cdn for modernizr, if you haven't included it already -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
@yield('personal_scripts')

      @if(session('notification'))        
        <script type="text/javascript">
        
          bootbox.alert({
          message: "<strong>{{session('notification')}}<strong>",
          size: 'small',
          backdrop: true
              });
        </script>
          @endif
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
  <script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
</script>
</body>
</html>