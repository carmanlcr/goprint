<header>
  <div class="container" >
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="pm-header-logo-container">
          <a href="{{ route('index') }}"><img src="/img/menu/logo.png" class="img-responsive pm-header-logo" alt="GoPrint"></a> 
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <ul class="pm-header-info">
          <li><p><i class="fa fa-mobile-phone"></i> + 51 976048631</p></li>
          <li><p> <i class="fa fa-inbox"></i> &nbsp;<a href="mailto:ventas@goprint.pe">ventas@goprint.pe</a></p></li>
        </ul>
        <ul class="pm-search-container">
          <li>
            <ul class="sf-menu pm-nav">
              @if(Auth::guest())
                <li><a class="btn-danger" href="{{ route('register') }}" id="btn_registrar">Registrarse</a></li>
                <li><a class="btn-danger" href="{{ route('login') }}" id="btn_iniciarsesion">Iniciar Sesión</a></li>
              @else
                @include('goprint.vistaparcial.header.iconousuario')
              @endif
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>             
</header>