<!DOCTYPE html>
<html lang="en">

<head>
	<title>DFPT - Direction de la Formation Technique </title>
	<meta charset="UTF-8">
	<meta name="description" content="Unica University Template">
	<meta name="keywords" content="event, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="{{ asset('template/img/favicon.ico') }}" rel="shortcut icon" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Crete+Round&family=Red+Rose&family=Source+Sans+Pro&display=swap" rel="stylesheet">

	<!-- debut import menu deroulant -->


	<!-- fin import menu deroulant -->

	<!-- Stylesheets -->
	<!-- <link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('template/css/themify-icons.css') }}" />
	<link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ asset('template/css/animate.css') }}" />
	<link rel="stylesheet" href="{{ asset('template/css/owl.carousel.css') }}" />
	<link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">


	<link href="https://fonts.googleapis.com/css2?family=Recursive:wght@600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Red+Rose&family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Red+Rose&family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">
	<!-- Icons -->
	<link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
	<link rel="icon" sizes="192x192" type="image/png" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
	<!-- Fonts and Styles -->
	@yield('css_before')
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
	<link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.css') }}">



	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>


</head>

<body>

	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a href="/acceuil" class="site-logo"><img src="{{ asset('template/img/Cap.PNG') }}" width="35%" alt=""></a>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-info">
				<div class="hf-item">
					<i class="fa fa-clock-o"></i>
					<p><span>Temps de travail:</span>Lundi - Vendredi: 08h-17h </p>
				</div>
				<div class="hf-item">
					<i class="fa fa-map-marker"></i>
					<p><span>Retrouvez nous:</span>Sphères ministérielles de Diamniadio, DFPT</p>
				</div>
			</div>
		</div>
	</header>
	<!-- header section end-->

	@include('inc.navbar')
	<!-- Header section end -->
	<div class="container">
		@yield('content')
	</div>


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container footer-top">
			<div class="row">
				<!-- widget -->
				<div class="col-sm-4 col-lg-4 footer-widget">
					<div class="about-widget">
						<img src="{{asset('template/img/Cap.PNG')}}" alt="">
						<p>Plateforme  de la Direction de la Formation Professionnelle et Technique</p>
						<div class="social pt-1">
							<a href="https://twitter.com/"><i class="fa fa-twitter-square"></i></a>
							<a href="https://www.faceboook.com"><i class="fa fa-facebook"></i></a>
							<a href="http://www.squaregoogle.com/"><i class="fa fa-google-plus-square"></i></a>
							<a href="https://www.linkedin.com/"><i class="fa fa-linkedin-square"></i></a>
							<a href=""><i class="fa fa-rss-square"></i></a>
						</div>
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-4 col-lg-4 footer-widget">
					<h6 class="fw-title">Liens utils</h6>
					<div class="dobule-link">
						<ul>
							<li><a href="/acceuil">Accueil</a></li>
							<li><a href="{{ route('programme') }}">Nos Programmes</a></li>
							<li><a href="/EFPT.show">EFPT</a></li>
							<li><a>Nos Projets</a></li>
							<li><a href="/documents.documents">Documentations</a></li>
							<li><a>Partenaires</a></li>
						</ul>
					</div>
				</div>

				<div class="col-sm-4 col-lg-4 footer-widget">
					<h6 class="fw-title">CONTACT</h6>
					<ul class="contact">
						<li>
							<p><i class="fa fa-map-marker"></i> Sphères ministérielles de Diamniadio, DFPT</p>
						</li>
						<li>
							<p><i class="fa fa-phone"></i> (+221)338657033</p>
						</li>
						<li>
							<p><i class="fa fa-envelope"></i> dfpt192019@gmail.com</p>
						</li>
						<li>
							<p><i class="fa fa-clock-o"></i> Lundi - Vendredi, 8H-17H</p>
						</li>
					</ul>
				</div>
			</div>

			<!-- copyright -->
			<div class="copyright">
				<div class="container">
					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved</p>
				</div>
			</div>
	</footer>
	<!-- Footer section end-->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('template/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('template/js/jquery.countdown.js') }}"></script>
	<script src="{{ asset('template/js/masonry.pkgd.min.js') }}"></script>
	<script src="{{ asset('template/js/magnific-popup.min.js') }}"></script>
	<script src="{{ asset('template/js/main.js') }}"></script>

</body>

</html>