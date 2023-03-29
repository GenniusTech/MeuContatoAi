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

    <section>
        @yield('conteudo')
    </section>

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
