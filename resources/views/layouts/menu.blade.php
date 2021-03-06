<!--Main sidebar -->
<div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigación
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="sidebar-user-material-body">
                <div class="card-body text-center">
                    <a href="#">
                        <img src="{{ asset('img/hombre.png') }}" class="img-fluid rounded-circle img-thumbnail shadow-1 mb-3" width="80" height="80" alt="">
                    </a>
                    <h6 class="mb-0 text-white text-shadow-dark">{{ Auth::user()->name }}</h6>
                    <span class="font-size-sm text-white text-shadow-dark">{{ Auth::user()->email }}</span>
                </div>
                                            
                <div class="sidebar-user-material-footer">
                    <a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse">
                        <span>Mi cuenta</span>
                    </a>
                </div>
            </div>

            <div class="collapse" id="user-nav">
                <ul class="nav nav-sidebar">
                    <li class="nav-item">
                        <a href="{{ route('miPerfil') }}" class="nav-link">
                            <i class="icon-user-plus"></i>
                            <span>Mi perfil</span>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                            <i class="icon-switch2"></i>
                            <span>Salir</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link" id="m_home">
                        <i class="fas fa-home"></i> <span>Inicio</span>
                    </a>
                </li>

                
                @role('Administrador')
                    
                    <li class="nav-item">
                        <a href="{{ route('ventas') }}" class="nav-link" id="m_ventas">
                                <i class="fas fa-shopping-cart"></i>Ventas</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('propiedadesFed') }}" class="nav-link" id="m_propiedades">
                            <i class="fas fa-users-cog"></i> <span>Propiedades</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('autoridades') }}" class="nav-link" id="m_autoridades">
                            <i class="fas fa-users-cog"></i> <span>Autoridades</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('asociaciones') }}" class="nav-link" id="m_asociacion">
                            <i class="fas fa-warehouse"></i> <span>Asociaciones</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="{{ route('cantones') }}" class="nav-link" id="m_canton">
                            <i class="fas fa-map-marked"></i> <span>Cantones</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('comunidadesLista') }}" class="nav-link" id="m_comunidad">
                        <i class="fas fa-map-marker-alt"></i> <span>Comunidades</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('noticiasAdmin') }}" class="nav-link" id="m_noticia">
                                <i class="fas fa-rss"></i> <span>Noticias</span>
                        </a>
                    </li>


                @endrole
                
                @role('Administrador|Asociacion')
                <li class="nav-item">
                    <a href="{{ route('usuarios') }}" class="nav-link" id="m_usuarios">
                        <i class="fas fa-users"></i><span>Usuarios</span>
                    </a>
                </li>

                
                <li class="nav-item">
                    <a href="{{ route('miAsociaciones') }}" class="nav-link" id="m_miasociaciones">
                        <i class="fas fa-map-marker-alt"></i><span>Mis Asociaciones</span>
                    </a>
                </li>
                @endrole

                <li class="nav-item">
                    <a href="{{ route('reportes') }}" class="nav-link" id="m_reportes">
                        <i class="fas fa-chart-pie"></i><span>Reportes</span>
                    </a>
                </li>

              

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->
    
</div>
<!-- /main sidebar