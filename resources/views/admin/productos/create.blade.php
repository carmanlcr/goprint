@extends('admin.template')
@section('title','Agregar Productos - Panel de administración')
@section('content')
	<div class="container" align="center" style="background-color:#f2f2f2;">
		<div class="page-header">
			<h1><i class="fa fa-archive" aria-hidden="true"></i>
				Producto <small>[Crear Producto]</small>
			</h1>
		</div>

		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<div class="page" style="background: #fff;border-radius: 1em;margin: 1cm;min-height: auto;padding: 1em;">
					@if(count($errors)>0)
						@include('admin.vistaparcial.errores')
					@endif

					{!!Form::open(['route'=>'productos.store','files'=>true,'enctype' => 'multipart/form-data'])!!}

						<div class="form-group">
							{!!Form::label('imagen','Imagen: ')!!}
							{!!Form::file('imagen',['class' => 'form-control','required'])!!}
						</div>

						<div class="form-group">
							{!!Form::label('nombre','Nombre: ')!!}
							{!!Form::text('nombre',null,['class'=>'form-control','placeholder' =>'Ingresa el nombre...','required'])!!}
						</div>

						<div class="form-group">
							{!!Form::label('descripcion','Descripcion: ')!!}
							{!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Ingresa tu direccion'])!!}
						</div>

						<div class="form-group">
							{!!Form::label('precio','Precio: ',['for'=>'precio'])!!}
							{!!Form::text('precio',null,['class'=>'form-control','placeholder' =>'Ingresa el precio','required'])!!}
						</div>

						<div class="form-group">
							{!!Form::label('size','Size: ')!!}
							{!!Form::text('size',null,['class'=>'form-control','placeholder' =>'Ingresa el size','required'])!!}
						</div>

						<div class="form-group">
							{!!Form::label('stock','stock: ')!!}
							<input type="number" name="stock" class="form-control" required placeholder="Stock">
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