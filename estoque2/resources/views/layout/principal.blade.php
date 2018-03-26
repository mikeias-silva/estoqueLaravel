<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
	<title>Controle Estoque</title>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<a href="#" class="navbar-brand">Estoque laravel</a>
		<ul class="nav navbar-nav navbar-right">
			<li ><a href="{{ action('ProdutoController@lista') }}">Listagem</a></li>
			<li><a href="{{ action('ProdutoController@novo') }}">Novo</a></li>
		</ul>	
	</nav>
	<div class="container">

		@yield('conteudo')
		

	</div>
	<footer class="card card-body text-center text-light bg-dark pt-4 mt-4">
		<div class="card-header">
			<p>Testando essa lindeza</p>
		</div>
	</footer>
	
</body>
</html>