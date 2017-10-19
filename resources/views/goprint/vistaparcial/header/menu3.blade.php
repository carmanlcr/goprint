<div class="pm-nav-container">
  <div class="container">
    <div class="row" >
      <div class="col-lg-8 col-md-8 col-sm-12">
        <nav class="navbar-collapse collapse" id="pm-main-navigation">
          <ul class="sf-menu pm-nav">
            <li><a href="{{ route('index') }}" class="fa fa-home" id="pm-home-btn"></a></li>
            <li>
              <a href="{{ route('index') }}">Inicio</a>
            </li>
            <li class="dropdown">
              <a data-toggle="dropdown" class="sf-with-ul" href="#">
                <span class=""></span>
                <span class="">Servicios</span>
                <span class="sf-sub-indicator"><i class="fa fa-angle-down"></i></span>
              </a>
              <ul class="dropdown-menu extended logout">
                <li>
                  <a href="{{ route('optimizar') }}"><i class=""></i> Optimización de Archivo para Impresion</a>
                </li>
                <li>
                  <a href="{{ route('crear') }}"><i class=""></i> Crear Archivo de Impresion desde Boceto</a>
                </li>
              </ul>
              <li><a href="{{ route('blog.index') }}">Blog</a></li>
              <li><a href="{{ route('contactanos') }}">Contactenos</a></li>
            </li>
          </ul>
        </nav> 
      </div><!--fin col-lg-8 col-md-8 col-sm-12 -->
      <div class="col-lg-4 col-md-4 col-sm-12 pm-main-menu">
        <ul class="pm-cart-info">
          <li><p><strong>Comunícate con nosotros al:</strong></p></li>
          <li><p> + 51 976048631</p></li> 
          @if(Auth::check())
            <li><a href="{{ route('mostrar_carrito') }}"><i class="fa fa-shopping-cart"></i></a></li>
          @endif           
        </ul>            
      </div>
    </div>
  </div>
</div>