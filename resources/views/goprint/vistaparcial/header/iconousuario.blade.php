<li class="dropdown dropdown-usuario">
	@if(Auth::check())<!--Si hay un usuario conectado muestra las siguientes opciones-->
		<a href="route('index')" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="check">
			@if(Auth::user()->imagen == null)
				<i class="fa fa-user fa-2x"></i> 
			@else
				@if(Auth::user()->social === 1)
					<img src="{{ Auth::user()->imagen }}" alt="" height="40px" width="40px" class="img-circle"> 
				@else
					<img src="/img/ordenes/{{ Auth::user()->imagen }}" alt="" height="40px" width="40px" class="img-circle"> 
				@endif
			@endif
			  {{ Auth::user()->dato_usuarios->nombre.' '.Auth::user()->dato_usuarios->apellido }}</a>
        <ul class="dropdown-menu" role="menu">
			@if(Auth::user()->tipo_usuarios_id === 2) <!--Si el usuario es SuperUsuario o Administrador tendrá permisos para ir al panel-->
				<li><a href="{{ route('admin.index') }}">Panel de Administración</a>
			@endif 
			<li><a href="{{ route('profile',Auth::user()->username) }}"><i class="fa fa-user-circle" aria-hidden="true"></i> Perfil</a><hr>
			<li><a href="{{route('logout')}}"><i class="fa fa-sign-out" aria-hidden="true" id="cerrarsesion"></i> Cerrar Sesión</a>
		</ul> 
	@endif   
</li>
