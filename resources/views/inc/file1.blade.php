<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Gestion Prog &amp; </title>

        <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Icons -->
        <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
        <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

        <!--font-->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;562;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Red+Rose:wght@700&display=swap" rel="stylesheet">
        
        <!-- Fonts and Styles -->
        @yield('css_before')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.css') }}">

        
        @yield('css_after')

        <!-- Scripts -->
        <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
    </head>
    <body>
            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero Content -->
                <div class="bg-image" style="background-image: url('assets/media/photos/photo25@2x.jpg');">
                    <div class="bg-black-50">
                        <div class="content content-full overflow-hidden">
                            <div class="mt-7 mb-5 text-center">
                                <h1 class="h2 text-white mb-2" id="" data-toggle="appear" data-class="animated fadeInDown">Liste des Series et Matieres.</h1>
                                <h2 class="h4 font-w400 text-white-75 invisible" data-toggle="appear" data-class="animated fadeInDown"></h2>
                                <a class="btn btn-rounded btn-success px-4 py-2 invisible" data-toggle="appear" data-class="animated zoomIn" href="/acceuil">Retour Acceuil</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero Content -->
 
                  <div class="container">
                    @yield('content')
                  </div>

                <!-- Instructors -->
                <div class="bg-image" style="background-image: url('assets/media/photos/photo27@2x.jpg');">
                    <div class="bg-primary-dark-op py-5">
                        <div class="content content-full content-boxed text-center">
                            <h2 class="font-w400 text-white mb-2 invisible" data-toggle="appear" data-offset="50" data-class="animated fadeInDown">DIRECTION DE LA FORMATION PROFESSIONNELLE ET TECHNIQUE</h2>
                            <h3 class="h4 font-w400 text-white-75 invisible" data-toggle="appear" data-timeout="300" data-class="animated fadeInDown">L'éducation ne consiste pas seulement à aller à l'école et à obtenir un diplôme. Il s'agit d'élargir votre
connaissance et l'absorption de la vérité sur la vie. La connaissance est le pouvoir.</h3>
                            <div class="row items-push mt-5">
                                <div class="col-md-4 invisible" data-toggle="appear" data-offset="-150" data-timeout="150" data-class="animated fadeInRight">
                                    <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar2.jpg" alt="">
                                    <div class="font-size-lg text-white mt-3">Plateforme de la division</div>
                                    <div class="font-size-sm text-white-50">pédagogique</div>
                                </div>
                                <div class="col-md-4 invisible" data-toggle="appear" data-offset="-150" data-class="animated zoomIn">
                                    <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar16.jpg" alt="">
                                    <div class="font-size-lg text-white mt-3">de la Direction </div>
                                    <div class="font-size-sm text-white-50"> de la Formation</div>
                                </div>
                                <div class="col-md-4 invisible" data-toggle="appear" data-offset="-150" data-timeout="150" data-class="animated fadeInLeft">
                                    <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar3.jpg" alt="">
                                    <div class="font-size-lg text-white mt-3">Professionnelle </div>
                                    <div class="font-size-sm text-white-50">et Technique</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Instructors -->

                
                
                 <script src="{{ asset('js/oneui.app.js') }}"></script>

        

        @yield('js_after')
        </body>
</html>