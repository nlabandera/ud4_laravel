<!DOCTYPE html>
<html>
<head>
	<title>4.1. Rutas y vistas</title>
</head>
<body>
	<h1>Rutas y vistas</h1>
	<ul>
		<li><a href="{{route('contacto')}}">Contacto</a></li>
		<li><a href="{{route('blog',['id'=>4])}}">Blog</a></li>
		<li><a href="{{route('blog_id',['id'=>4,'nombre'=>'Nerea'])}}">Blog con id</a></li>
	</ul>

</body>
</html>