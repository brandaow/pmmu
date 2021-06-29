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
		<div class="container pt-4">
			@forelse($posts->sortByDesc('created_at') as $post)
			<div class="row">
				<div class="col-md-6">
					<a href="#">
						<img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('storage/uploads/'.$post->file) }}" alt="PMMU">
					</a>
				</div>
				<div class="col-md-6">
					<h3>{{ $post->title }}</h3>
					<p>{{ $post->abstract }}</p>
					<p class="text-muted mt-3 mb-3">Publicado em {{ date('d/m/Y', strtotime($post->created_at))}}</p>
					<a class="btn btn-primary" href="{{ route('post', $post->id) }}">Ver Mais <i class="fa fa-fw fa-arrow-right mr-1"></i></a>
				</div>
			</div>
			<hr>
			@empty
			<p class="lead">Infelizmente ainda não há posts para serem exibidos.</p>
			@endforelse
		</div>
	</section>
	
	<footer class="footer">
		<p class="text-muted text-center small mb-4 mb-lg-0">&copy; PMMU {{date('Y')}}. Todos os direitos reservados.</p>
		<p class="text-muted text-center small mb-4 mb-lg-0">Desenvolvido por <a href="https://github.com/marocama" target="_blank">Marcus Roberto</a>.</p>
	</footer>
	
	<script src="{{ asset('js/jquery.min.js?v=1.0') }}"></script>
	<script src="{{ asset('js/bootstrap.bundle.min.js?v=1.0') }}"></script>
	
	<script src="https://kit.fontawesome.com/435f912920.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
</body>

</html>

