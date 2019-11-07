<!DOCTYPE html>
<html>
<head>
	<title>4.4 Formulario</title>
</head>
<body>
	<form action="{{route('muestra-datos')}}" method="POST">
		@csrf
		<label>Nombre</label><br>
		<input type="text" name="nombre" value="{{old('nombre')}}"><span> </span><br>
		<label>Apellido</label><br>
		<input type="text" name="apellido" value="{{old('apellido')}}"><br>
		<label>Email</label><br>
		<input type="email" name="email" value="{{old('email')}}"><br>
		<label>Telefono</label><br>
		<input type="text" name="telf" value="{{old('telf')}}"><br><br>
		<input type="submit" value="Validar">
	</form>

	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif
</body>
</html>