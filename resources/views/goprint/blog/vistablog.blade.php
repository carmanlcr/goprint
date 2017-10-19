@extends('goprint.template')

@section('content')
  	<div class="container pm-containerPadding110">
      	<div class="row">
          	<div class="col-lg-12 pm-center pm-column-spacing">
              	<h5>ARTICULO</h5>
                <div class="pm-column-title-divider">
                    <img height="29" width="29" src="/img/logo/loguito.png" alt="icon">
                </div>
            </div>
        </div>
        <div class="container pm-containerPadding-top-40 pm-containerPadding-bottom-40">
          	<div class="jumbotron">
       			    <div class="container">
                    @if(Auth::check())
                    <div style="position:relative; left:900px;">
                      {!!Form::open(['route' => ['blog.destroy', $slug->slug],'method' => 'DELETE'])!!}
                        @if(Auth::user()->tipo_usuarios_id != 1)
                        <a href="{{ route('blog.edit',$slug->slug) }}"  title="Editar post" ><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></a>
                        @endif
                        @if(Auth::user()->tipo_usuarios_id == 2)
                            <button onClick="return confirm('¿Quiere eliminar este post?')" title="Eliminar post" >
                              <i class="fa fa-trash-o fa-2x" aria-hidden="true"></i>
                            </button>
                        @endif
                      {!!Form::close()!!} 
                      </div>
                    @endif
                    
        		        <div class="row">
          				      <div class="col-md-8" >
   							            <p><img src="/img/ordenes/{{ $slug->imagen }}" class="img-responsive" alt="{{ $slug->titulo }}"></p>
    							          <h2> {{ $slug->titulo }}</h2>
    							          <p> {{ $slug->descripcion }}</p>
    						        </div>
    					      </div>  
       			    </div>
  			    </div>
        </div>
    </div>
	
@stop