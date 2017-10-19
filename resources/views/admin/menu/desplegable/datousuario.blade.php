<div class="user-panel">
	<div class="pull-left image">
	    @if(Auth::user()->social === 1)
	    	<img src="{{ Auth::user()->imagen }}" class="user-image" alt="img-circle">
	    @else
	    	<img src="/img/ordenes/{{ Auth::user()->imagen }}" class="img-circle" alt="User Image">
	    @endif
	</div>
	<div class="pull-left info">
		<p>{{ Auth::user()->dato_usuarios->nombre.' '.Auth::user()->dato_usuarios->apellido }}</p>
		<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
	</div>
</div>