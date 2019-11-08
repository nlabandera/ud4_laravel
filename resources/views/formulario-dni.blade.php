<!DOCTYPE html>
<html>
<head>
	<title>4.4 Formulario con dni</title>
</head>
<body>
	<style type="text/css">
		span{
			color: red;
		}
	</style>
	<form action="{{route('muestra-datos-dni')}}" method="POST">
		@csrf
		<label>Nombre</label><br>
		<input type="text" name="nombre" value="{{old('nombre')}}">@if ($errors->has('nombre'))<span>{{ $errors->first('nombre')}}  @endif</span><br>
		<label>Apellido</label><br>
		<input type="text" name="apellido" value="{{old('apellido')}}"> @if ($errors->has('apellido'))<span>{{$errors->first('apellido')}}  @endif</span><br>
		<label>DNI</label><br>
		<input type="text" name="dni" value="{{old('dni')}}">@if ($errors->has('dni'))<span>{{$errors->first('dni')}}  @endif</span><br>
		<label>Email</label><br>
		<input type="email" name="email" value="{{old('email')}}"> @if ($errors->has('email'))<span>{{$errors->first('email')}}  @endif</span><br>
		<label>Telefono</label><br>
		<input type="text" name="telf" value="{{old('telf')}}">@if ($errors->has('telf'))<span>{{$errors->first('telf')}}  @endif</span><br><br>
		<input type="submit" value="Validar">
	</form>
<!--	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif-->

</body>
</html>