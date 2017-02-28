<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">PANEL DE CONTROL</li>
        <!-- Optionally, you can add icons to the links -->
        <!-- INICIO VISTA ADMINISTRADOR -->
       <li><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="#"><i class="fa fa-line-chart"></i> <span>Reportes</span></a></li>
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
          <a href="#"><i class="fa fa-binoculars"></i> <span>Gestión de recursos y equipos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview" >
              <a href="#"><i class="fa fa-pencil-square-o"></i><span>Registro</span>
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
                    <ul class="treeview-menu">
                        <li class="treeview" ><a href="/reginfraestructura"><i class="fa fa-university"></i><span>Infraestructura</span></a></li>
                        <li class="treeview" ><a href="/regutilitario"><i class="fa fa-bed"></i><span>Material utilitario</span></a></li>
                        <li class="treeview" ><a href="/regautomotor"><i class="fa fa-truck"></i><span>Unidades automotoras</span></a></li>
                        <li class="treeview" ><a href="/regequipos"><i class="fa fa-life-ring"></i><span>Equipos y herramientas</span></a></li>
                        <li class="treeview" ><a href="/reguniformes"><i class="fa fa-child"></i><span>Uniformes</span></a></li>
                        <li class="treeview" ><a href="regmatofc"><i class="fa fa-print"></i><span>Material y equipo de oficina</span></a></li>
                        <li class="treeview" ><a href="/regcomunicaciones"><i class="fa fa-fax"></i><span>Comunicaciones</span></a></li>
                    </ul>
            </li>
           <li class="treeview" >
           <a href="#"><i class="fa fa-user-circle-o"></i><span>Necesidades</span>
           <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
                    
                    <ul class="treeview-menu">
                        <li class="treeview" ><a href="/necinfraestructura"><i class="fa fa-university"></i><span>Infraestructura</span></a></li>
                        <li class="treeview" ><a href="/necutilitario"><i class="fa fa-bed"></i><span>Material utilitario</span></a></li>
                        <li class="treeview" ><a href="/necautomotor"><i class="fa fa-truck"></i><span>Unidades automotoras</span></a></li>
                        <li class="treeview" ><a href="/necequipos"><i class="fa fa-life-ring"></i><span>Equipos y herramientas</span></a></li>
                        <li class="treeview" ><a href="/necuniformes"><i class="fa fa-child"></i><span>Uniformes</span></a></li>
                        <li class="treeview" ><a href="necmatofc"><i class="fa fa-print"></i><span>Material y equipo de oficina</span></a></li>
                        <li class="treeview" ><a href="/neccomunicaciones"><i class="fa fa-fax"></i><span>Comunicaciones</span></a></li>
                    </ul>

           </li>
            <li class="treeview" >
            <a href="#"><i class="fa fa-bar-chart"></i><span>Reportes</span>
            </a>
            </li>
          </ul>
        </li>
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


         </li>


            <li class="treeview">
          <a href="#"><i class="fa fa-user-circle-o"></i> <span>Necesidades</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            
          </a>

                        <ul class="treeview-menu">
                          <li class="treeview">
                        <a href="/npersonal"><i class="fa fa-user-plus "></i> <span>Personal</span>
                        </a></li>

                          <li class="treeview">
                        <a href="/ncapacitacion"><i class="fa fa-graduation-cap"></i> <span>Capacitación</span>
                          
                        </a> </li>

                        </ul> </li>

          <li class="treeview">
          <a href="/reportespersonal"><i class="fa fa-bar-chart"></i> <span>Reportes</span>
            
          </a> </li>

          </ul>
        </li>
            <li class="treeview">
          <a href="#"><i class="fa fa-ticket"></i> <span>Gestión de casos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="treeview" ><a href="#"><i class="fa fa-flag"></i><span>Registro de casos atendidos</span></a></li>
          <li class="treeview" ><a href="#"><i class="fa fa-map-marker"></i><span>Zonificación de casos</span></a></li>
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