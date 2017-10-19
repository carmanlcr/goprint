<html>
	<head></head>
	<body>
		<p>Nombre del contacto: {{ $data['nombre'] }}</p>
		<p>Email del contacto: {{ $data['correo']}}</p>
		<p>Asunto: {{ $data['asunto'] }}</p>
		<p>Mensaje: </p>
		{{ $data['mensaje'] }}
	</body>
</html>