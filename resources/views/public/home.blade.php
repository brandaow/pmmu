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
	<style>
		a[href="#top"]{
			padding:10px;
			position:fixed;
			top: 90%;
			right:40px;
			display:none;
			font-size: 30px;
		}
		a[href="#top"]:hover{
			text-decoration:none;
		}
	</style>
</head>

<body>
	<a href="#top" class="fa fa-fw fa-arrow-up"></a>
	<nav class="navbar navbar-light bg-light static-top">
		<div class="container">
			<a class="navbar-brand" href="#"><i class="fa fa-fw fa-arrows-alt"></i> PMMU</a>
			@guest
			<div>
				<a class="btn btn-outline-secondary mr-2" href="{{ route('extension') }}">Extensão</a>
				<a class="btn btn-outline-secondary mr-2" href="{{ route('blog') }}">Blog</a>
				<button type="button" class="btn btn-outline-secondary mr-2" data-toggle="modal" data-target="#modalContact">Fale Conosco</button>
				<a class="btn btn-secondary" href="{{ route('login') }}">Entrar</a>
			</div>
			@else
			<div>
				<a class="btn btn-outline-secondary mr-2" href="#">Extensão</a>
				<a class="btn btn-outline-secondary mr-2" href="{{ route('blog') }}">Blog</a>
				<button type="button" class="btn btn-outline-secondary mr-2" data-toggle="modal" data-target="#modalContact">Fale Conosco</button>
				<a class="btn btn-secondary" href="{{ route('home') }}">{{ explode(" ", auth()->user()->name)[0] }}</a>
			</div>
			@endguest
		</div>
	</nav>
	
	<header class="masthead text-white text-center">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-9 mx-auto">
					<h1 class="mb-5">Mobilidade Urbana</h1>
				</div>
				<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
					<a href="#planos" class="btn btn-outline-light btn-lg scrollS">Visualizar Planos</a>
				</div>
			</div>
		</div>
	</header>
	
	<section class="testimonials text-center bg-light pt-4 pb-4">
		<div class="container">
			<div class="row align-items-center mt-3 mb-5">
				<div class="col-md-3 d-none d-md-block">
					<i class="fa fa-walking fa-fw fa-10x text-info"></i>	
				</div>
				<div class="col-md-9 text-justify">
					<p class="h3 mb-3">Caro visitante,</p>
					<p class="lead">Você está dentro do Portal de Mobilidade Urbana, fruto de uma cooperação técnico-científica entre a Universidade São Francisco e municípios do estado de São Paulo, em cumprimento a Lei 12.587/12.</p>
					<p class="lead">Nesse Portal você poderá acompanhar de perto o desenvolvimento dos Planos de Mobilidade em andamento, consultar os Planos já entregues e entrar em contato com a equipe para esclarecimento, dúvidas e sugestões para a contínua melhoria da qualidade de vida da população dos municípios do estado de São Paulo.</p>
				</div>
			</div>
			<h2 id="planos" class="pt-3">Planos Desenvolvidos:</h2>
			<hr class="mb-5 mt-5">
			<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselIndicators" data-slide-to="1"></li>
					<li data-target="#carouselIndicators" data-slide-to="2"></li>
					<li data-target="#carouselIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row mb-5 justify-content-md-center">
							<div class="col-lg-3 pb-3 pt-3">
								<div class="testimonial-item mx-auto mb-5 mb-lg-0">
									<div class="show-image">
										<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/PLANOS/Img/monteiro_lobato.jpg') }}" alt="">
										<a class="text-secondary" data-toggle="modal" data-target="#modalMonLob"><i class="fa fa-eye fa-2x"></i></a>
									</div>
									<h5>Monteiro Lobato</h5>
								</div>
							</div>
							<div class="col-lg-3 pb-3 pt-3">
								<div class="testimonial-item mx-auto mb-5 mb-lg-0">	
									<div class="show-image"> 
										<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/PLANOS/Img/bom_jesus_dos_perdoes.jpg') }}" alt="">
										<a class="text-secondary" data-toggle="modal" data-target="#modalBomJ"><i class="fa fa-eye fa-2x"></i></a>
									</div>
									<h5>Bom Jesus dos Perdões</h5>
								</div>
							</div>
							<div class="col-lg-3 pb-3 pt-3">
								<div class="testimonial-item mx-auto mb-5 mb-lg-0">
									<div class="show-image">						
										<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/PLANOS/Img/engenheiro_coelho.jpg') }}" alt="">
										<a class="text-secondary" data-toggle="modal" data-target="#modalEngC"><i class="fa fa-eye fa-2x"></i></a>
									</div>
									<h5>Engenheiro Coelho</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row mb-5 justify-content-md-center">
							<div class="col-lg-3 pb-3 pt-3">
								<div class="testimonial-item mx-auto mb-5 mb-lg-0">
									<div class="show-image">
										<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/PLANOS/Img/joanopolis.jpg') }}" alt="">
										<a class="text-secondary" data-toggle="modal" data-target="#modalJoan"><i class="fa fa-eye fa-2x"></i></a>
									</div>
									<h5>Joanópolis</h5>
								</div>
							</div>
							<div class="col-lg-3 pb-3 pt-3">
								<div class="testimonial-item mx-auto mb-5 mb-lg-0">	
									<div class="show-image"> 
										<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/PLANOS/Img/morungaba.jpg') }}" alt="">
										<a class="text-secondary" data-toggle="modal" data-target="#modalMoru"><i class="fa fa-eye fa-2x"></i></a>
									</div>
									<h5>Morungaba</h5>
								</div>
							</div>
							<div class="col-lg-3 pb-3 pt-3">
								<div class="testimonial-item mx-auto mb-5 mb-lg-0">
									<div class="show-image">						
										<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/PLANOS/Img/pedra_bela.jpg') }}" alt="">
										<a class="text-secondary" data-toggle="modal" data-target="#modalPedr"><i class="fa fa-eye fa-2x"></i></a>
									</div>
									<h5>Pedra Bela</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row mb-5 justify-content-md-center">
							<div class="col-lg-3 pb-3 pt-3">
								<div class="testimonial-item mx-auto mb-5 mb-lg-0">
									<div class="show-image">
										<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/PLANOS/Img/pedreira.jpg') }}" alt="">
										<a class="text-secondary" data-toggle="modal" data-target="#modalPedre"><i class="fa fa-eye fa-2x"></i></a>
									</div>
									<h5>Pedreira</h5>
								</div>
							</div>
							<div class="col-lg-3 pb-3 pt-3">
								<div class="testimonial-item mx-auto mb-5 mb-lg-0">
									<div class="show-image">
										<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/PLANOS/Img/sao_simao.jpg') }}" alt="">
										<a class="text-secondary" data-toggle="modal" data-target="#modalSaoS"><i class="fa fa-eye fa-2x"></i></a>
									</div>
									<h5>São Simão</h5>
								</div>
							</div>
							<div class="col-lg-3 pb-3 pt-3">
								<div class="testimonial-item mx-auto mb-5 mb-lg-0">
									<div class="show-image">
										<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/PLANOS/Img/serra_negra.jpg') }}" alt="">
										<a class="text-secondary" data-toggle="modal" data-target="#modalSerr"><i class="fa fa-eye fa-2x"></i></a>
									</div>
									<h5>Serra Negra</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row mb-5 justify-content-md-center">
							<div class="col-lg-3 pb-3 pt-3">
								<div class="testimonial-item mx-auto mb-5 mb-lg-0">
									<div class="show-image">
										<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/PLANOS/Img/piracaia.png') }}" alt="">
										<a class="text-secondary" data-toggle="modal" data-target="#modalPira"><i class="fa fa-eye fa-2x"></i></a>
									</div>
									<h5>Piracaia</h5>
								</div>
							</div>
							<div class="col-lg-3 pb-3 pt-3">
								<div class="testimonial-item mx-auto mb-5 mb-lg-0">
									<div class="show-image">
										<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/PLANOS/Img/tuiuti.jpg') }}" alt="">
										<a class="text-secondary" data-toggle="modal" data-target="#modalTuiu"><i class="fa fa-eye fa-2x"></i></a>
									</div>
									<h5>Tuiuti</h5>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Próximo</span>
					</a>
				</div>
			</div>
			<h2 class="mt-5 mb-5" id="equipe">Equipe Técnica:</h2> 
			<hr class="mb-5 mt-5">
			<div class="row">
				<div class="col-lg-4 pb-3 pt-3">
					<div class="testimonial-item mx-auto mb-5 mb-lg-0">
						<div class="show-image">
							<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/candida.jpg') }}" alt="">
							<a onclick="showDesc('16')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
						</div>
						<h5>Me. Cândida Costa</h5>
						<p class="font-weight-light mb-0">Coordenadora do Proj.</p>
					</div>
				</div>
				<div class="col-lg-4 pb-3 pt-3">
					<div class="testimonial-item mx-auto mb-5 mb-lg-0">
						<div class="show-image">
							<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/bardi.jpg') }}" alt="">
							<a onclick="showDesc('97')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
						</div>
						<h5>Dr. Marcelo Bardi</h5>
						<p class="font-weight-light mb-0">CIO no Grupo Educacional Bom Jesus</p>
					</div>
				</div>
				<div class="col-lg-4 pb-3 pt-3">
					<div class="testimonial-item mx-auto mb-5 mb-lg-0">
						<div class="show-image">
							<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/marceloSilva.jpeg') }}" alt="">
							<a onclick="showDesc('98')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
						</div>
						<h5>Me. Marcelo Silva</h5>
						<p class="font-weight-light mb-0">Coordenador da Eng. Civil</p>
					</div>
				</div>
			</div>
			<hr class="mb-5 mt-5">
			<div class="row">
				<div class="col-lg-3 pb-3 pt-3">
					<div class="testimonial-item mx-auto mb-5 mb-lg-0">
						<div class="show-image">
							<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/marcus.jpg') }}" alt="">
							<a class="text-secondary" onclick="showDesc('0')" data-toggle="modal" data-target="#modal"><i class="fa fa-eye fa-2x"></i></a>
						</div>
						<h5>Marcus Roberto</h5>
						<p class="font-weight-light mb-0">Eng. de Computação</p>
					</div>
				</div>
				<div class="col-lg-3 pb-3 pt-3">
					<div class="testimonial-item mx-auto mb-5 mb-lg-0">
						<div class="show-image">
							<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/nicolas.jpg') }}" alt="">
							<a onclick="showDesc('3')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
						</div>
						<h5>Nicolas Garcia</h5>
						<p class="font-weight-light mb-0">Eng. Civil</p>
					</div>
				</div>
				<div class="col-lg-3 pb-3 pt-3">
					<div class="testimonial-item mx-auto mb-5 mb-lg-0">
						<div class="show-image">
							<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/brandao.jpg') }}" alt="">
							<a onclick="showDesc('8')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
						</div>
						<h5>Gabriel Brandão</h5>
						<p class="font-weight-light mb-0">Eng. de Computação</p>
					</div>
				</div>
				<div class="col-lg-3 pb-3 pt-3">
					<div class="testimonial-item mx-auto mb-5 mb-lg-0">
						<div class="show-image">
							<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/ricardo.jpg') }}" alt="">
							<a onclick="showDesc('1')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
						</div>
						<h5>Ricardo Lima</h5>
						<p class="font-weight-light mb-0">Eng. Civil</p>
					</div>
				</div>
			</div>  
		</div>
	</section>
	<footer class="footer bg-light">
		<p class="text-muted text-center small mb-4 mb-lg-0">&copy; PMMU {{date('Y')}}. Todos os direitos reservados.</p>
		<p class="text-muted text-center small mb-4 mb-lg-0">Desenvolvido por <a href="https://github.com/marocama" target="_blank">Marcus Roberto</a>.</p>
	</footer>
	
	<div class="modal fade" id="modal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="body"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-labelledby="modalContact" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-muted">Fale Conosco</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Entre em contato com a equipe por meio dos seguintes canais:</p>
					<ul>
						<li><a href="mailto:contato@pmmu.com.br">contato@pmmu.com.br</a></li>
						<br>
						<li><a href="mailto:monteirolobato@pmmu.com.br">monteirolobato@pmmu.com.br</a></li>
						<li><a href="mailto:aguasdelindoia@pmmu.com.br">aguasdelindoia@pmmu.com.br</a></li>
						<li><a href="mailto:serranegra@pmmu.com.br">serranegra@pmmu.com.br</a></li>
						<li><a href="mailto:pedreira@pmmu.com.br">pedreira@pmmu.com.br</a></li>
						<li><a href="mailto:tuiuti@pmmu.com.br">tuiuti@pmmu.com.br</a></li>
						<li><a href="mailto:saosimao@pmmu.com.br">saosimao@pmmu.com.br</a></li>
					</ul>					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="modalMonLob" tabindex="-1" role="dialog" aria-labelledby="modalMonLob" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-muted">Monteiro Lobato</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="body">
					<p class="lead font-weight-bold">Apresentação:</p>
					<p class="text-justify">O presente documento apresenta o trabalho de consultoria desenvolvido no âmbito do Convênio de Cooperação firmado entre a Prefeitura Municipal de Monteiro Lobato e a Universidade São Francisco, autorizada pela Lei Municipal 1.679 de 24 de abril de 2018, que autoriza o poder executivo Municipal a celebrar termo de cooperação técnico-científica com a Universidade São Francisco – USF e dá outras providências, e que tem por objeto a “Elaboração do Plano de Mobilidade Urbana de Monteiro Lobato”.</p>
					<p class="text-justify">O referido documento foi elaborado exclusivamente para o Município de Monteiro Lobato e é objeto do Termo Aditivo Nº 001/19 de 27 de julho de 2019, sendo resultado de estudo feito no município com o objetivo de propor soluções que venham a atender as necessidades dos munícipes no que diz respeito à mobilidade e à acessibilidade dando a todos a oportunidade de usufruir dos benefícios oferecidos pelos equipamentos públicos e privados, facilitando a inclusão social.</p>
					<p class="text-justify">Esse documento é a associação dos Produtos 1 ao 3, constituindo o Produto 4, que foi elaborado considerando-se as etapas decorrentes da análise do grupo de Trabalho Local constituído pelo Município com participação da Universidade São Francisco e apresentado em um volume único.</p>
					<section class="testimonials text-center pt-1 pb-1">
						<p class="lead font-weight-bold text-left">Equipe:</p>
						<div class="container">
							<div class="row mb-4 justify-content-md-center">
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/aisllan.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Aisllan Oliveira</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/cayqueMatias.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Cayque Mathias</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/lucas.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Lucas Marques</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/marcus.jpg') }}" alt="">
											<a data-dismiss="modal" class="text-secondary" onclick="showDesc('0')" data-toggle="modal" data-target="#modal"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Marcus Roberto</h5>
										<p class="font-weight-light mb-0">Eng. de Computação</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<p class="lead font-weight-bold text-left">Documento:</p>
					<a class="btn btn-primary btn-block text-white font-weight-bold" href="{{ asset('docs/PLANOS/PMMU_Monteiro_Lobato.pdf') }}" target="_blank"><i class="fa fa-eye fa-fw mr-1"></i> Visualizar</a>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="modalBomJ" tabindex="-1" role="dialog" aria-labelledby="modalBomJ" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-muted">Bom Jesus dos Perdões</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="body">
					<p class="lead font-weight-bold">Apresentação:</p>
					<p class="text-justify">O presente documento apresenta o trabalho de consultoria desenvolvido no âmbito do Convênio de Cooperação firmado entre a Prefeitura Municipal de Bom Jesus dos Perdões e a Universidade São Francisco, autorizada pela Lei Municipal 2.385 de 14 de Junho de 2016, que autoriza o poder executivo Municipal a celebrar convênio com a Universidade São Francisco – USF e dá outras providências, e que tem por objeto a “Elaboração do Plano de Mobilidade Urbana de Bom Jesus dos Perdões”.</p>
					<p class="text-justify">O referido documento foi elaborado exclusivamente para o Município de Bom Jesus dos Perdões e é objeto do Termo Aditivo nº 001/16.</p>
					<p class="text-justify">Esse documento é a associação dos Produtos 1 ao 3, que se constitui como Produto 4, o qual foi elaborado considerando-se as etapas decorrentes da análise do grupo de Trabalho Local constituído pelo Município com participação da Universidade São Francisco. Tal produto é apresentado em um volume único.</p>
					<p class="text-justify">Esse Plano apresenta as etapas para atender as diretrizes gerais da legislação vigente contemplando as seguintes etapas: Mobilização social, Diagnóstico atual da Mobilidade Urbana no Município e as alternativas e metas para melhorar as condições de vida e no meio natural.</p>									
					<section class="testimonials text-center pt-1 pb-1">
						<p class="lead font-weight-bold text-left">Equipe:</p>
						<div class="container">
							<div class="row mb-4 justify-content-md-center">
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/aisllan.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Aisllan Oliveira</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/cassiane.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Cassiane Dantas</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/rebeca.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Rebeca Silva</h5>
										<p class="font-weight-light mb-0">Eng. Ambiental</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/thaina.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Thaina Souza</h5>
										<p class="font-weight-light mb-0">Eng. Ambiental</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="https://http2.mlstatic.com/fundo-infinito-cinza-pursuit-grey-270-x-11-m-r21-D_NQ_NP_816068-MLB25961966199_092017-F.jpg" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Diego Vieira</h5>
										<p class="font-weight-light mb-0">Eng. Ambiental</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/marcoTombi.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Marco Tombi</h5>
										<p class="font-weight-light mb-0">Direito</p>
									</div>
								</div>
						</div>
					</section>
					<p class="lead font-weight-bold text-left">Documento:</p>
					<a class="btn btn-primary btn-block text-white font-weight-bold" href="{{ asset('docs/PLANOS/PMMU_Bom_Jesus_dos_Perdoes.pdf') }}" target="_blank"><i class="fa fa-eye fa-fw mr-1"></i> Visualizar</a>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="modalEngC" tabindex="-1" role="dialog" aria-labelledby="modalEngC" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-muted">Engenheiro Coelho</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="body">
					<p class="lead font-weight-bold">Apresentação:</p>
					<p class="text-justify">O presente documento apresenta o trabalho realizado entre a Prefeitura Municipal de Engenheiro Coelho e a Universidade São Francisco (USF), em cumprimento à Lei Municipal Nº 17/2018 de 26 de abril de 2018 que autoriza o poder executivo do Município em convênio com a Universidade São Francisco e dá outras providências, a elaborar o “Plano de Mobilidade Urbana de Engenheiro Coelho”.</p>
					<p class="text-justify">O Plano foi elaborado exclusivamente para o Município de Engenheiro Coelho e é objeto do Termo Aditivo nº 001/18. O mesmo é a junção dos Produtos 1 ao 3, que se constitui como Produto 4, o qual foi elaborado considerando-se a participação do grupo de Trabalho Local constituído pelo Município e a Universidade São Francisco. O produto final assim denominado pelo Ministério das Cidades é apresentado em um volume único. Esse Plano apresenta as diretrizes gerais da legislação vigente contemplando as seguintes etapas: Mobilização social, Diagnóstico atual da Mobilidade Urbana no Município e as alternativas e metas para melhorar as condições de vida da população do município.</p>
					<section class="testimonials text-center pt-1 pb-1">
						<p class="lead font-weight-bold text-left">Equipe:</p>
						<div class="container">
							<div class="row mb-4 justify-content-md-center">
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/lilian.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Lilian Fraletti</h5>
										<p class="font-weight-light mb-0">Eng. Ambiental</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/rebeca.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Rebeca Silva</h5>
										<p class="font-weight-light mb-0">Eng. Ambiental</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/suellen.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Suéllen Dumer</h5>
										<p class="font-weight-light mb-0">Eng. Ambiental</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/thaina.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Thaina Souza</h5>
										<p class="font-weight-light mb-0">Eng. Ambiental</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<p class="lead font-weight-bold text-left">Documento:</p>
					<a class="btn btn-primary btn-block text-white font-weight-bold" href="{{ asset('docs/PLANOS/PMMU_Engenheiro_Coelho.pdf') }}" target="_blank"><i class="fa fa-eye fa-fw mr-1"></i> Visualizar</a>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="modalJoan" tabindex="-1" role="dialog" aria-labelledby="modalJoan" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-muted">Joanópolis</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="body">
					<p class="lead font-weight-bold">Apresentação:</p>
					<p class="text-justify">O presente documento apresenta o trabalho de consultoria desenvolvido no âmbito do Convênio de Cooperação firmado entre a Prefeitura Municipal de Joanópolis e a Universidade São Francisco, autorizada pela lei de Mobilidade Urbana Federal 12.587 de 2012, que Autoriza o poder executivo Municipal a celebrar convênio com a Universidade São Francisco – USF e dá outras providências, tem por objeto a “Elaboração do Plano de Mobilidade Urbana de Joanópolis”.</p>
					<p class="text-justify">O referido documento foi elaborado exclusivamente para o Município de Joanópolis e é objeto do Termo Aditivo nº001/18. Além disto, este plano de Mobilidade Urbana foi estudado e planejado para o município de Joanópolis, de acordo com as necessidades encontradas no município. </p>
					<p class="text-justify">Esse documento é a associação dos Produtos 1 ao 3, que se constitui como Produto 4, o qual foi elaborado considerando-se as etapas decorrentes da análise do grupo de Trabalho Local constituído pelo Município com participação da Universidade São Francisco. Tal produto é apresentado em um volume único.</p>
					<p class="text-justify">Esse Plano apresenta as etapas para atender as diretrizes gerais da legislação vigente contemplando as seguintes etapas: Mobilização social, Diagnóstico atual da Mobilidade urbana no município e as alternativas e metas para melhorar as condições de vida e no meio natural.</p>
					<section class="testimonials text-center pt-1 pb-1">
						<p class="lead font-weight-bold text-left">Equipe:</p>
						<div class="container">
							<div class="row mb-4 justify-content-md-center">
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="https://http2.mlstatic.com/fundo-infinito-cinza-pursuit-grey-270-x-11-m-r21-D_NQ_NP_816068-MLB25961966199_092017-F.jpg" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Carlos Dias</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/patrick.jpeg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('13')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Patrick Yutaka</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/rafaelAlex.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('7')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Rafael Oliveira</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/rafaela.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('2')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Rafaela Neves</h5>
										<p class="font-weight-light mb-0">Arq. e Urbanismo</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/tamiris.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Tamiris Silva</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<p class="lead font-weight-bold text-left">Documento:</p>
					<a class="btn btn-primary btn-block text-white font-weight-bold" href="{{ asset('docs/PLANOS/PMMU_Joanopolis.pdf') }}" target="_blank"><i class="fa fa-eye fa-fw mr-1"></i> Visualizar</a>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="modalMoru" tabindex="-1" role="dialog" aria-labelledby="modalMoru" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-muted">Morungaba</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="body">
					<p class="lead font-weight-bold">Apresentação:</p>
					<p class="text-justify">O presente documento constitui-se na versão final do Plano de Mobilidade Urbana do Município de Morungaba no âmbito do Convênio de Cooperação firmado entre a Prefeitura Municipal de Morungaba e a Universidade São Francisco, autorizada pela Lei Municipal n° 1.669 de 05 de maio de 2016, que "Autoriza o poder executivo municipal a celebrar convênio com a Universidade São Francisco - USF e dá outras providências".</p>
					<p class="text-justify">O referido Plano foi elaborado exclusivamente para o Município de Morungaba e é objeto do Termo Aditivo n° 001/16.</p>
					<p class="text-justify">Esse documento é a associação dos Produtos 1 ao 3, que se constitui como Produto 4, o qual foi elaborado considerando-se as etapas decorrentes da análise do Grupo de Trabalho Local constituído pelo Município com participação da Universidade São Francisco. Tal produto é apresentado em um volume único.</p>
					<p class="text-justify">Esse Plano apresenta as etapas para atender as diretrizes gerais da legislação vigente contemplando as seguintes etapas: Mobilização social, Diagnóstico atual da Mobilidade urbana no município e as alternativas e metas para melhorar as condições de vida e no meio natural.</p>
					<section class="testimonials text-center pt-1 pb-1">
						<p class="lead font-weight-bold text-left">Equipe:</p>
						<div class="container">
							<div class="row mb-4 justify-content-md-center">
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="https://http2.mlstatic.com/fundo-infinito-cinza-pursuit-grey-270-x-11-m-r21-D_NQ_NP_816068-MLB25961966199_092017-F.jpg" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Isabella C.</h5>
										<p class="font-weight-light mb-0">Arq. e Urbanismo</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="https://http2.mlstatic.com/fundo-infinito-cinza-pursuit-grey-270-x-11-m-r21-D_NQ_NP_816068-MLB25961966199_092017-F.jpg" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Luiza C.</h5>
										<p class="font-weight-light mb-0">Arq. e Urbanismo</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/marcoTombi.jpg') }}"  alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Marco Tombi</h5>
										<p class="font-weight-light mb-0">Direito</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<p class="lead font-weight-bold text-left">Documento:</p>
					<a class="btn btn-primary btn-block text-white font-weight-bold" href="{{ asset('docs/PLANOS/PMMU_Morungaba.pdf') }}" target="_blank"><i class="fa fa-eye fa-fw mr-1"></i> Visualizar</a>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="modalPedr" tabindex="-1" role="dialog" aria-labelledby="modalPedr" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-muted">Pedra Bela</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="body">
					<p class="lead font-weight-bold">Apresentação:</p>
					<p class="text-justify">O presente documento tem como objetivo principal apresentar o resultado do acordo firmado entre a Prefeitura Municipal da cidade de Pedra Bela e a Universidade São Francisco, tendo como referência de elaboração a lei de Mobilidade Urbana Federal 12.587 que entrou em vigor em abril de 2012, instituindo assim as diretrizes da Política de Mobilidade Urbana.</p>
					<p class="text-justify">O Plano apresentado foi estruturado de modo exclusivo a atender ao município de Pedra Bela, sendo seu desenvolvimento embasado nas necessidades identificadas no mesmo apresentando divisão em etapas para o melhor entendimento das diretrizes gerais contidas na legislação vigente de modo a contemplar as seguintes etapas: mobilização social, diagnóstico de mobilidade municipal e propostas de Solução para os problemas identificados.</p>
					<p class="text-justify">Uma vez identificadas as carências de mobilidade no município, o documento foi subdividido em produtos, enumerados do 1 ao 3, que reunidos, constituem o produto 4, que foi elaborado contando com a participação de um Grupo de Trabalho Local, que foi basicamente constituído por representantes dos munícipes, do Poder Público e também da Universidade São Francisco.</p>
					<p class="text-justify">Os estudos levantados ao decorrer do prazo estipulado no cronograma de trabalho contidos nesse documento, foram abastecidos com informações fornecidas pela prefeitura de Pedra Bela e pesquisas adicionais pertinentes à Mobilidade Urbana. Após o término e apresentação do conteúdo referente ao produto 1, por meio de uma audiência pública, iniciouse o processo de preparação do produto 2.</p>
					<section class="testimonials text-center pt-1 pb-1">
						<p class="lead font-weight-bold text-left">Equipe:</p>
						<div class="container">
							<div class="row mb-4 justify-content-md-center">
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/jessica.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Jéssica A.</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/jeison.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Jeison H.</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/nicolas.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('3')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Nicolas Garcia</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/ricardo.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('1')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Ricardo Lima</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<p class="lead font-weight-bold text-left">Documento:</p>
					<a class="btn btn-primary btn-block text-white font-weight-bold" href="{{ asset('docs/PLANOS/PMMU_Pedra_Bela.pdf') }}" target="_blank"><i class="fa fa-eye fa-fw mr-1"></i> Visualizar</a>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="modalPira" tabindex="-1" role="dialog" aria-labelledby="modalPira" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-muted">Piracaia</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="body">
					<p class="lead font-weight-bold">Apresentação:</p>
					<p class="text-justify">O presente documento apresenta o trabalho realizado entre a Universidade São Francisco e a Prefeitura de Piracaia, no âmbito da elaboração do Plano de Mobilidade Urbana do Município de Piracaia com consultoria a lei de Mobilidade Urbana Federal 12.587 de 2012.</p>
					<p class="text-justify">Este plano de Mobilidade Urbana foi estudado e planejado exclusivamente para o município de Piracaia, de acordo com as necessidades encontradas e apresenta as etapas para atender as diretrizes gerais da legislação vigente contemplando as seguintes etapas de trabalho: Mobilização social, Diagnóstico atual da Mobilidade Urbana no Município e as Alternativas e Metas para melhorar as condições de vida e o meio natural do município.</p>
					<p class="text-justify">Entre os estudos realizados a partir das necessidades do município, esse documento é dividido em Produtos 1 ao 3, que juntos constituem o Produto 4, qual foi produzido com a participação do grupo de Trabalho Local constituído por representantes dos munícipes, do poder público municipal e da Universidade São Francisco.</p>
					<p class="text-justify">Os estudos levantados durante o prazo do cronograma de trabalho, contidos nesse documento, levam em consideração dados obtidos através da prefeitura de Piracaia, visitas in loco e estudos feitos a partir de pesquisas e suas devidas análises.</p>
					<section class="testimonials text-center pt-1 pb-1">
						<p class="lead font-weight-bold text-left">Equipe:</p>
						<div class="container">
							<div class="row mb-4 justify-content-md-center">
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="https://http2.mlstatic.com/fundo-infinito-cinza-pursuit-grey-270-x-11-m-r21-D_NQ_NP_816068-MLB25961966199_092017-F.jpg" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>João L.</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="https://http2.mlstatic.com/fundo-infinito-cinza-pursuit-grey-270-x-11-m-r21-D_NQ_NP_816068-MLB25961966199_092017-F.jpg" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Marcelo G.</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="https://http2.mlstatic.com/fundo-infinito-cinza-pursuit-grey-270-x-11-m-r21-D_NQ_NP_816068-MLB25961966199_092017-F.jpg" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Matheus P.</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/rafael.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Rafael Coutinho</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<p class="lead font-weight-bold text-left">Documento:</p>
					<a class="btn btn-primary btn-block text-white font-weight-bold" href="{{ asset('docs/PLANOS/PMMU_Piracaia.pdf') }}" target="_blank"><i class="fa fa-eye fa-fw mr-1"></i> Visualizar</a>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="modalTuiu" tabindex="-1" role="dialog" aria-labelledby="modalTuiu" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-muted">Tuiuti</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="body">
					<p class="lead font-weight-bold">Apresentação:</p>
					<ul><li>O Plano de Mobilidade de Tuiuti, elaborado pela equipe técnica da Universidade São
Francisco, é um documento que possui como objetivo principal instrumentar o planejamento
e apresentar resultados referentes ao acordo firmado entre a Prefeitura Municipal e a
Universidade, analisando os meios de infraestrutura de transporte de pessoas e bens do
município.</li></ul>
					<section class="testimonials text-center pt-1 pb-1">
						<p class="lead font-weight-bold text-left">Equipe:</p>
						<div class="container">
							<div class="row mb-4 justify-content-md-center">
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/nicolas.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('3')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Nicolas Garcia</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/ricardo.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('1')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Ricardo Lima</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/dido.png') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('22')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Deyvid Silva</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<p class="lead font-weight-bold text-left">Documento:</p>
					<a class="btn btn-primary btn-block text-white font-weight-bold" href="{{ asset('docs/PLANOS/PMMU_Tuiuti.pdf') }}" target="_blank"><i class="fa fa-eye fa-fw mr-1"></i> Visualizar</a>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalPedre" tabindex="-1" role="dialog" aria-labelledby="modalPedre" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-muted">Pedreira</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="body">
					<p class="lead font-weight-bold">Apresentação:</p>
					<ul><li>O presente documento expõe o trabalho de consultoria elaborado entre a Prefeitura
Municipal de Pedreira e a Universidade São Francisco, proveniente do Convênio de
Cooperação, aprovado pela Lei Municipal número 2.838, datado de 12 de março de 2020,
que autoriza o poder executivo Municipal a oficiar o termo de cooperação técnicocientífica com a Universidade São Francisco, o qual tem por objetivo a “Elaboração do
Plano de Mobilidade Urbana de Pedreira”.</li></ul>
					<section class="testimonials text-center pt-1 pb-1">
						<p class="lead font-weight-bold text-left">Equipe:</p>
						<div class="container">
							<div class="row mb-4 justify-content-md-center">
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/antonio.jpeg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('10')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Antonio Westhe</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/marcus.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('0')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Marcus Roberto</h5>
										<p class="font-weight-light mb-0">Eng. de Computação</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/bel.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('14')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Maria Izabel</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3"
											src="{{ asset('docs/ESTAGIARIOS/duda.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('15')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Eduarda Oliveira</h5>
										<p class="font-weight-light mb-0">Arq. e Urbanismo</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3"  
											src="{{ asset('docs/ESTAGIARIOS/brandao.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('8')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Gabriel Brandão</h5>
										<p class="font-weight-light mb-0">Eng. de Computação</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<p class="lead font-weight-bold text-left">Documento:</p>
					<a class="btn btn-primary btn-block text-white font-weight-bold" href="{{ asset('docs/PLANOS/PMMU_Pedreira.pdf') }}" target="_blank"><i class="fa fa-eye fa-fw mr-1"></i> Visualizar</a>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="modalSaoS" tabindex="-1" role="dialog" aria-labelledby="modalSaoS" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-muted">São Simão</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="body">
					<p class="lead font-weight-bold">Apresentação:</p>
					<ul><li>O presente documento tem como principal objetivo apresentar o resultado do Termo de
Cooperação Técnico-Científico firmado entre o Município de Interesse Turístico de São
Simão e a Universidade São Francisco pela lei ordinária nº. 2584 de 29 de agosto de 2019,
o qual tem por finalidade o desenvolvimento do “Plano Municipal de Mobilidade de São
Simão - SP” que apresenta o trabalho de consultoria exclusivamente ao município, uma
vez que toda a pesquisa e planejamento foram feitas em cima do município em questão.</li></ul>
					<section class="testimonials text-center pt-1 pb-1">
						<p class="lead font-weight-bold text-left">Equipe:</p>
						<div class="container">
							<div class="row mb-4 justify-content-md-center">
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/larissa.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('19')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Larissa Collpy</h5>
										<p class="font-weight-light mb-0">Arq. e Urbanismo</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/yasmin.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('20')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Yasmin Martins</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/patrick.jpeg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('13')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Patrick Yutaka</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/pedro.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('21')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Pedro Zem</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<p class="lead font-weight-bold text-left">Documento:</p>
					<a class="btn btn-primary btn-block text-white font-weight-bold" href="{{ asset('docs/PLANOS/PMMU_Sao_Simao.pdf') }}" target="_blank"><i class="fa fa-eye fa-fw mr-1"></i> Visualizar</a>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="modalSerr" tabindex="-1" role="dialog" aria-labelledby="modalSerr" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-muted">Serra Negra</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="body">
					<p class="lead font-weight-bold">Apresentação:</p>
					<ul><li>Este documento tem por finalidade principal a elaboração de projeto do acordo de
Cooperação Técnico-Científico firmado entre o Circuito das Águas Paulista, a Prefeitura
da Estância Hidromineral de Serra Negra e a Universidade São Francisco, utilizando como
padrão a lei de Mobilidade Urbana Federal 12.587 do ano de 2012 que elabora as diretrizes
da Política Nacional de Mobilidade Urbana.
</li></ul>
					<section class="testimonials text-center pt-1 pb-1">
						<p class="lead font-weight-bold text-left">Equipe:</p>
						<div class="container">
							<div class="row mb-4 justify-content-md-center">
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/rafaelAlex.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('7')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Rafael Oliveira</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/nathalia.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('6')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Nathalia Magrini</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/debora.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('23')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Débora Rosa</h5>
										<p class="font-weight-light mb-0">Arq. e Urbanismo</p>
									</div>
								</div>
								<div class="col-lg-6 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/rafaela.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('2')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Rafaela Neves</h5>
										<p class="font-weight-light mb-0">Arq. e Urbanismo</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<p class="lead font-weight-bold text-left">Documento:</p>
					<a class="btn btn-primary btn-block text-white font-weight-bold" href="{{ asset('docs/PLANOS/PMMU_Serra_Negra.pdf') }}" target="_blank"><i class="fa fa-eye fa-fw mr-1"></i> Visualizar</a>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	
	<script src="https://kit.fontawesome.com/435f912920.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	
	<script>
		var $doc = $('html, body');
		$('.scrollS').click(function() {
			$doc.animate({
				scrollTop: $( $.attr(this, 'href') ).offset().top
			}, 500);
			return false;
		});
		var array = {!! $descs !!};
		function showDesc(value) {
			if (value == 98) {
				document.getElementById('body').innerHTML = "";
				document.getElementById('body').innerHTML = "<p></p><ul><li>Atualmente é professor e coordenador do curso de Engenharia Civil da Universidade São Francisco - Campus de Bragança Paulista</li></ul><ul><li>Especialista em Gestão Financeira e Controladoria e mestrando em Educação</li></ul><ul><li>Com experiência de mercado, atua como engenheiro civil desde 2001, tendo sido responsável técnico por diversas obras residenciais e de infraestrutura urbana</li></ul><ul><li>Atuou como Secretário de Obras do município de Tuiuti na gestão municipal 2012-2015, participou como conselheiro do Conselho de Defesa do Patrimônio Histórico, Artístico e Cultural de Bragança Paulista e foi membro da Comissão Auxiliar de Fiscalização do CREA/SP, no município de Bragança Paulista</li></ul><ul><li>Atualmente é membro do Conselho das Cidades do município de Bragança Paulista e é suplente do conselho do CREA/SP representante institucional.</li></ul><br><ul><li><b>Graduação em Engenharia Civil</b>&nbsp;</li><ul><li>Universidade São Francisco (2000)</li></ul><br><li><a target='_blank' rel='nofollow' href='http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K8059288D6'>http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K8059288D6</a> </li></ul><p></p>";
			} else if (value == 97) { 
				document.getElementById('body').innerHTML = "";
				document.getElementById('body').innerHTML = "<p></p><p>·&nbsp;&nbsp;&nbsp;&nbsp;Doutor em Tecnologia Nuclear pela Universidade de São Paulo (2014), com período sanduíche na Michigan State University (2013).</p><p>·&nbsp;&nbsp;&nbsp;&nbsp;É Professor em Tempo Integral da Universidade São Francisco (USF) e Coordenador do Curso de Engenharia de Computação do campus Bragança Paulista da USF.</p><p>·&nbsp;&nbsp;&nbsp;&nbsp;Possui experiência em Engenharia de Materiais e Engenharia Nuclear. </p><p>·&nbsp;&nbsp;&nbsp;&nbsp;Tem participado de projetos de pesquisa envolvendo polímeros biodegradáveis e cura de materiais poliméricos por radiação ultravioleta (UV) e por feixe de elétrons (EB).</p><p>·&nbsp;&nbsp;&nbsp;&nbsp;Possui trabalhos publicados em periódicos nacionais e internacionais, além de artigos completos em anais de congressos nacionais e internacionais. </p><p>·&nbsp;&nbsp;&nbsp;&nbsp;<a target='_blank' rel='nofollow' href='http://lattes.cnpq.br/3841717646904035'>http://lattes.cnpq.br/3841717646904035</a></p><br><p></p>";
			} else if (value == 99 || array[value].description == null) {
				document.getElementById('body').innerHTML = "";
				document.getElementById('body').innerHTML = "<p class='text-center'>Indisponível</p>";
			} else {
				document.getElementById('body').innerHTML = "";
				document.getElementById('body').innerHTML = array[value].description;
			}
		}
		
		$(document).ready(function(){
			$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('a[href="#top"]').fadeIn();
				} else {
					$('a[href="#top"]').fadeOut();
				}
			});
			
			$('a[href="#top"]').click(function(){
				$('html, body').animate({scrollTop : 0},800);
				return false;
			});
		});
	</script>
</body>

</html>