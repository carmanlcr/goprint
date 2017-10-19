@extends('admin.template')
@section('title','Panel de administración - Productos')
@section('css')
    {!!Html::style('https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css')!!}
@endsection
@section('content')

<div class="container" align="center" style="background-color:#f2f2f2;min-height:900px;">
	<div class="page-header">
		<h1>
			<i class="fa fa-archive" aria-hidden="true"></i> PRODUCTOS <a href="{{ route('productos.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Agregar</a>
		</h1>

	</div>

	@if(\Session::get('message'))
        	@include('goprint.vistaparcial.index.message')
   		@endif

	<div class="page" style="background: #fff;border-radius: 1em;margin: 1cm;min-height: auto;padding: 1em;">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id="myTable">
				<thead>
						<tr>
							<th>Acciones</th>
							<th>Imagen</th>
							<th>Nombre</th>
							<th>Descripcion</th>
							<th>Precio</th>
							<th>Stock</th>
							<th>Size</th>
							<th>Visible</th>
						</tr>
				</thead>
				<tbody>
					@foreach($productos as $producto)
						<tr>
							<td >							
								<!--Para eliminar hacemos lo siguiente-->
								{!!Form::open(['route' => ['productos.destroy', $producto->slug],'method' => 'DELETE'])!!}
									<a href="{{ route('productos.edit',$producto->slug) }}" class="btn btn-primary" title="Editar Producto"><i class="fa fa-pencil-square"></i></a>
									<button onClick="return confirm('¿Quiere eliminar este registro?')" class="btn btn-danger" title="Eliminar Producto">
										<i class="fa fa-trash"></i>
									</button>
								{!!Form::close()!!}	
							</td>
							<td><img src="/img/ordenes/{{ $producto->imagen }}" width="50"></td>
							<td>{{ $producto->nombre }}</td>
							@if($producto->descripcion != null)
								<td>{{ $producto->descripcion }}</td>
							@else
								<td>El producto no tiene descripción</td>
							@endif
							<td>{{ $producto->precio }}</td>
							<td>{{ $producto->stock }}</td>
							<td>{{ $producto->size }}</td>
							<td>{{ $producto->activo == 1 ? 'Si' : 'No' }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div align="center">
			{{ $productos->links() }}
		</div>
		@section('script')
			{!!Html::script('//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js')!!}
			{!!Html::script('admin/js/datatable.js')!!}
		@endsection
	</div>
</div>

@stop