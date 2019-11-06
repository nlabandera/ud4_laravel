<!DOCTYPE html>
<html>
<head>
	<title>4.3 B</title>
	<meta charset="utf-8">
</head>
<body>

	<form action="{{route('saludoidiomas')}}" method="POST">
		@csrf
		<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="apellido" placeholder="Apellido">
		<input type="submit" value="Saluda en varios idiomas">
		
	</form>

</body>
</html>