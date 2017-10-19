<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Confirmar su cuenta</title>
</head>
<body>
	<h1>Bienvenido a GoPrint, {{$nombre}} </h1>

	<p>Para confirmar su registro</p>


	<a href="{{ url('/auth/confirm/email/'.$user->email.'/confirm_token/'.$user->remember_token.'') }}">Confirmar registro</a>


	<p>Si no puedes ingresar, dirigase al siguiente link {{ url('/auth/confirm/email/'.$user->email.'/confirm_token/'.$user->remember_token.'') }}</p>

	Saludos,
	GoPrint

</body>
</html>

