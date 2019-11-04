<!DOCTYPE html>
<html>
<head>
	<title>4.2. Ruta vista controlador</title>
</head>
<body>
	<h1>4.2 Vista controlador</h1>
	<ol>
		<li><a href="{{route('saludo')}}">Saludo</a></li>
		<li><a href="{{route('saludonombre',['nombre'=>'default','apellido'=>'default'])}}">Saludo nombre</a></li>
		<li><a href="{{route('saludocolor',['nombre'=>'nerea','color'=>'52b3d4'])}}">Saludo nombre-color</a></li>
	</ol>

</body>
</html>