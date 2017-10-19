@extends('admin.template')
@section('title','Agregar Usuario - Panel de administración')

@section('css')
    {!!Html::style('css/awesomplete.css')!!}
@endsection

@section('content')
	<div class="container" align="center" style="background-color:#f2f2f2;">
		<div class="page-header">
			<h1><i class="fa fa-user"></i>
				Usuarios <small>[Crear Usuarios]</small>
			</h1>
		</div>

		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<div class="page" style="background: #fff;border-radius: 1em;margin: 1cm;min-height: auto;padding: 1em;">
					@if(count($errors)>0)
						@include('admin.vistaparcial.errores')
					@endif

					{!!Form::open(['route'=>'users.store','files'=>true,'enctype' => 'multipart/form-data'])!!}
						@include('admin.user.formulario')	
									
						<div class="form-group">
							{!!Form::submit('Guardar',['class'=> 'btn btn-primary'])!!}
							<a href="{{ route('users.index') }}" class="btn btn-warning">Cancelar</a>
						</div>
						
					{!!Form::close()!!}
				</div>
				@section('script')
					{!!Html::script('/js/awesomplete.js')!!}
				@endsection
			</div>
		</div>
	</div>
@stop