


 <!DOCTYPE html>
<html lang="en">
<head>
	<title>DFPT - Direction de la Formation Technique </title>
	<meta charset="UTF-8">
	<meta name="description" content="Unica University Template">
	<meta name="keywords" content="event, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="{{ asset('template/img/favicon.ico" rel="shortcut icon') }}"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">


	<!-- debut import menu deroulant -->

	
<!-- fin import menu deroulant -->

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('template/css/themify-icons.css') }}"/>
	<link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}"/>
	<link rel="stylesheet" href="{{ asset('template/css/animate.css') }}"/>
	<link rel="stylesheet" href="{{ asset('template/css/owl.carousel.css') }}"/>
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
			<a href="Accueil.html" class="site-logo"><img src="{{ asset('template/img/Cap.PNG') }}" alt=""></a>
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
    @yield('content')
</body>