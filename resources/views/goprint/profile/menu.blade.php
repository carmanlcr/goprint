<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{ route('index') }}">
                <img src="../assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
            <div class="menu-toggler sidebar-toggler"> </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->

        <div class="top-menu">
        	@if(Auth::check())
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    	@if(Auth::user()->social === 1)
                        	<img alt="" class="img-circle" src="{{ Auth::user()->imagen }}" />
                        @else
							<img alt="" class="img-circle" src="/img/ordenes/{{ Auth::user()->imagen }}" />
                        @endif
                        <span class="username username-hide-on-mobile"> {{ Auth::user()->dato_usuarios->nombre.' '.Auth::user()->dato_usuarios->apellido }}</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="{{ route('profile',Auth::user()->username)}}">
                                <i class="icon-user"></i> Mi Perfil </a>
                        </li>
                        @if(Auth::user()->tipo_usuarios_id === 2)
                            <li>
                                <a href="{{ route('admin.index') }}">
                                    <i class="fa fa-unlock" aria-hidden="true"></i> Panel de administración
                                </a>
                            </li>
                        @endif
                        <li class="divider"> </li>

                        <li>
                            <a href="{{ route('logout') }}">
                                <i class="icon-key"></i> Cerrar Sesión </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a href="{{ route('logout') }}" class="dropdown-toggle">
                        <i class="icon-logout"></i>
                    </a>
                </li>
                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
            @else
            	<a href="{{ route('index') }}"><i class="icon-key"></i> Inicio </a>
            @endif
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->