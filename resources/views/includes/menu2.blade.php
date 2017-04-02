<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">PANEL DE CONTROL</li>
        <!-- Optionally, you can add icons to the links -->
        <!-- INICIO VISTA ADMINISTRADOR -->
      
        <li class="treeview">
          <a href="#"><i class="fa fa-eye"></i> <span>Panel administrativo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
                    <a href="#"><i class="fa fa-puzzle-piece"></i> <span>Manejo de tablas maestras</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                      <ul class="treeview-menu">
                         @if (auth()->user()->is_admin)
                        <li class="treeview">
                        <a href="/mcbombero">
                          <i class="fa fa-fire-extinguisher"></i>
                          <span>Maestro de cuerpo <br/>de bomberos</span>
                        </a>
                        </li>
                        <li class="treeview">
                        <a href="/mestaciones">
                          <i class="fa  fa-cab"></i>
                          <span>Maestro de Estaciones</span>
                        </a>
                        </li>
                        <li class="treeview">
                        <a href="/mcargos">
                          <i class="fa fa-tasks"></i>
                          <span>Maestro de cargos</span>
                        </a>
                        </li>
                        <li class="treeview">
                        <a href="/mpcargos">
                          <i class="fa fa-thumb-tack"></i>
                          <span>Maestro de Rangos</span>
                        </a>
                        </li>
                        <li class="treeview">
                        <a href="/mtequipos">
                          <i class="fa fa-wrench"></i>
                          <span>Maestro de tipos <br/>de equipamiento</span>
                        </a>
                        </li>
                        <li class="treeview">
                        <a href="/mcemergencia">
                          <i class="fa fa-bullhorn"></i>
                          <span>Maestro de categorización <br/>de emergencias</span>
                        </a>
                        </li>
                        @endif

                      </ul>
            </li>
            <li class="treeview">
                    <a href="#"><i class="fa fa-id-badge"></i> <span>Control de usuarios y claves</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                      <ul class="treeview-menu">
                        @if (auth()->user()->is_admin)
                       <li class="treeview">
                        <a href="/adminuser">
                          <i class="fa fa-users"></i>
                          <span>Administración de usuarios</span>
                        </a>
                        </li>
                          @endif
                          <li class="treeview">
                            <a href="/resetpw">
                            <i class="fa fa-key"></i>
                            <span>Cambio de clave</span>
                            </a>
                          </li> 
                      </ul>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-cubes"></i> <span>Módulos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li class="treeview">
          <a href="#"><i class="fa fa-universal-access"></i> <span>Gestión humana</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>                     
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
          <a href="/adminpersonal"><i class="fa fa-pencil-square-o"></i> <span>Crear/Editar Personal</span>
          </a>
          <a href="/necesidadespersonal"><i class="fa fa-user-circle-o"></i> <span>Crear/Editar Necesidades</span>
          </a>

         </li>



          <li class="treeview">
          <a href="/reportespersonal"><i class="fa fa-bar-chart"></i> <span>Reportes</span>
            
          </a> </li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-binoculars"></i> <span>Gestión de recursos y equipos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="treeview" >
            <a href="/relementos"><i class="fa fa-pencil"></i><span>Registro equipamiento</span>
            </a>
            </li>
            <li class="treeview" >
            <a href="/regdata"><i class="fa fa-newspaper-o"></i><span>Registro de Existencias</span>
            </a>
           
           <li class="treeview" >
            <a href="/regnecesidades"><i class="fa fa-hand-paper-o"></i><span>Registro Necesidades</span>
            </a>
            </li>

           
            <li class="treeview" >
            <a href="/reportesgestion"><i class="fa fa-bar-chart"></i><span>Reportes</span>
            </a>
            </li>
          </ul>
        </li>
            <li class="treeview">
          <a href="#"><i class="fa fa-ticket"></i> <span>Gestión de casos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="treeview" ><a href="/regcasos"><i class="fa fa-flag"></i><span>Registro de casos atendidos</span></a></li>
          <li class="treeview" ><a href="/reportecasos"><i class="fa fa-map-marker"></i><span>Reportes</span></a></li>
          </ul>
        </li>

          </ul>
        </li>
        <li class="treeview">
                            <a href="/resetpw">
                            <i class="fa fa-key"></i>
                            <span>Cambio de clave</span>
                            </a>
                          </li> 
                      </ul>
      </ul>

          <!-- FIN DE VISTA DE ADMINISTRADOR -->
         
      </ul>

      <!-- /.sidebar-menu -->
    </section>

    <!-- /.sidebar -->
  </aside>
