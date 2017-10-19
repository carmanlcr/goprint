@extends('goprint.template')
	@section('css')
		{!!Html::style('css/productos/index.css')!!}
	@endsection

	@section('content')
		
		@include('goprint.vistaparcial.index.slider.slider')


		<div class="container pm-containerPadding-top-40 pm-containerPadding-bottom-40" id="product"><!-- Contenedor de carrusel -->
    		<div class="row">
	        	@foreach($productos as $producto)
		        	<div class="product col-lg-4 col-md-4 col-sm-6">
		        		<center><img class="img-responsive img-product" src="/img/ordenes/{{ $producto->imagen }}"/></center>
		        		<p>{{ $producto->nombre }}</p>
		        		<p><span class="label label-success" style="font-size:14px;">{{ $producto->precio }} S</span> </p>
		        		<p><a class="btn-danger" href="{{ route('solicitudproducto',$producto->slug) }}">Solicitar</strong> </a></p>
		        	</div>
		        @endforeach
			    
			</div>
			<div align="center">
					{{ $productos->links() }}
			</div>
		</div>
		<!--@if((Auth::check() && $cantidad_ordenes == null) || Auth::guest())
			@include('goprint.vistaparcial.index.modal')
		@endif-->
		@include('goprint.vistaparcial.index.preguntasfrecuentes')
		@include('goprint.vistaparcial.index.partners')


	@endsection
	
	@section('js')
		{!!Html::script('js/productos/index.js')!!}

	@stop

