<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>DFPT - Direction de la Formation Technique </title>

    <meta name="description" content="">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="DFPT - Direction de la Formation Technique">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="DFPT - Direction de la Formation Technique">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.css') }}">


</head>

<body>
    <div id="page-container" class="main-content-boxed">

        <!-- Main Container -->
        <main id="main-container">
            <!-- Hero -->
            <div class="bg-image" style="background-image: url('{{ asset('template/img/FOND.jpg') }}');">
                <div class="hero bg-black-75 overflow-hidden">
                    <div class="hero-inner">
                        <div class="content content-full text-center">
                            <div class="mb-5 invisible" data-toggle="appear" data-class="animated fadeInDown">
                                <i class="fa fa-circle-notch fa-3x text-primary"></i>
                            </div>
                            @if(auth()->user()->is_admin == 1)
                            <h1 class="display-4 font-w600 mb-3 text-white invisible" data-toggle="appear" data-class="animated fadeInDown">
                                ESPACE <span class="font-w300">ADMINISTRATEUR</span>
                            </h1>
                            <span class="m-2 d-inline-block invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="600">
                                <a class="btn btn-success px-4 py-2" data-toggle="click-ripple" href="/acceuil">
                                    <i class="fa fa-fw fa-home mr-1"></i> Accueil
                                </a>
                            </span>
                            <span class="m-2 d-inline-block invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="600">
                                <a class="btn btn-primary px-4 py-2" data-toggle="click-ripple" href="/admin/home">
                                    <i class="fa fa-fw fa-user mr-1"></i>Voir Dashboard
                                </a>
                            </span>
                            @endif
                            @if(auth()->user()->is_admin == 0)
                            <div class="content content-full text-center">

                                <h1 class="display-4 font-w600 mb-3 text-white invisible" data-toggle="appear" data-class="animated fadeInDown">
                                    Espace <span class="font-w300">chef d'établissement</span>
                                </h1>
                                <span class="m-2 d-inline-block invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="600">
                                    <a class="btn btn-success px-4 py-2" data-toggle="click-ripple" href="/GestionProgramme%20(8)/GestionProgramme/public/acceuil">
                                        <i class="fa fa-fw fa-home mr-1"></i> Accueil
                                    </a>
                                </span>
                                <span class="m-2 d-inline-block invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="600">
                                    <a class="btn btn-primary px-4 py-2" data-toggle="click-ripple" href="/user/home">
                                        <i class="fa fa-fw fa-user mr-1"></i>Voir Dashboard
                                    </a>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="hero-meta">
                            <div class="animated slideInDown infinite">
                                <i class="fa fa-angle-down text-white-50 fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->


    <script src="{{ asset('assets/js/oneui.core.min.js') }}"></script>


    <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
    <script src="{{ asset('assets/js/oneui.app.min.js') }}"></script>
</body>

</html>