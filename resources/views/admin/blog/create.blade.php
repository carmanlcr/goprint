@extends('admin.template')
@section('title','Agregar Post - Panel de administración')
@section('content')
	<div class="container" align="center" style="background-color:#f2f2f2;">
		<div class="page-header">
			<h1><i class="fa fa-rss"></i>
				Post <small>[Crear Post]</small>
			</h1>
		</div>

		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<div class="page" style="background: #fff;border-radius: 1em;margin: 1cm;min-height: auto;padding: 1em;">
					@if(count($errors)>0)
						@include('admin.vistaparcial.errores')
					@endif

					{!!Form::open(['route'=>'blogs.store','files'=>true,'enctype' => 'multipart/form-data'])!!}

						<div class="form-group">
							{!!Form::label('imagen','Imagen: ')!!}
							{!!Form::file('imagen',['class' => 'form-control','required'])!!}
						</div>

						<div class="form-group">
							{!!Form::label('titulo','Titulo: ')!!}
							{!!Form::text('titulo',null,['class'=>'form-control','placeholder' =>'Ingresa el titulo...','required'])!!}
						</div>

						<div class="form-group">
							{!!Form::label('descripcion','Descripcion: ')!!}
							{!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Ingresa tu Descripcion'])!!}
						</div>


						<div class="form-group">
							{!!Form::label('usuario','Usuario: ')!!}
							{!!Form::select('username',$usuarios,null,['class' => 'form-control','required'])!!}
						</div>

							
						<div class="form-group">
							{!!Form::submit('Guardar',['class'=> 'btn btn-primary'])!!}
							<a href="{{ route('productos.index') }}" class="btn btn-warning">Cancelar</a>
						</div>
						
					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
@stop