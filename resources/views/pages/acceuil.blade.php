<!DOCTYPE html>
<html lang="fr">

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


	<!-- debut import menu deroulant -->


	<!-- fin import menu deroulant -->

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('template/css/themify-icons.css') }}" />
	<link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ asset('template/css/animate.css') }}" />
	<link rel="stylesheet" href="{{ asset('template/css/owl.carousel.css') }}" />
	<link rel="stylesheet" href="{{ asset('template/css/style.css') }}">




</head>

<body>

	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a href="/" class="site-logo"><img src="{{ asset('template/img/Cap.jpg') }}" width="35%" alt=""></a>
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


	<!-- Hero section -->
	<section class="hero-section">
		<marquee behavior="alternate" style="font-family: 'Crete Round', serif;">
			<H4 class="" style="color:rgb(246, 120, 58)">La plateforme est en construction:nous avons {{count($programme)}} programmes {{count($filiere)}}  filiéres </marquee>
		<div class="hero-slider owl-carousel">

			<div class="hs-item set-bg" data-setbg="{{ asset('template/img/hero-slider/Capture1.png') }}">
				<div class="hs-text">

					<div class="container">
						<div class="row">

							<div class="col-lg-8">

								<div class="hs-subtitle" style="font-family: 'Crete Round', serif;">
									<H4 class="" style="color:rgb(246, 120, 58)">Direction de la Formation Professionnelle et Technique</H4>

								</div>
								<h2 class="hs-title">Un investissement sur les competences produit les meilleurs resultats.</h2>
								<p class="hs-des">L'éducation ne consiste pas seulement à aller à l'école et à obtenir un diplôme. Il s'agit d'élargir votre<br> connaissance et l'absorption de la vérité sur la vie. La connaissance est le pouvoir.</p>
								<div class="btn text-white" style="background-color:rgb(246, 120, 58);"><a href="#about">MEFPI?</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="{{ asset('template/img/FOND.jpg') }}">
				<div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="hs-subtitle" style="font-family: 'Crete Round', serif;color:rgb(246, 120, 58);">
									<H4 class="" style="color:rgb(246, 120, 58)">Direction de la Formation Professionnelle et Technique</H4>
								</div>
								<h2 class="hs-title">Un investissement sur les competences produit les meilleurs resultats.</h2>
								<p class="hs-des">L'éducation ne consiste pas seulement à aller à l'école et à obtenir un diplôme. Il s'agit d'élargir votre<br> connaissance et l'absorption de la vérité sur la vie. La connaissance est le pouvoir.</p>
								<div class="btn text-white" style="background-color:rgb(246, 120, 58);"><a href="#about">MEFPI?</a></div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mt-5 mb-3 text-center">
			<h3 style="font-family: 'Source Sans Pro', sans-serif;" id="about"> MFPA</h3>
			<hr class="mt-3 P" style="width: 10%; height:7px; background-color:rgb(246, 120, 58);">
		</div>

		<!-- about section  -->
		<section class="testimonial-section spad mb-5 container">
			<div class="container mb-5  mt-10">
				<div class="testimonial-slider owl-carousel">
					<div class="ts-item">
						<div class="row">
							<div class="col-md-3">
								<div class="ts-author-pic set-bg" data-setbg="img/member/5.jpg"></div>
							</div>
							<div class="col-md-9 ts-text" style="font-family: 'Times New Romans', sans-serif;">
								<h5>Du 31 Mars au 02 Avril 2001, se tenaient au CICES, sous la présidence effective du Chef de l’Etat, Son Excellence Maître Abdoulaye WADE, les premières assises sur l’Enseignement Technique et la Formation Professionnelle(ETFP). Plus de 400 participants représentant l’administration, les organismes internationaux de développement, les organisations patronales, le secteur privé, les syndicats, les ONGs et associations, se sont réunis pour jeter les bases d’une nouvelle politique en matière d’ETFP fondée sur une vision partagée. Ces Assises ont formulé des recommandations qui ont servi de base pour l’élaboration de ce présent Document de Politique.
									Ainsi le Ministre de l’Enseignement Technique, de la Formation Professionnelle, de l’Alphabétisation et des Langues Nationales ambitionne de traduire la volonté et la vision du Président de la République en un programme d’une envergure sans précédent. Ce programme aura comme principales caractéristiques un mode de pilotage impliquant tous les acteurs et une orientation fondée sur la synergie entre la système de l’Enseignement Technique et Formation Professionnelle, d’une part et le marché du travail et de l’économie, d’autre part. </h5>
							</div>
						</div>
					</div>
					<div class="ts-item">
						<div class="row">
							<div class="col-md-3">
								<div class="ts-author-pic set-bg" data-setbg="img/member/5.jpg"></div>
							</div>
							<div class="col-md-9 ts-text" style="font-family: 'Times New Roman', sans-serif;">
								<h5> Par ailleurs, l’analyse institutionnelle de l’ETFP au Sénégal, publiée en Juin 2001 par le Consortium International de Développement de l’Education ( CIDE ) Canada, les résultats obtenus par le Projet Formation Professionnelle pour l’Emploi ( PFPE ), le document de l’Association des formateurs intitulé « Nouvelle Vision de l’Enseignement Technique et la Formation Professionnelle », pour ne citer que ces références, ont été d’une contribution remarquable à la définition des nouvelles orientations. La nouvelle politique d’ETFP, objet du présent document traduit la volonté du Chef de l’Etat de valoriser les ressources humaines et de faire de l’E.T.F.P. un instrument permettant d’assurer la compétitivité de notre production et la performance de notre économie dans le contexte de la mondialisation. Cette volonté politique se concrétisa dès le 14 Mai 2001, par l’érection d’un département ministériel de plein exercice chargé de l’Enseignement Technique et la Formation Professionnelle. Ainsi le Ministre de l’Enseignement Technique, de la Formation Professionnelle, de l’Alphabétisation et des Langues Nationales ambitionne de traduire la volonté et la vision du Président de la République en un programme d’une envergure sans précédent. Ce programme aura comme principales caractéristiques un mode de pilotage impliquant tous les acteurs et une orientation fondée sur la synergie entre la système de l’Enseignement Technique et Formation Professionnelle, d’une part et le marché du travail et de l’économie, d’autre part. </h5>
							</div>
						</div>
					</div>
					<div class="ts-item">
						<div class="row">
							<div class="col-md-3">
								<div class="ts-author-pic set-bg" data-setbg="img/member/5.jpg"></div>
							</div>
							<div class="col-md-9 ts-text" style="font-family: 'Times New Roman', sans-serif;">
								<h5> Ces options fondamentales sont donc le fruit d’un long processus jalonné par des phases nécessaires, consacrant la recherche du consensus, de l’efficacité et de l’efficience, à savoir : la définition d’une vision, la réalisation d’études sur la situation de l’ETFP,  la définition de nouvelles orientations et de la stratégie de mise en œuvre. S’il peut être légitime de se féliciter que le secteur soit pour la première fois doté d’une politique de développement postulant des ruptures quantitatives et qualitatives, il n’en demeure pas moins que nous ne sommes pas encore au bout de nos efforts. Dans le respect de la dynamique partenariale qui nous a valu la réussite de cette première étape, il nous faut résolument aller vers l’élaboration d’une lettre de politique sectorielle qui débouchera sur les véritables indications programmatiques que nous appelons de tous nos vœux pour le plus grand bonheur du Sénégal.</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- about section end -->

	</section>
	<!-- Hero section end -->

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container footer-top">
			<div class="row">
				<!-- widget -->
				<div class="col-sm-4 col-lg-4 footer-widget">
					<div class="about-widget">
						<img src="{{ asset('template/img/Cap.jpg') }}" alt="">
						<p>Plateforme de la division pédagogique de la Direction de la Formation Professionnelle et Technique</p>
						<div class="social pt-1">
							<a href="https://twitter.com/"><i class="fa fa-twitter-square"></i></a>
							<a href="https://www.faceboook.com"><i class="fa fa-facebook-square"></i></a>
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
							<li><a href="/documents.documents">Documentationss</a></li>
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
							<p><i class="fa fa-phone"></i> 338657033</p>
						</li>
						<li>
							<p><i class="fa fa-envelope"></i> dftp@gmail.com</p>
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