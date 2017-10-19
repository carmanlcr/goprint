@extends('admin.template')
@section('title','Editar Usuario - Panel de administración')
@section('css')
    {!!Html::style('css/awesomplete.css')!!}
    {!!Html::style('select2-4.0.3/dist/css/select2.css')!!}
@endsection
@section('content')
	<div class="container" align="center" style="background-color:#f2f2f2;">
		<div class="page-header">
			<h1><i class="fa fa-shopping-cart"></i>
				Usuarios <small>[Editar Usuario]</small>
			</h1>
		</div>

		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<div class="page" style="background: #fff;border-radius: 1em;margin: 1cm;min-height: auto;padding: 1em;">
					@if(count($errors)>0)
						@include('admin.vistaparcial.errores')
					@endif

					{!!Form::model($username,array('route' => array('users.update',$username),'method' => 'PUT','files'=>true,'enctype' => 'multipart/form-data'))!!}
						{{ csrf_field() }}
						<div class="form-group">
							{!!Form::label('nombre','Nombre: ')!!}
							{!!Form::text('nombre',$username->dato_usuarios->nombre,['class'=>'form-control','placeholder' =>'Ingresa el nombre...','required','autofocus'])!!}
						</div>

						<div class="form-group">
							{!!Form::label('apellido','Apellido: ')!!}
							{!!Form::text('apellido',$username->dato_usuarios->apellido,['class'=>'form-control','placeholder'=>'Ingresa tu apellido...','required'])!!}
						</div>

							
						<div class="form-group">
							{!!Form::label('email','Email: ')!!}
							{!!Form::email('email',null,['class' => 'form-control','placeholder' =>'Ingresa tu email','required'])!!}
						</div>

						<div class="form-group">
							{!!Form::label('usuario','Username: ')!!}
							{!!Form::text('username',null,['class'=>'form-control','placeholder' =>'Ingresa tu username...','required'])!!}
						</div>
						
						@if($username->social === 0)
							<div class="form-group">
								{!!Form::label('imagen','Imagen: ')!!}
								{!!Form::file('imagen',['class' => 'form-control'])!!}
							</div>
							<img src="/img/ordenes/{{ $username->imagen }}" width="100px" height="100px">
						@endif
						
						<div class="form-group">
							{!!Form::label('tipo','Tipo de Usuario: ')!!}
							{!!Form::select('tipo',$tipo,$username->tipo_usuarios_id,['class' => 'form-control','required'])!!}
						</div>

						<div class="form-group">
							{!!Form::label('ciudad','Ciudad: ')!!}
							{!!Form::text('ciudad',$username->dato_usuarios->ciudad,['class'=>'form-control','placeholder' =>'Ingresa tu ciudad...'])!!}
						</div>
	
						<div class="form-group">
							{!!Form::label('direccion','Direccion: ')!!}
							{!!Form::textarea('direccion',$username->dato_usuarios->direccion,['class'=>'form-control','placeholder'=>'Ingresa tu direccion...'])!!}
						</div>	

						<div class="form-group">
							{!!Form::label('telefono','Telefono: ')!!}
							{!!Form::text('telefono',$username->dato_usuarios->telefono,['class'=>'form-control','placeholder' =>'Ingresa tu telefono...'])!!}
						</div>

						<div class="form-group">
							{!!Form::label('visible','Visible: ')!!}
							<input type="checkbox" name="activo" {{ $username->activo == 1 ? "checked='checked'" : '' }}>
						</div><!--Si el producto esta visible o no-->
						<fieldset>
                            <legend>Cambiar password:</legend>
							<div class="form-group">
								{!!Form::label('password','Password: ')!!}
								{!!Form::password('password',['class' => 'form-control','placeholder' => 'Ingresa tu contraseña'])!!}
							</div>

							<div class="form-group">
								{!!Form::label('password_confirmation','Confirmar Password: ')!!}
								{!!Form::password('password_confirmation',['class' => 'form-control','placeholder' => 'Repite la contraseña'])!!}
							</div>
						</fieldset>

						<div class="form-group">
							{!!Form::submit('Actualizar',['class'=> 'btn btn-primary'])!!}
							<a href="{{ route('users.index') }}" class="btn btn-warning">Cancelar</a>
						</div>
						
					{!!Form::close()!!}
				</div>
				@section('script')
					{!!Html::script('js/awesomplete.js')!!}
				@endsection
			</div>
		</div>
	</div>
@stop