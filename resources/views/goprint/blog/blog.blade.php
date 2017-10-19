@extends('goprint.template')

@section('css')
	{!!Html::style('css/blog/blog.css')!!}
@endsection	

@section('content')
	
	<div class="container pm-containerPadding110">
    	<div class="row">
        	<div class="col-lg-12 pm-center pm-column-spacing">
            	<h5>Bienvenidos a Nuestro Blog</h5>
                <div class="pm-column-title-divider">
                	<img height="29" width="29" src="img/logo/loguito.png" alt="icon">
                </div>
            </div>
        </div>
        @if(Auth::check())
	        @if(Auth::user()->tipo_usuario != 1)
		        <ul class="sf-menu pm-nav" >
		        	<li><a class="btn-danger btn-blog" href="{{ route('blog.create') }}">Crear</a></li>
		        </ul>	
		        <br><br>
	        @endif
	    @endif
        <div class="container pm-containerPadding-top-40 pm-containerPadding-bottom-40">
            <div class="row">
            	@foreach($posts as $item)
					<a href="{{ route('blog.show',$item->slug) }}">
						<div class="col-lg-4 col-md-4 col-sm-2">
							<div class="blog">
								<img src="/img/ordenes/{{ $item->imagen }}" class="img-responsive img-thumbnail">
								
									<h3>{{ $item->titulo }}</h3>
									<p>{{ Date::parse($item->created_at)->format('l j \d\e\ F \d\e\ Y')}}</p>
									<p> {{ $item->descripcion_corta }} </p>
								
								 <span class="editor">Editor: </span><a href="{{ route('profile',$item->users->username) }}"><span class="nombre-editor">{{ $item->users->username }}</span></a>
							</div>
						</div>
					</a>
				@endforeach
            </div>
            <div align="center">
					{{ $posts->links() }}
			</div>
        </div>
    </div>
	
	
@stop