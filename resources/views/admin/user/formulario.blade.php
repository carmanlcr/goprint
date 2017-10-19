<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
	{!!Form::label('nombre','Nombre: ')!!}
	{!!Form::text('nombre',null,['class'=>'form-control','placeholder' =>'Ingresa el nombre...','required','autofocus'])!!}
</div>

<div class="form-group">
	{!!Form::label('apellido','Apellido: ')!!}
	{!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingresa tu apellido...','required'])!!}
</div>
	
<div class="form-group">
	{!!Form::label('email','Email: ')!!}
	{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu Email','required','id'=>'email'])!!}
</div>

<div class="form-group">
	{!!Form::label('usuario','Username: ')!!}
	{!!Form::text('username',null,['class'=>'form-control','placeholder' =>'Ingresa tu username...','required'])!!}
</div>

<div class="form-group">
	{!!Form::label('password','Password: ')!!}
	{!!Form::password('password',['class' => 'form-control','placeholder' => 'Ingresa tu contraseña','required'])!!}
</div>

<div class="form-group">
	{!!Form::label('password_confirmation','Confirmar Password: ')!!}
	{!!Form::password('password_confirmation',['class' => 'form-control','placeholder' => 'Repite la contraseña','required'])!!}
</div>

<div class="form-group">
	{!!Form::label('imagen','Imagen: ')!!}
	{!!Form::file('imagen',['class' => 'form-control','required'])!!}
</div>


<div class="form-group">
	{!!Form::label('tipo','Tipo de Usuario: ')!!}
	{!!Form::select('tipo',$tipo,null,['class' => 'form-control','required'])!!}
</div>

<div class="form-group">
	{!!Form::label('telefono','Telefono: ')!!}
	{!!Form::text('telefono',null,['class'=>'form-control','placeholder' =>'Ingresa tu telefono...'])!!}
</div>

<div class="form-group">
	{!!Form::label('ciudad','Ciudad: ')!!}
	{!!Form::text('ciudad',null,['class'=>'form-control','placeholder' =>'Ingresa tu ciudad...'])!!}
</div>

<div class="form-group">
	{!!Form::label('direccion','Direccion: ')!!}
	{!!Form::textarea('direccion',null,['class'=>'form-control','placeholder'=>'Ingresa tu direccion...'])!!}
</div>