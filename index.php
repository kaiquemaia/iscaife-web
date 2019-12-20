<!DOCTYPE html>
<html lang="en">
<head>

	<?php $title = "Sobre"; ?>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the apple mobile web app capable -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<!-- set the HandheldFriendly -->
	<meta name="HandheldFriendly" content="True">
	<!-- set the apple mobile web app status bar style -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!-- set the description -->
	<meta name="description" content="Swan Lake - Lead Generation Marketing Landing Page">
	<meta name="keywords" content="agency, bootstrap, business, corporate, creative, minimal, modern, onepage, personal, portfolio,  html5, responsive">
	<meta name="author" content="Swan Lake - Lead Generation Marketing Landing Page">
	<!-- Page Title -->
	<title>Dr.Alexandre </title>
	<!-- include the site stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7cUbuntu:400,700" rel="stylesheet">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="assets/css/fonts-icons.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="assets/css/plugin-resets.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="assets/css/responsive.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="assets/css/color.css">
	<!-- Font Awsome -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
	
	
</head>
<body>
	<div id="wrapper">
		<div class="loader-container" id="loader">
			<div class="holder">
				<div class="la-line-scale la-2x">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
		</div>
		<!-- header of the page start here -->
		<?php require('inc/header.php') ?>
		<!-- header of the page end here -->
		<!-- main content wrapping section start here -->
		<main id="main">
			<!-- main banner section start here -->
			<section class="bg-img-full main-banner bg-img-parallax" style="background-image: url(assets/images/bg/cirurgia-laser2.jpg);" data-scroll-index="0">
				<span class="overlay"></span>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-7">
							<span class="title">Homem que se cuida não perde o melhor da vida</span>
							<h1 class="heading text-uppercase"> Urologia  <span class="main-color"> Minimamente Invasiva  </span></h1>
							<span class="divider white"></span>
							<div class="btn-holder">
								<a href="#" class="btn btn-default main-bg-color text-uppercase" data-scroll-nav="2">Saber Mais</a>
							</div>
							<span class="arrow" style="background-image: url(images/arrow.png);"></span>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-5">
							<!-- quote form start here -->
							<section class="quote-form" style="background-image: url(images/img02.jpg);" data-scroll-index="1">
								<h2 class="form-heading text-center text-uppercase">Tire suas dúvidas</h2>
								<h4 class=" text-center">Sobre HoLEP e cirurgia robótica</h4>
								<span class="form-title text-center"></span>
								<form  method="post" data-toggle="validator" action="enviarEmail.php">
									<fieldset>
										<div class="form-group">
											<input type="text" id="name"  name="nome" placeholder="Seu nome" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group">
											<input type="email" id="email" name="email"  placeholder="Seu E-mail" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group">
											<input type="tel" id="phone"  name="telefone" placeholder="Seu Telefone" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group " row="3">
										<textarea class="form-control" name="textarea" placeholder="Sua dúvida" rows="3"></textarea>
										</div>

										<div id="msgSubmit" class="form-message hidden"></div>
										<span class="info"><i class="fa fa-info-circle main-color" aria-hidden="true"></i> Respondemos o mais rápido possível</span>
										<button class="btn btn-default main-bg-color" type="submit" id="form-submit">ENVIAR</button>
									</fieldset>
								</form>

								
							</section>
							<!-- quote form end here -->
						</div>
					</div>
				</div>
			</section>
			<!-- main banner section end here -->
			<!-- about section start here -->
			<section class="about-section pad-top-lg pad-bottom-sm" data-scroll-index="2" id="cirurgia">
				<div class="container">
					<!-- main heading start here -->
					<header class="main-heading row" >
						<div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center">
							<h2 class="heading text-uppercase"><span class="main-color">CIRURGIAS</span></h2>
							<span class="divider center"></span>

							
							
						</div>
					</header>
					<div class="row">
						<!-- about box start here -->
						<div class="col-xs-22 col-sm-6 col-md-6 about-box pad-bottom-sm">
							<span class="title ">O LASER EM PROSTATA: A ENUCLEAÇAO DA PROSTATA<br> COM HOLMIUM LASER – HoLEP</span>
							<span class="divider"></span>
							<img src="assets/images/laser.png" width="" height="100px" alt="">
							<p>O procedimento é realizado pela via transuretral onde se utiliza um aparelho que permite a passagem da fibra laser por um de seus canais. Nesse procedimento é possível a retirada completa do adenoma prostático, sem deixar nenhum resíduo que possa crescer no futuro e trazer de volta os mesmos problemas.</p>
							<a href="cirurgia-laser-prostata.php" class="more main-color text-uppercase">LER MAIS</a>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-6 about-box pad-bottom-sm">
							<span class="title text-uppercase">Cirurgia robótica <br> para o câncer de próstata</span>
							<span class="divider"></span>
							<img src="assets/images/prostata.png" width="" height="50px"  alt="">
							<p>A prostatectomia radical implica na retirada completa da próstata, das vesículas seminais e, quando indicada, na retirada dos linfonodos locais e regionais. Comparada a cirurgia aberta, a cirurgia robótica oferece ao cirurgião um campo de visão ampliado e em três dimensões, permitindo uma visualização de detalhes anatômicos não vistos na cirurgia aberta e nem mesmo na laparoscópica clássica.</p>
							<a href="cancer-de-prostata.php" class="more main-color text-uppercase">LER MAIS</a>
						</div>
						<!-- about box end here -->
						<!-- about box start here -->
						
						<!-- about box end here -->
						
						
					</div>
				</div>
			</section>
			<!-- about section end here -->
			<!-- counter section start here -->
			<div class="counter-section text-center bg-img-full pad-top-lg pad-bottom-lg" style="background-image: url(images/img04.jpg);" data-scroll-index="2" id="sobre">
				<div class="container pad-top-xs">
					<div class="row">
						<div class="co-xs-12 col-sm-6 pad-bottom-xs">
							<span class="image"><img src="assets/images/dr.jpg" alt="" width="360px"></span>
							
						</div>
						<div class="co-xs-12 col-sm-6 pad-bottom-xs" style="text-align: left;">
							<h1 class="main-color"><b>Dr. Alexandre Iscaife</b></h1>
							<p class="o-doutor">Doutor em urologia pela Faculdade de Medicina da USP (FMUSP) e médico assistente da Clínica Urológica do Hospital das Clinicas da USP, especialista em cirurgias minimamente invasivas (HoLEP, Laparoscopia e Robótica).
								Fellowship em cirurgia robótica e HoLEP na Ospedalle San Raffaele em Milão – Itália.</p>

								<div class="co-xs-12 col-sm-6 " style="text-transform: uppercase;">
									<i class="fa fa-graduation-cap " aria-hidden="true" style="font-size: 90px; text-align: left;">
									<h5>Doutor em urologia pela USP</h5>	
								</i>
								</div>

								<div class="co-xs-12 col-sm-6 " style="text-transform: uppercase;">
									<i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 90px; text-align: left;">
									<h5>Clinical Fellowship em cirurgia robótica Ospedalle San Raffaele - Italia</h5>	
								</i>
								</div>

						</div>
					</div>
				</div>
			
					
				</div>
			</div>
			<!-- counter section end here -->
			<!-- services section starts here -->

	<!-- ------------------------------------------------------ Trecho de cirurgias excluido ------------------------------------------------------ -->

			<!-- <section class="services-section pad-top-lg pad-bottom-sm" data-scroll-index="3">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-6 col-md-push-6 pad-bottom-sm">
							<div class="txt-box">
							
							

								<header class="main-heading">
									<h2 class="heading text-uppercase"><span class="main-color"> </span>  ipsum</h2>
									<span class="divider"></span>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been standard. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
								</header>
								
							</div>
						</div>
						<div class="col-xs-12 col-md-6 col-md-pull-7 pad-bottom-sm">
							
							
							<ul class="services-box list-unstyled text-center" >
								<li>
									<div class="over">
									<i class="fa fa-user-md" style="font-size: 60px; color: #000;"></i>
										<span class="title text-uppercase "><a href="hiperplasia.php">hiperplasia da próstata</a></span>
										
										
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ever since the 1500s.</p>
									</div>
								</li>
								<li>
									<div class="over">
									<i class="fa fa-user-md" style="font-size: 60px; color: #000;"></i>
										<span class="title text-uppercase"><a href="#">O laser em próstata</a></span>
										
										
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ever since the 1500s.</p>
									</div>
								</li>
							
							</ul>
							
							
						</div>
					</div>
				</div>
			</section> -->

 	<!-- // ------------------------------------------------------ Trecho de cirurgias excluido ------------------------------------------------------ -->
			
			
			<!-- services section end here -->
			<!-- price section start here -->
			<section class="bg-img-full price-section pad-top-lg pad-bottom-sm" style="background-image: url(;" data-scroll-index="4">
				<div class="container">
					<!-- main heading start here -->
					<header class="main-heading row">
						<div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center" id="doencas">
							<h2 class="heading text-uppercase"><span class="main-color">TRATAMENTO </span> ESPECIALIZADO</h2>
							<span class="divider center"></span>
						</div>
					</header>
					<!-- main heading end here -->
					<div class="row">

					<!-- Hiperplasia prostática benigna (HPB) -->

						<div class="col-xs-12 col-sm-6 col-md-4 pad-bottom-sm">
							<!-- price box start here -->
							<div class="price-box">
								<!-- <header class="header">
								<h3 class="text-uppercase">Hiperplasia prostática benigna (HPB)</h3>
								<img src="http://sbu-sp.org.br/wp-content/uploads/2017/12/post_noticia_12-990x556.png" alt="">
								
								</header> -->
								<div class="box">

								<h3 class="text-uppercase">Hiperplasia prostática benigna (HPB)</h3>
								<img src="assets/images/cirurgia/Hiper.jpg" alt="">	
								
									<p>A partir dos quarenta anos inicia-se um processo de crescimento da zona de transição da próstata, na região peri-uretral, que acometerá 80% dos homens. Esse crescimento não causa necessariamente sintomas de obstrução em todos os homens, mas sim em 30-60% de todos acima dos 65 anos.</p>
									<a href="hiperplasia.php" class="order text-uppercase lightbox px-4">Ler mais</a>
									<a href="#popup1" class="order text-uppercase lightbox px-4">Agendar Consulta</a>
								</div>
							</div>
							<!-- price box end here -->
						</div>

						<!--  Câncer de próstata -->

						<div class="col-xs-12 col-sm-6 col-md-4 pad-bottom-sm">
							<!-- price box start here -->
							<div class="price-box">
								<!-- <header class="header">
								<h3 class="text-uppercase">Câncer de próstata</h3>
								
								</header> -->

								
								<div class="box">
									
								<h3 class="text-uppercase">Câncer <br> de prostata</h3>
								<img src="assets/images/cirurgia/prostata.jpg" alt="">

									<p>O câncer de próstata (CaP) é a neoplasia mais frequente no homem, excetuando-se os tumores de pele. O principal fator de risco é a idade, sendo 65 anos a idade média ao diagnostico. Antes dos 40 anos sua ocorrência é extremamente rara. </p>
									<a href="cancer-de-prostata.php" class="order text-uppercase lightbox px-4">Ler mais</a>
									<a href="#popup1" class="order text-uppercase lightbox px-4">Agendar Consulta</a>
								</div>
							</div>
							<!-- price box end here -->
						</div>

						<!-- Câncer de Rim  -->

						<div class="col-xs-12 col-sm-6 col-md-4 pad-bottom-sm">
							<!-- price box start here -->
							<div class="price-box">
								<!-- <header class="header">
								<h3 class="text-uppercase"> Câncer de Rim</h3>
								
								</header> -->
								<div class="box">
									
									<h3 class="text-uppercase">Câncer <br> de Rim</h3>
								<img src="assets/images/cirurgia/rim.jpg" alt="">

									<p>O carcinoma de células renais (CCR) é também conhecido como câncer de células renais. Cerca de 9 em cada 10 cânceres renais são carcinomas de células renais. Embora o CCR geralmente cresça como um único tumor dentro de um rim, às vezes há dois ou mais tumores em um rim ou até mesmo tumores em ambos os rins ao mesmo tempo.</p>
									<a href="cancer-de-rim.php" class="order text-uppercase lightbox px-4">Ler mais</a>
									<a href="#popup1" class="order text-uppercase lightbox px-4">Agendar consulta</a>
								</div>
							</div>
							<!-- price box end here -->
						</div>
					</div>
				</div>
			</section>
			<!-- price section end here -->
			<!-- quote section start here -->

			<!-- background-image: url(http://placehold.it/1920x1080);" -->

			<!-- Section ( Agende sua consulta agora!) -->
			<section class="bg-img-full bg-img-parallax quote-section pad-top-lg pad-bottom-lg" style="background-image: url(assets/images/clinica/7.jpeg);">
				<span class="overlay"></span>
				<div class="container">
					<div class="row">
						<div class="col-cs-12 col-sm-10 col-lg-8 col-sm-push-5 col-lg-push-2 text-center">
						
						<form id="duvida" data-toggle="validator" action="enviar-duvida.php" method="POST" >
							<h1><center>Dúvidas</center></h1>
							<h4 class=" text-center">Sobre HoLEP e cirurgia robótica</h4><br>
									<fieldset>
										<div class="form-group col-md-6">
											<input type="text" id="name" name="nome" placeholder="Seu nome" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group col-md-6">
											<input type="tel" id="phone"  name="telefone" placeholder="Seu Telefone" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group col-md-12">
											<input type="email" id="email" name="email" placeholder="Seu E-mail" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group col-md-12" row="3">
										<textarea class="form-control" name="textarea" placeholder="Sua dúvida" rows="3"></textarea>
										</div>

										<div id="msgSubmit" class="form-message hidden"></div>
										<span class="info"><i class="fa fa-info-circle main-color" aria-hidden="true"></i> Respondemos o mais rápido possível</span><br>
										<button class="btn btn-default main-bg-color" type="submit" id="form-submit">ENVIAR</button>
									</fieldset>
								</form>
								
						</div>
					</div>
				</div>
			</section>

		</main>
		
			<!-- Footer all pages -->
			<?php require('inc/footer.php') ?>
			

			<!-- Formulário de contato para agendamento -->
			<?php require_once("inc/form-agendamento.php") ?>

				<!-- quote form end here -->

	    	</div>
	    </div>
	</div>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/plugins.js" defer></script>
	<script src="assets/js/jquery.main.js" defer></script>
	
</body>
</html>