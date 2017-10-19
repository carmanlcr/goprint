@extends('admin.template')
@section('title','Editar Producto - Panel de administración')
@section('content')
	<div class="container" align="center" style="background-color:#f2f2f2;">
		<div class="page-header"> 
			<h1><i class="fa fa-archive" aria-hidden="true"></i>
				Producto <small>[Editar Producto]</small>
			</h1>
		</div>

		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<div class="page" style="background: #fff;border-radius: 1em;margin: 1cm;min-height: auto;padding: 1em;">
					@if(count($errors)>0)
						@include('admin.vistaparcial.errores')
					@endif
					{!!Form::model($slug,array('route' => array('productos.update',$slug->slug),'method' => 'PUT','files'=>true,'enctype' => 'multipart/form-data'))!!}

						<div class="form-group">
							{!!Form::label('imagen','Imagen: ')!!}
							{!!Form::file('imagen',['class' => 'form-control'])!!}
							<img src="/img/ordenes/{{ $slug->imagen }}" name="imagenr" width="100px" height="100px" value="{{ $slug->imagen }}">
						</div>

						<div class="form-group">
							{!!Form::label('nombre','Nombre: ')!!}
							{!!Form::text('nombre',null,['class'=>'form-control','placeholder' =>'Ingresa el nombre...','autofocus','required'])!!}
						</div>

						<div class="form-group">
							{!!Form::label('descripcion','Descripcion: ')!!}
							{!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Ingresa tu direccion'])!!}
						</div>

						<div class="form-group">
							{!!Form::label('precio','Precio: ')!!}
							{!!Form::text('precio',null,['class'=>'form-control','required'])!!}
						</div>
						
						<div class="form-group">
							{!!Form::label('size','Size: ')!!}
							{!!Form::text('size',null,['class'=>'form-control','placeholder' =>'Ingresa el size','required'])!!}
						</div>

						<div class="form-group">
							{!!Form::label('stock','stock: ')!!}
							<input type="number" name="stock" class="form-control" required placeholder="Stock" value="{{ $slug->stock }}">
						</div>

						<div class="form-group">
							{!!Form::label('visible','Visible: ')!!}
							<input type="checkbox" name="activo" {{ $slug->activo == 1 ? "checked='checked'" : '' }}>
						</div><!--Si el producto esta visible o no-->

						<div class="form-group">
							{!!Form::submit('Actualizar',['class'=> 'btn btn-primary'])!!}
							<a href="{{ route('productos.index') }}" class="btn btn-warning">Cancelar</a>
						</div>
						
					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
@stop