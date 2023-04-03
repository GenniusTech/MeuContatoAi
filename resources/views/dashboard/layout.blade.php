<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Criador de Links</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="{{ asset('contateme/img/favicon.ico') }}" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('contateme/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('contateme/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('contateme/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('contateme/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container-sidebar">
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar">
                <div class="navbar-nav w-100 pt-5">
                    <a href="{{ route('dashboard') }}" class="nav-item nav-link active">
                        <i class="bi bi-house me-2"></i>
                    </i>
                </a>
                <a href="{{ route('app') }}" class="nav-item nav-link">
                    <i class="bi bi-grid me-2"></i>
                </a>
                <a href="#modal-perfil" class="nav-item nav-link">
                    <i class="bi bi-person-circle me-2"></i>
                </a>
            </div>
        </nav>
    </div>

    <div class="content">

        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
            <a href="{{ route('dashboard') }}" class="sidebar-toggler flex-shrink-0">
                <i class="bi bi-list"></i>
            </a>
            <div class="d-none d-md-flex ms-4 pt-2">
                <h4 id="title">Dashboard</h4>
            </div>
        </nav>

        <section>
            @yield('conteudo')
        </section>

        <div class="bg-light rounded-top p-4">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    &copy; <a href="https://techgennius.com.br/">Tech Gennius</a>, todos os direitos reservados.
                </div>
            </div>
        </div>

    </div>

    <div id="modal-perfil" class="modal-perfil pt-5">
        <div class="modal-content-perfil">
            <h2 class="fw-bold pt-5">{{ auth()->user()->name }}</h2>
            <p class="mt-3 mb-0 text-muted">{{ auth()->user()->email }}</p>
            <hr>
            <ul class="pt-3 list-unstyled">
                <li class="mt-2">
                    <a href="{{ route('config') }}" class="text-decoration-none d-flex align-items-center">
                        <i class="bi bi-gear pe-1"></i>
                        Configurações
                    </a>
                </li>
                <li class="mt-2">
                    <a href="{{ route('logout') }}" class="text-decoration-none d-flex align-items-center">
                        <i class="bi bi-box-arrow-right pe-1"></i>
                        Sair
                    </a>
                </li>
            </ul>
            <a href="#" class="modal__close">&times;</a>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('contateme/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('contateme/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('contateme/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('contateme/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('contateme/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('contateme/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('contateme/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('contateme/js/main.js') }}"></script>
    <script src="{{ asset('contateme/js/tabs.js') }}"></script>
</body>

</html>
