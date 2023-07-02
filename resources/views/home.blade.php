<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Meu Contato Ai</title>
        <link rel="icon" href="{{ asset('frontend/img/icon.png') }}" type="image/x-icon">

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

        <header id="header" class="fixed-top bg-dark">
            <div class="container">
                <nav id="navbar" class="navbar align-items-center justify-content-end d-lg-flex">
                    <ul>
                        <li><a class="nav-link scrollto active text-success" href="{{ route('login') }}">Entrar</a></li>
                        <li><a class="nav-link scrollto text-success" href="{{ route('register') }}">Registre-se</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
        </header>

        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 class="mb-2"> <strong> <i class="bi bi-whatsapp mb-3"></i> Crie links <br>personalizados para <span>WhatsApp</span> </strong> </h1>
                        <h2 class="my-3 my-md-0 mb-md-4">Com apenas um link <br> você pode ter até 20 números conexôes.</h2>
                        <div>
                            <a class="btn btn-get-started" href="#services" role="button">Como funciona?</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img">
                        <img src="{{ asset('frontend/img/world-amico.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <main id="main">

            <section id="counts" class="counts section-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="count-box">
                                <span data-purecounter-start="0" data-purecounter-end="20000" data-purecounter-duration="1" class="purecounter"></span> <p>Redirecionamentos por dia</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                            <div class="count-box">
                                <span data-purecounter-start="0" data-purecounter-end="4000" data-purecounter-duration="1" class="purecounter"></span> <p>Clientes</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
                            <div class="count-box">
                                <h3><strong>Nós processamos 20.000 redirecionamentos por dia para 4.000 clientes satisfeitos.</strong> Nosso objetivo é oferecer um serviço confiável para que as empresas se concentrem em suas prioridades. </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="services" class="services">
                <div class="container">
                    <div class="row">
                        <div class="content col-lg-6 d-flex flex-column justify-content-center">
                            <img src="{{ asset('frontend/img/growth.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <h4><strong>Um upgrade para suas estrátegias!</strong></h4>
                                <p>
                                    O Meu Contato Aí é uma ferramenta que simplifica a criação de links para o WhatsApp com mensagens pré-definidas. Com essa ferramenta, você pode criar links que direcionam até 20 conexões diretas. Sim, isso significa que você pode redirecionar até 20 números diferentes usando um único link!
                                    <br><br>
                                    Ao utilizar o Meu Contato Aí, você pode se concentrar na sua estratégia, enquanto nossa ferramenta reduz até 90% da perda de chips. Isso significa que você pode aumentar suas vendas de forma eficiente e alcançar um maior número de clientes potenciais usando o WhatsApp.
                                    <br><br>
                                    Experimente o Meu Contato Aí e veja como essa ferramenta pode impulsionar suas vendas e simplificar o processo de comunicação com seus clientes. Aproveite os benefícios de ter um único link para várias conexões diretas e otimize sua estratégia de vendas com facilidade!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="features" class="features section-bg mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-4">
                            <div class="features-box">
                                <img src="img/bro.svg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-4">
                            <div class="features-box text-center">
                                <h3>Muito fácil de começar</h3>
                                <p>Por um valor que cabe no seu bolso. Duas coisas que todo mundo ama.</p>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-get-started" href="{{ route('login') }}" role="button">Comece aqui</a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="features-box">
                                <img src="img/texting.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <footer id="footer">
            <div class="container py-4">
                <div class="me-md-auto text-center">
                    <div class="copyright">
                        &copy; Copyright 2023 <span> Meu Contato Aí</span>. Todos os direitos reservados.
                    </div>
                </div>
            </div>
        </footer>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up-short"></i>
        </a>

        <script src="{{ asset('frontend/vendor/purecounter/purecounter.js') }}"></script>
        <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script>

        <script src="{{ asset('frontend/js/main.js') }}"></script>
        <script src="{{ asset('frontend/js/tabs.js') }}"></script>

    </body>

</html>
