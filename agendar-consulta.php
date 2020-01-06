<!DOCTYPE html>
<html lang="en">
<head>

	<?php $title = "Contato"; ?>
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
	<title>Dr. Alexandre </title>
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
			<section class="contato" >
				<span ></span>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-7">
							<h1 class="heading text-uppercase"> Informações de  <span class="main-color"> Contato  </span></h1>
                            <span class="divider white"></span>

                            <ul class="list-group list-group-flush">
                                <li class="">11 2306-2848</li>
                                <li class="">11 98934-5788</li>
                                <li class="mailto:contato@iscaife.com.br">contato@iscaife.com.br</li>
                                <li class="">R. Pamplona, 145 - Sala 1517<br>Jardim Paulista, São Paulo - SP, 01405-000</li>

                            </ul>
                            
                            
							<!-- <div class="btn-holder">
								<a href="#" class="btn btn-default main-bg-color text-uppercase" data-scroll-nav="2">Saber Mais</a>
							</div> -->
							<span class="arrow" ></span>
						</div>

						
						<div class="col-xs-12 col-sm-6 col-md-5">
							<!-- quote form start here -->
							<?php require_once("inc/agendar.php")?>
							<!-- quote form end here -->
						</div>
					</div>
				</div>
			</section>
			

		</main>
		
			<!-- Footer all pages -->
			<?php require('inc/footer.php') ?>
			


				<!-- quote form end here -->

	    	</div>
	    </div>
	</div>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/plugins.js" defer></script>
	<script src="assets/js/jquery.main.js" defer></script>
	
</body>
</html>