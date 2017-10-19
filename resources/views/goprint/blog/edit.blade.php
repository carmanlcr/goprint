@extends('goprint.template')

@section('content')
	<div class="container pm-containerPadding110">
    	<div class="row">
        	<div class="col-lg-12 pm-center pm-column-spacing">
            	<h5>Editar Post</h5>
                <div class="pm-column-title-divider">
                	<img height="29" width="29" src="/img/logo/loguito.png" alt="icon">
                </div>
            </div>
        </div>
		<div class="row">
            @if(count($errors)>0)
                @include('goprint.vistaparcial.errores')
            @endif
            {!!Form::model($slug,array('route' => array('blog.update',$slug->slug),'method' => 'PUT','files' => true))!!}
        		@include('goprint.blog.formulario')
                <br><br>
                <div class="col-lg-12">
                    @if(empty($slug->imagen))
                        <img src="/img/ordenes/no-image.jpg"  alt="" >
                        <input type="hidden" value="no-image.jpg" name="imagenanterior">
                    @else
                        <img src="/img/ordenes/{{ $slug->imagen }}" alt="" >
                        <input type="hidden" value="{{ $slug->imagen }}" name="imagenanterior">
                    @endif
                </div>
        		<div class="col-lg-12 pm-center">
                    <a href="{{ route('blog.show',$slug->slug) }}" class="btn btn-success" ><i class="fa fa-chevron-circle-left"></i> Regresar</a>
                    {!!Form::button('<i class="fa fa-plus" aria-hidden="true"></i> Editar Post',['class'=>'pm-form-submit-btn','type' =>'submit'])!!}
                </div>
        	{!!Form::close()!!}
        </div>
    </div>
			
@stop