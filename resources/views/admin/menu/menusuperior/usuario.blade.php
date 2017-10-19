<div class="navbar-custom-menu">
  <ul class="nav navbar-nav">
  <!-- User Account: style can be found in dropdown.less -->
    <li class="dropdown user user-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        @if(Auth::user()->social === 1)
          <img src="{{ Auth::user()->imagen }}" class="user-image" alt="User Image">
        @else
          <img src="/img/ordenes/{{ Auth::user()->imagen }}" class="user-image" alt="User Image">
        @endif

        <span class="hidden-xs">{{ Auth::user()->dato_usuarios->nombre .' '.  Auth::user()->dato_usuarios->apellido}}</span>
      </a>
      <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
          @if(Auth::user()->social === 1)
           <img src="{{ Auth::user()->imagen }}" class="img-circle" alt="User Image">
          @else
            <img src="/img/ordenes/{{ Auth::user()->imagen }}" class="img-circle" alt="User Image">
          @endif
          <p>
            {{ Auth::user()->dato_usuarios->nombre .' '.  Auth::user()->dato_usuarios->apellido}} - {{ Auth::user()->tipo_usuarios->tipo }}
            <small>Miembro desde {{ Date::parse(Auth::user()->created_at)->format('l j \d\e\ F \d\e\ Y')}}</small>
          </p>
        </li>
        <!-- Menu Body -->
        <li class="user-body">
          <div class="col-xs-4 text-center">
            <a href="#">Seguidores</a>
          </div>
          <div class="col-xs-4 text-center">
            <a href="#">Compras</a>
          </div>
          <div class="col-xs-4 text-center">
            <a href="#">Amigos</a>
          </div>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
          <div class="pull-left">
            <a href="{{ route('profile',Auth::user()->username) }}" class="btn btn-default btn-flat">Perfil</a>
          </div>
          <div class="pull-right">
            <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Salir</a>
          </div>
        </li>
      </ul>
    </li>
        <!-- Control Sidebar Toggle Button -->