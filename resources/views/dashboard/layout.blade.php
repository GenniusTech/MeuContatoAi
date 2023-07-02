<html lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Meu Contato Ai</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    </head>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top bg-dark">
            <div class="container">
                <nav id="navbar" class="navbar d-lg-flex">
                    <ul class="align-items-center justify-content-start">
                        <li><a class="nav-link scrollto active text-success" href="{{ route('dashboard') }}">Início</a></li>
                        <li><a class="nav-link scrollto text-success" href="{{ route('app') }}">Suporte</a></li>
                    </ul>
                    <ul class="align-items-center justify-content-center">
                        <li><h1 class="logo"><a href="{{ route('dashboard') }}">Meu Contato Aí</a></h1></li>
                    </ul>
                    <ul class="align-items-center justify-content-end">
                        <li><a class="nav-link scrollto text-success" href="{{ route('logout') }}">Sair</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>


            </div>
        </header>
        <!-- End Header -->

        @yield('conteudo')


        <main id="main">

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container py-4">
                <div class="me-md-auto text-center">
                    <div class="copyright">
                        &copy; Copyright 2023 <span> Meu Contato Aí</span>. Todos os direitos reservados.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up-short"></i>
        </a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('frontend/vendor/purecounter/purecounter.js') }}"></script>
        <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('frontend/js/main.js') }}"></script>
        <script src="{{ asset('frontend/js/tabs.js') }}"></script>

    </body>

</html>
