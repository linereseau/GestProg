<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>DFPT - Direction de la Formation Technique</title>

    <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
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
                            
                            <h1 class="display-4 font-w600 mb-3 text-white invisible" data-toggle="appear" data-class="animated fadeInDown">
                                Bienvenue <span class="font-w300"></span>
                            </h1>
                            <h2 class="h3 font-w400 text-white-50 mb-5 invisible" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
                                Ministére de l’Emploi, de la Formation professionnelle de l'apprentissage et de l'insertion
                            </h2>
                            <span class="m-2 d-inline-block invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="600">
                                <a class="btn btn-success px-4 py-2" data-toggle="click-ripple" href="/acceuil">
                                    <i class="fa fa-fw fa-home mr-1"></i> Accueil
                                </a>
                            </span>
                            <span class="m-2 d-inline-block invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="600">
                                <a class="btn btn-primary px-4 py-2" data-toggle="click-ripple" href="admin/home">
                                    <i class="fa fa-fw fa-user mr-1"></i> Espace Admin
                                </a>
                            </span>
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





            <!-- Footer -->
            <footer id="page-footer" class="bg-light">
                <div class="content py-5">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                           
                        </div>
                        <div class="col-sm-12 order-sm-1 py-1 text-center text-sm-left">
        <a class="font-w600" href="" target="_blank">Copyright &copy; 2020-2021</a> <span>Ministére de l’Emploi, de la Formation professionnelle de l'apprentissage et de l'insertion</span> 
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
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