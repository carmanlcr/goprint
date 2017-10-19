@extends('goprint.template')

@section('content')
	<div class="container pm-containerPadding110">
    	<div class="row">
        	<div class="col-lg-12 pm-center pm-column-spacing">
            	<h5>Crear Post</h5>
                <div class="pm-column-title-divider">
                	<img height="29" width="29" src="/img/logo/loguito.png" alt="icon">
                </div>
            </div>
        </div>
		<div class="row">
            @if(count($errors)>0)
                @include('goprint.vistaparcial.errores')
            @endif
        	{!!Form::open(['role' => 'form','route'=>'blog.store','method'=>'POST','enctype' => 'multipart/form-data','files'=>true])!!}
        		@include('goprint.blog.formulario')
        		<div class="col-lg-12 pm-center">
                    {!!Form::button('<i class="fa fa-plus" aria-hidden="true"></i> Crear Post',['class'=>'pm-form-submit-btn','type' =>'submit'])!!}
                </div>
        	{!!Form::close()!!}
        </div>
    </div>
			
@stop