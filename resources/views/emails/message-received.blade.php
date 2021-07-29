<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Correo Laravel App</title>
</head>
<body>
	<p>Recibiste un mensaje de {{ $datos['name'] }} ( {{ $datos['email'] }} ) </p>
	<p><strong>Asunto</strong> {{ $datos['subject'] }}</p>
	<p>{{ $datos['content'] }}</p>
</body>
</html>