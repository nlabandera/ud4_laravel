<!DOCTYPE html>
<html>
<head>
	<title>formulario de contacto</title>
</head>
<body>
	<form action="{{route('saludonombre2')}}" method="GET">
		<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="apellido" placeholder="Apellido">
		<input type="submit">
	</form>

</body>
</html>