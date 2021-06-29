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
	
	<link href="{{ asset('css/landing-page2.min.css') }}" rel="stylesheet">
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
				<a class="btn btn-outline-secondary mr-2" href="#">Início</a>
				<a class="btn btn-outline-secondary mr-2" href="{{ route('blog') }}">Blog</a>
				<button type="button" class="btn btn-outline-secondary mr-2" data-toggle="modal" data-target="#modalContact">Fale Conosco</button>
				<a class="btn btn-secondary" href="{{ route('login') }}">Entrar</a>
			</div>
			@else
			<div>
				<a class="btn btn-outline-secondary mr-2" href="#">Início</a>
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
					<h1 class="mb-5">Projetos de Extensão</h1>
				</div>
				<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
					<a href="#projetos" class="btn btn-outline-light btn-lg scrollS">Visualizar Projetos</a>
				</div>
			</div>
		</div>
	</header>
	
	<section class="testimonials text-center bg-light pt-4 pb-4">
		<div class="container">
			<h2 id="projetos" class="pt-3">Projetos Desenvolvidos:</h2>
			<hr class="mb-5 mt-5">
			<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselIndicators" data-slide-to="1"></li>
					<li data-target="#carouselIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row mb-5 justify-content-md-center">
							<div class="col-lg-3 pb-3 pt-3">
								<div class="testimonial-item mx-auto mb-5 mb-lg-0">
									<div class="show-image">						
										<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/PLANOS/Img/engenheiro_coelho.jpg') }}" alt="">
										<a class="text-secondary" data-toggle="modal" data-target="#modalEngC"><i class="fa fa-eye fa-2x"></i></a>
									</div>
									<h5>Engenheiro Coelho</h5>
								</div>
							</div>
							<div class="col-lg-3 pb-3 pt-3">
								<div class="testimonial-item mx-auto mb-5 mb-lg-0">
									<div class="show-image">
										<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/PLANOS/Img/joanopolis.jpg') }}" alt="">
										<a class="text-secondary" data-toggle="modal" data-target="#modalJoan"><i class="fa fa-eye fa-2x"></i></a>
									</div>
									<h5>Joanópolis</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
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
										<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/PLANOS/Img/piracaia.png') }}" alt="">
										<a class="text-secondary" data-toggle="modal" data-target="#modalPira"><i class="fa fa-eye fa-2x"></i></a>
									</div>
									<h5>Piracaia</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row mb-5 justify-content-md-center">
							<div class="col-lg-3 pb-3 pt-3">
								<div class="testimonial-item mx-auto mb-5 mb-lg-0">
									<div class="show-image">
										<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/PLANOS/Img/amparo.jpg') }}" alt="">
										<a class="text-secondary" data-toggle="modal" data-target="#modalAmparo"><i class="fa fa-eye fa-2x"></i></a>
									</div>
									<h5>Amparo</h5>
								</div>
							</div>
							<div class="col-lg-3 pb-3 pt-3">
								<div class="testimonial-item mx-auto mb-5 mb-lg-0">
									<div class="show-image">
										<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/PLANOS/Img/serra_negra.jpg') }}" alt="">
										<a class="text-secondary" data-toggle="modal" data-target="#modalSerra"><i class="fa fa-eye fa-2x"></i></a>
									</div>
									<h5>Serra Negra</h5>
								</div>
							</div>
							<div class="col-lg-3 pb-3 pt-3">
								<div class="testimonial-item mx-auto mb-5 mb-lg-0">
									<div class="show-image">
										<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/PLANOS/Img/smartmonteiro.jpg') }}" alt="">
										<a class="text-secondary" data-toggle="modal" data-target="#modalSmartMonteiro"><i class="fa fa-eye fa-2x"></i></a>
									</div>
									<h5>Smart Monteiro</h5>
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
					<p class="text-justify">Elaborado pela Equipe Técnica do PMMU da Universidade São Francisco em parceria com a Prefeitura de Monteiro Lobato seguindo a metodologia do Ministério do Turismo. Este estudo tem como objetivo a análise do questionário que foi aplicado no dia 22 de novembro de 2019, em Monteiro Lobato, onde os turistas participaram ativamente no levantamento de dados de demanda turística do município.</p>
					<p class="text-justify">Seguindo os parâmetros e metodologias estabelecidas pelo Ministério do turismo, serão apresentadas as propostas de alteração das perguntas e a disponibilização de um método de questionário que possua praticidade e eficácia.</p>
					<p class="text-justify">Como embasamento deste documento, foram utilizados Estudos já realizados pelo ministério, como o Estudo de Demanda Turística Internacional do Brasil em 2017, e a metodologia apresentada no livreto de Segmentação do Turismo e Mercado, elaborado pelo Ministério do Turismo, Secretaria Nacional de Políticas de Turismo, Departamento de Estruturação, Articulação e Ordenamento Turístico e Coordenação Geral de Segmentação, onde possui as diretrizes para esse levantamento, como também, questionários já elaborados para este fim.</p>
					<p class="text-justify">Após a aplicação do questionário, foi elaborado um diagnóstico geral da situação do turismo no município e o levantamento do perfil dos turistas que visitam o município, com gráficos e legendas informativas, avaliando conteúdos diversos, como infraestrutura municipal, qualidade dos destinos e atrativos turísticos, tempo de permanência, perfis socioeconômicos, permanências, entre outros dados.</p>
					<section class="testimonials text-center pt-1 pb-1">
						<p class="lead font-weight-bold text-left">Equipe:</p>
						<div class="container">
							<div class="row mb-4 justify-content-md-center">
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/nicolas.jpg') }}" alt="">
											<a onclick="showDesc('3')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Nicolas Garcia</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/rafael.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Rafael Coutinho</h5>
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
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/cayqueMatias.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Cayque Mathias</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/lucas.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('99')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Lucas Marques</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
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
					<a class="btn btn-primary btn-block text-white font-weight-bold" href="{{ asset('docs/EXTENSAO/Monteiro.pdf') }}" target="_blank"><i class="fa fa-eye fa-fw mr-1"></i> Visualizar</a>
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
					<p class="text-justify">Este estudo foi elaborado exclusivamente para o município de Engenheiro Coelho, visando atender as necessidades de suprir a demanda gerada nos últimos anos acerca da coleta de lixo, reciclagem e correta destinação dos resíduos sólidos, como identificado e apontado pelo Plano de Mobilidade Urbana de Engenheiro Coelho.</p>
					<p class="text-justify">O objetivo geral deste projeto é identificar todos os aspectos pertinentes à construção e implantação de um ponto permanente de Coleta Seletiva, denominado “Ecoponto”, nas dependências do município.</p>
					<p class="text-justify">A pesquisa abrange o impacto ambiental sobre a área de implantação; a legislação nacional, estadual e municipal acerca do tema; estimativa de custos para implantação, entre outros. Itens quais que se mostram necessários para que o corpo técnico responsável pela futura execução dos projetos provenientes deste Plano, possa ter em mãos parâmetros que compõem a Sustentabilidade: Economicamente Viável, Socialmente Justo e Ecologicamente Correto.</p>
					<section class="testimonials text-center pt-1 pb-1">
						<p class="lead font-weight-bold text-left">Equipe:</p>
						<div class="container">
							<div class="row mb-4 justify-content-md-center">
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
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/patrick.jpeg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('13')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Patrick Y.</h5>
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
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/mateus.JPG') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('4')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Matheus Fagundes</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<p class="lead font-weight-bold text-left">Documento:</p>
					<a class="btn btn-primary btn-block text-white font-weight-bold" href="{{ asset('docs/EXTENSAO/Engenheiro.pdf') }}" target="_blank"><i class="fa fa-eye fa-fw mr-1"></i> Visualizar</a>
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
					<p class="text-justify">O projeto de "Implantação De Um Novo Sistema De Transporte E Alteração Do Sentido Das Vias" foi estudado e desenvolvido para o município de Joanópolis conforme as suas necessidades no que diz respeito ao transporte especial e ao fluxo do trânsito pelas vias municipais.</p>
					<p class="text-justify">Este documento é resultante do Plano de Municipal de Mobilidade Urbana de Joanópolis (PMUJ), facilitando assim a locomoção, tanto aos joanopolitanos, quanto aos turistas que vem em busca de descanso, aventura, lazer etc.</p>
					<section class="testimonials text-center pt-1 pb-1">
						<p class="lead font-weight-bold text-left">Equipe:</p>
						<div class="container">
							<div class="row mb-4 justify-content-md-center">
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/patrick.jpeg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('13')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Patrick Y.</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/rafaela.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('2')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Rafaela N.</h5>
										<p class="font-weight-light mb-0">Arq. e Urbanismo</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<p class="lead font-weight-bold text-left">Documento:</p>
					<a class="btn btn-primary btn-block text-white font-weight-bold" href="{{ asset('docs/EXTENSAO/Joanopolis.pdf') }}" target="_blank"><i class="fa fa-eye fa-fw mr-1"></i> Visualizar</a>
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
					<p class="text-justify">"O Catálogo de Turismo Rural de Piracaia é o fruto do desejo de realizar um trabalho de campo sobre os recursos e atrativos rurais de Piracaia, para que sirvam como ponto de partida para ações que levem ao desenvolvimento do turismo rural no município, de forma organizada, profissional e sustentável.</p>
					<p class="text-justify">Através dessa partilha de dados, tenho a intenção de "revelar a bela Piracaia rural" aos Piracaienses, Piracaianos, empreendedores locais, autoridades e instituições, para que todos possam fazer a sua parte, entendendo a importância do seu papel no desenvolvimento e no crescimento dessa atividade econômica no município.</p>
					<p class="text-justify">O turismo é como as engrenagens de um relógio composta por muitas peças. Todas as peças são importantes e têm um papel a desempenhar. Se uma das peças não está fazendo o que tem que fazer, o relógio emperra, não funciona, os ponteiros param de marcar a hora, assim como todas as peças param de trabalhar.</p>
					<p class="text-justify">O Turista ou o visitante é aquele que está de passagem e escolhe desfrutar seu tempo de vida num local que encanta seus olhos e coração, pois no fundo, o desejo de experimentar algo novo e que possa enriquecer sua existência, pois é o que o faz sair de casa.</p>
					<p class="text-justify">Através desse catálogo, quero divulgar, mostrar, encantar e convidar a todos, para que conheçam uma "Piracaia Rural" que poucos conhecem."</p>
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
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/patrick.jpeg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('13')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Patrick Y.</h5>
										<p class="font-weight-light mb-0">Eng. Civil</p>
									</div>
								</div>
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/rafaelAlex.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('7')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Rafael Alex</h5>
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
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/brandao.jpg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('8')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Gabriel Brandão</h5>
										<p class="font-weight-light mb-0">Eng. de Computação</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<p class="lead font-weight-bold text-left mt-2">Site:</p>
					<a class="btn btn-primary btn-block text-white font-weight-bold" href="http://trpiracaia.pmmu.com.br" target="_blank"><i class="fa fa-eye fa-fw mr-1"></i> Visualizar</a>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="modalAmparo" tabindex="-1" role="dialog" aria-labelledby="modalAmparo" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-muted">Projeto em Amparo</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="body">
					<p class="lead font-weight-bold">Apresentação:</p>
					<p class="text-justify">O presente projeto de extensão foi desenvolvido com o intuito de contribuir para a experiência dos alunos graduando tanto no quesito construtivo e arquitetônico, quanto no quesito profissional ao entrevistar os clientes e procurar atender as necessidades dos mesmos.</p>
					<p class="text-justify">O projeto foi desenvolvido para o município de Amparo, a partir do interesse de um integrante do Grupo de Turismo Rural do Serviço Nacional de Aprendizagem Rural (SENAR) em construir um complexo de turismo em sua propriedade.</p>
					<p class="text-justify">No espaço já tinha uma adega, uma vinícola e um restaurante. O projeto então foi desenvolver uma pousada no estilo minimalista, que inclui os seguintes espaços recepção, sala de estar, wine bar, café e apartamentos para receber de 2 a 4 pessoas com varanda para melhor aproveitar a vista da propriedade.</p>
					<p class="text-justify">Toda a equipe de alunos dos cursos de Engenharia Civil e Arquitetura e Urbanismo trabalharam em conjunto, desenvolvendo todos os projetos em etapas. Por se tratar de um projeto de alta complexidade, os alunos tiveram que colocar em prática toda a teoria e experiência adquirida pela equipe em âmbito acadêmico.</p>
					<p class="text-justify">Link de acesso aos arquivos: <a href="https://drive.google.com/drive/folders/1U14Z-Pd7z67sDi6nXWp5MH3H9vdtBC_n?usp=sharing" target="_blank">Clique Aqui</a></p>
					<center><img class="img-fluid mb-3" src="{{ asset('docs/EXTENSAO/ext2.png') }}" alt=""></center>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="modalSerra" tabindex="-1" role="dialog" aria-labelledby="modalSerra" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-muted">Projeto em Serra Negra</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="body">
					<p class="lead font-weight-bold">Apresentação:</p>
					<p class="text-justify">O presente projeto de extensão foi desenvolvido com o intuito de contribuir para a experiência dos alunos graduando tanto no quesito construtivo e arquitetônico, quanto no quesito profissional ao entrevistar os clientes e procurar atender às necessidades deles.</p>
					<p class="text-justify">O projeto foi desenvolvido para o município de Serra Negra, a partir do interesse da dona da propriedade em construir um novo espaço e em um novo local para atender melhor os seus clientes.</p>
					<p class="text-justify">No espaço já tinha uma cafeteria, que não atendia as necessidades atuais dos clientes. Então o projeto foi desenvolver uma nova cafeteria, num novo local e com um estilo arquitetônico mais moderno e rústico também, que inclui os seguintes espaços cozinha industrial, balcão para preparar as bebidas à base de café e um deck que serve como vista de um mirante.</p>
					<p class="text-justify">Toda a equipe de alunos dos cursos de Engenharia Civil e Arquitetura e Urbanismo trabalharam em conjunto, desenvolvendo todos os projetos em etapas. Por se tratar de um projeto de alta complexidade, os alunos tiveram que colocar em prática toda a teoria e experiência adquirida pela equipe em âmbito acadêmico.</p>
					<p class="text-justify">Link de acesso aos arquivos: <a href="https://drive.google.com/drive/folders/13aOuaQiUTNNe0FiQcNJHzQLDZ_hIPbSV?usp=sharing" target="_blank">Clique Aqui</a></p>
					<center><img class="img-fluid mb-3" src="{{ asset('docs/EXTENSAO/ext2.png') }}" alt=""></center>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
		<div class="modal fade" id="modalSmartMonteiro" tabindex="-1" role="dialog" aria-labelledby="modalSmartMonteiro" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-muted">Smart Monteiro</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="body">
					<p class="lead font-weight-bold">Apresentação:</p>
					<p class="text-justify">O Projeto de Smart City (Cidade Inteligente) está sendo elaborado exclusivamente para o município de Monteiro Lobato - SP e consiste na interação das pessoas com o município, a fim de desenvolver a economia e o bem estar da população, criando-se uma cidade tecnológica com destaque na sustentabilidade e na inovação.</p> 
					    <p> Tal contato decorre com a comunicação entre o cidadão e as operações municipais. Esse assunto se conecta com o tema do desenvolvimento sustentável, fazendo-se ambos assuntos importantíssimos para discussão global, que afeta várias áreas que sofrem algumas dificuldades nos tempos atuais como o trânsito e segurança, o turismo e entretenimento, a sustentabilidade etc. </p>
					<section class="testimonials text-center pt-1 pb-1">
						<p class="lead font-weight-bold text-left">Equipe:</p>
						<div class="container">
							<div class="row mb-4 justify-content-md-center">
								<div class="col-lg-4 pb-3 pt-3">
									<div class="testimonial-item mx-auto mb-5 mb-lg-0">
										<div class="show-image">
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/patrick.jpeg') }}" alt="">
											<a data-dismiss="modal" onclick="showDesc('13')" data-toggle="modal" data-target="#modal" class="text-secondary"><i class="fa fa-eye fa-2x"></i></a>
										</div>
										<h5>Patrick Y.</h5>
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
											<img class="img-fluid rounded-circle mb-3" src="{{ asset('docs/ESTAGIARIOS/brandao.jpg') }}" alt="">
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
					<a class="btn btn-primary btn-block text-white font-weight-bold" href="{{ asset('docs/EXTENSAO/SmartMonteiro.pdf') }}" target="_blank"><i class="fa fa-eye fa-fw mr-1"></i> Visualizar</a>
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