<!DOCTYPE html>
<html>
<head>
	<title>Saluda en diferentes idiomas</title>
	<meta charset="utf-8">
</head>
<body>
	<ol>
		@foreach ($idiomas as $idioma)
		<li>{{$idioma->saludo}} {{$nombre}} {{$apellido}}</li>		
		@endforeach
		
	</ol>
	

</body>
</html>