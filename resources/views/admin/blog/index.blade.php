@extends('admin.template')

@section('title','Panel de Administración - Blog')
@section('css')
    {!!Html::style('https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css')!!}
@endsection
@section('content')
	<div class="container" align="center" style="background-color:#f2f2f2;min-height:900px;">
		<div class="page-header">
			<h1><i class="fa fa-rss"></i>
				Blog
				<a href="{{ route('blogs.create') }}" class="btn btn-warning">
					<i class="fa fa-plus-circle"></i> Blog
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
							<th>Titulo</th>
							<th>Descripcion</th>
							<th>Imagen</th>
							<th>Activo</th>
							<th>Nombre de usuario</th>
							<th>Username</th>
							<th>Creado</th>
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)
						<tr>
							<td>
								{!!Form::open(['route' => ['blogs.destroy', $post->slug],'method' => 'DELETE'])!!}
									<a href="{{ route('blogs.edit',$post->slug) }}" class="btn btn-primary" title="Editar Post"><i class="fa fa-pencil-square"></i></a>
									<button onClick="return confirm('¿Quiere eliminar este post')" class="btn btn-danger" title="Eliminar Post">
										<i class="fa fa-trash"></i>
									</button>
								{!!Form::close()!!}	
							</td>
							<td>{{ $post->titulo }}</td>
							<td>{{ $post->descripcion }}</td>
							<td><img src="/img/ordenes/{{ $post->imagen }}" alt="" width="50" heigth="80"></td>
							<td>{{ $post->activo == 1 ? 'Si' : 'No' }}</td>
							<td>{{ $post->users->dato_usuarios->nombre.' '.$post->users->dato_usuarios->apellido }}</td>
							<td><a href="{{ route('profile',$post->users->username) }}">{{ $post->users->username }}</a></td>
							<td>{{ Date::parse($post->created_at)->format('l j \d\e\ F \d\e\ Y')}}</td>
							
						@endforeach
					</tbody>
				</table>
			</div>
			<div align="center">
					{{ $posts->links() }}
			</div>
			@section('script')
				{!!Html::script('//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js')!!}
				{!!Html::script('admin/js/datatable.js')!!}
			@endsection
		</div>
	</div>
@stop