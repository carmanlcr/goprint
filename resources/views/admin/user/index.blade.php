@extends('admin.template')

@section('title','Panel de Administración - Usuarios')
@section('css')
    {!!Html::style('https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css')!!}
@endsection
@section('content')
	<div class="container" align="center" style="background-color:#f2f2f2;min-height:900px;">
		<div class="page-header">
			<h1><i class="fa fa-user"></i>
				USUARIOS
				<a href="{{ route('users.create') }}" class="btn btn-warning">
					<i class="fa fa-plus-circle"></i> Usuario
				</a>
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
							<th>Nombre</th>
							<th>Imagen</th>
							<th>Ciudad</th>
							<th>Direccion</th>
							<th>Username</th>
							<th>Usuario de <i class="fa fa-facebook"></i></th>
							<th>Correo</th>
							<th>Tipo</th>
							<th>Activo</th>
						</tr>
					</thead>
					<tbody>
						@foreach($usuarios as $usuario)
						<tr>
							<td>
								{!!Form::open(['route' => ['users.destroy', $usuarios],'method' => 'DELETE'])!!}
									<a href="{{ route('users.edit',$usuario) }}" class="btn btn-primary" title="Editar Usuario"><i class="fa fa-pencil-square"></i></a>
									<button onClick="return confirm('¿Quiere eliminar este usuario')" class="btn btn-danger" title="Eliminar usuario">
										<i class="fa fa-trash"></i>
									</button>
								{!!Form::close()!!}	
							</td>
							<td>{{ $usuario->dato_usuarios->nombre.' '.$usuario->dato_usuarios->apellido }}</td>
							@if($usuario->social == 1)
								<td><img src="{{ $usuario->imagen }}" alt="" width="80px" height="60px"></td>
							@else
								<td><img src="/img/ordenes/{{ $usuario->imagen }}" alt="" width="40px" height="40px"></td>
							@endif
							@if($usuario->dato_usuarios->ciudad == null)
								<td>El usuario no ha registrado ciudad</td>
							@else
								<td>{{ $usuario->dato_usuarios->ciudad }}</td>
							@endif
							@if($usuario->dato_usuarios->direccion == null)
								<td>El usuario no ha registrado dirección</td>
							@else
								<td>{{ $usuario->dato_usuarios->direccion }}</td>
							@endif
							<td>{{ $usuario->username }}</td>
							<td>{{ $usuario->social == 1 ? 'Si' : 'No' }}</td>
							<td>{{ $usuario->email }}</td>
							<td>{{ $usuario->tipo_usuarios->tipo }}</td>
							<td>{{ $usuario->activo == 1 ? "Si" : "No"}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div align="center">
					{{ $usuarios->links() }}
			</div>
			@section('script')
				{!!Html::script('//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js')!!}
				{!!Html::script('admin/js/datatable.js')!!}
			@endsection
		</div>
	</div>
@stop