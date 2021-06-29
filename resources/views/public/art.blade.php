<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Desenvolvimento de planos municipais de mobilidade urbana.">
	<meta name="author" content="Marcus Roberto">
	
	<title>PMMU</title>
	
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/image.css') }}" rel="stylesheet">
	<link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	
	<link href="{{ asset('css/landing-page.min.css') }}" rel="stylesheet">
</head>

<body class="bg-light">
	
	<nav class="navbar navbar-light static-top">
		<div class="container">
			<a class="navbar-brand" href="#"><i class="fa fa-fw fa-arrows-alt"></i> PMMU</a>
			@guest
			<div>
				<a class="btn btn-outline-secondary mr-2" href="{{ route('inicio') }}">Inicio</a>
				<a class="btn btn-secondary" href="{{ route('login') }}">Entrar</a>
			</div>
			@else
			<div>
				<a class="btn btn-outline-secondary mr-2" href="{{ route('inicio') }}">Inicio</a>
				<a class="btn btn-secondary" href="{{ route('home') }}">{{ explode(" ", auth()->user()->name)[0] }}</a>
			</div>
			@endguest
		</div>
	</nav>
	
	<section>
		<div class="container pt-4 pb-4">
			<h1 class="mt-4">{{ $post->title }}</h1>
			<hr>
			<p class="text-muted">Publicado em {{ date('d/m/Y') }} por {{ explode(" ", $post->user->name)[0]." ".explode(" ", $post->user->name)[1] }}</p>
			<hr>
			<img class="img-fluid rounded" src="{{ asset('storage/uploads/'.$post->file) }}" alt="PMMU">
			<hr>
			{!! str_replace('<p>', '<p class="lead text-justify">', $post->body) !!}
			<a class="btn btn-outline-secondary btn-block mt-4" href="{{ route('blog') }}">Voltar</a>
		</div>
	</section>
	
	<footer class="footer">
		<p class="text-muted text-center small mb-4 mb-lg-0">&copy; PMMU {{date('Y')}}. Todos os direitos reservados.</p>
		<p class="text-muted text-center small mb-4 mb-lg-0">Desenvolvido por <a href="https://github.com/marocama" target="_blank">Marcus Roberto</a>.</p>
	</footer>
	
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	
	<script src="https://kit.fontawesome.com/435f912920.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
</body>

</html>

