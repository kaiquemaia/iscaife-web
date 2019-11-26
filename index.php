<!DOCTYPE html>
<html lang="en">
<head>
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
			<section class="bg-img-full main-banner bg-img-parallax" style="background-image: url(assets/images/banner2.jpg);" data-scroll-index="0">
				<span class="overlay"></span>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-7">
							<span class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
							<h1 class="heading text-uppercase">Lorem ipsum dolor sit amet <span class="main-color">Swan Lake Template</span></h1>
							<span class="divider white"></span>
							<div class="btn-holder">
								<a href="#" class="btn btn-default main-bg-color text-uppercase" data-scroll-nav="2">Saber Mais</a>
							</div>
							<span class="arrow" style="background-image: url(images/arrow.png);"></span>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-5">
							<!-- quote form start here -->
							<section class="quote-form" style="background-image: url(images/img02.jpg);" data-scroll-index="1">
								<h2 class="form-heading text-center text-uppercase">Fale conosco</h2>
								<span class="form-title text-center">Nos mande uma mensagem</span>
								<form id="contactForm" data-toggle="validator">
									<fieldset>
										<div class="form-group">
											<input type="text" id="name" placeholder="Seu nome" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group">
											<input type="email" id="email" placeholder="Seu E-mail" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group">
											<input type="tel" id="phone" placeholder="Seu Telefone" class="form-control" required data-error="NEW ERROR MESSAGE">
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
			<section class="about-section pad-top-lg pad-bottom-sm" data-scroll-index="2">
				<div class="container">
					<!-- main heading start here -->
					<header class="main-heading row">
						<div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center">
							<h2 class="heading text-uppercase"><span class="main-color">CIRURGIAS</span></h2>
							<span class="divider center"></span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						</div>
					</header>
					<div class="row">
						<!-- about box start here -->
						<div class="col-xs-12 col-sm-6 col-md-6 about-box pad-bottom-sm">
							<span class="num main-color">01.</span>
							<span class="title text-uppercase">A cirurgia para hiperplasia da próstata</span>
							<span class="divider"></span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust...</p>
							<a href="#" class="more main-color text-uppercase">LER MAIS</a>
						</div>
						<!-- about box end here -->
						<!-- about box start here -->
						<div class="col-xs-12 col-sm-6 col-md-6 about-box pad-bottom-sm">
							<span class="num main-color">02.</span>
							<span class="title text-uppercase">O laser em próstata: A enucleação da próstata com holmium laser – HoLEP</span>
							<span class="divider"></span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust...</p>
							<a href="#" class="more main-color text-uppercase">LER MAIS</a>
						</div>
						<!-- about box end here -->
						
						
					</div>
				</div>
			</section>
			<!-- about section end here -->
			<!-- counter section start here -->
			<div class="counter-section text-center bg-img-full pad-top-lg pad-bottom-lg" style="background-image: url(images/img04.jpg);" data-scroll-index="2">
				<div class="container pad-top-xs">
					<div class="row">
						<div class="co-xs-12 col-sm-3 pad-bottom-xs">
							<span class="counter main-color">246</span>
							<span class="txt text-uppercase">clients</span>
						</div>
						<div class="co-xs-12 col-sm-3 pad-bottom-xs">
							<span class="counter main-color">390</span>
							<span class="txt text-uppercase">coffee</span>
						</div>
						<div class="co-xs-12 col-sm-3 pad-bottom-xs">
							<span class="counter main-color">56</span>
							<span class="txt text-uppercase">Awards</span>
						</div>
						<div class="co-xs-12 col-sm-3 pad-bottom-xs">
							<span class="counter main-color">470</span>
							<span class="txt text-uppercase">Brand</span>
						</div>
					</div>
				</div>
			</div>
			<!-- counter section end here -->
			<!-- services section starts here -->
			<section class="services-section pad-top-lg pad-bottom-sm" data-scroll-index="3">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-6 col-md-push-6 pad-bottom-sm">
							<div class="txt-box">
								<!-- main heading start here -->
								<header class="main-heading">
									<h2 class="heading text-uppercase"><span class="main-color">Lorem</span>  ipsum</h2>
									<span class="divider"></span>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been standard. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
								</header>
								
							</div>
						</div>
						<div class="col-xs-12 col-md-6 col-md-pull-7 pad-bottom-sm">
							<!-- services box start here -->
							<ul class="services-box list-unstyled text-center" >
								<li>
									<div class="over">
									<i class="fa fa-user-md"></i>
										<span class="title text-uppercase "><a href="hiperplasia.php">hiperplasia da próstata</a></span>
										<!-- <span class="divider white center"></span> -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ever since the 1500s.</p>
									</div>
								</li>
								<li>
									<div class="over">
									<i class="fa fa-user-md"></i>
										<span class="title text-uppercase"><a href="#">O laser em próstata</a></span>
										<!-- <span class="divider white center"></span> -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ever since the 1500s.</p>
									</div>
								</li>
							
							</ul>
							<!-- services box end here -->
						</div>
					</div>
				</div>
			</section>
			<!-- services section end here -->
			<!-- price section start here -->
			<section class="bg-img-full price-section pad-top-lg pad-bottom-sm" style="background-image: url(images/img02.jpg);" data-scroll-index="4">
				<div class="container">
					<!-- main heading start here -->
					<header class="main-heading row">
						<div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center">
							<h2 class="heading text-uppercase"><span class="main-color">Great</span> Pricing Table</h2>
							<span class="divider center"></span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						</div>
					</header>
					<!-- main heading end here -->
					<div class="row">

					<!-- Hiperplasia prostática benigna (HPB) -->

						<div class="col-xs-12 col-sm-6 col-md-4 pad-bottom-sm">
							<!-- price box start here -->
							<div class="price-box">
								<header class="header">
								<h3 class="text-uppercase">Hiperplasia prostática benigna (HPB)</h3>
								<p>Lorem, ipsum dolor sit amet consectetur </p>
								</header>
								<div class="box">
									
									<span class="divider"></span>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust...</p>
									<a href="hiperplasia.php" class="order text-uppercase lightbox px-4">Ler mais</a>
									<a href="#popup1" class="order text-uppercase lightbox px-4">Entrar em contato</a>
								</div>
							</div>
							<!-- price box end here -->
						</div>

						<!--  Câncer de próstata -->

						<div class="col-xs-12 col-sm-6 col-md-4 pad-bottom-sm">
							<!-- price box start here -->
							<div class="price-box">
								<header class="header">
								<h3 class="text-uppercase">Câncer de próstata</h3>
								<p>Lorem, ipsum dolor sit amet consectetur </p>
								</header>

								
								<div class="box">
									
									<span class="divider"></span>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust...</p>
									<a href="cancer-de-prostata.php" class="order text-uppercase lightbox px-4">Ler mais</a>
									<a href="#popup1" class="order text-uppercase lightbox px-4">Entrar em contato</a>
								</div>
							</div>
							<!-- price box end here -->
						</div>

						<!-- Câncer de Rim  -->

						<div class="col-xs-12 col-sm-6 col-md-4 pad-bottom-sm">
							<!-- price box start here -->
							<div class="price-box">
								<header class="header">
								<h3 class="text-uppercase"> Câncer de Rim</h3>
								<p>Lorem, ipsum dolor sit amet consectetur </p>
								</header>
								<div class="box">
									
									<span class="divider"></span>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust...</p>
									<a href="cancer-de-rim.php" class="order text-uppercase lightbox px-4">Ler mais</a>
									<a href="#popup1" class="order text-uppercase lightbox px-4">Entrar em contato</a>
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

			<section class="bg-img-full bg-img-parallax quote-section pad-top-lg pad-bottom-lg" style="background-image: url(assets/images/banner.jpg);">
				<span class="overlay"></span>
				<div class="container">
					<div class="row">
						<div class="col-cs-12 col-sm-10 col-lg-8 col-sm-push-1 col-lg-push-2 text-center">
							<span class="subtitle">Creative Unbounce Landing Page</span>
							<h2 class="main-color text-uppercase">get a free Quote today</h2>
							<span class="divider white center"></span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							<button class="btn btn-default main-bg-color text-uppercase smooth" data-scroll-nav="1">Click here</button>
						</div>
					</div>
				</div>
			</section>
			<!-- quote section end here -->
		</main>
		<!-- main content wrapping section end here -->
		<!-- footer of the page start here -->
		<?php require('inc/footer.php') ?>
		<!-- footer of the page end here -->
		<!-- Back Top of the page -->
	    <span id="back-top" class="fa fa-angle-up main-bg-color"></span>
	    <div class="popup-holder">
	    	<div id="popup1" class="lightbox">
				<!-- quote form start here -->
				<section class="quote-form" style="background-image: url(images/img02.jpg);">
					<h2 class="form-heading text-center text-uppercase">Fale conosco</h2>
					<span class="form-title text-center">Nos mande uma mensagem</span>
					<form id="contactForm" data-toggle="validator">
									<fieldset>
										<div class="form-group">
											<input type="text" id="name" placeholder="Seu nome" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group">
											<input type="email" id="email" placeholder="Seu E-mail" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group">
											<input type="tel" id="phone" placeholder="Seu Telefone" class="form-control" required data-error="NEW ERROR MESSAGE">
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
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/plugins.js" defer></script>
	<script src="assets/js/jquery.main.js" defer></script>
	
</body>
</html>