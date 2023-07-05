@extends('dashboard.layout')
    @section('conteudo')
    <section id="dashboard" class="dashboard bg-light">
        <div class="p-4 col-lg-12">
        <div class="container">
            <h6 class="mb-4 content-title">MEUS APLICATIVOS</h6>
            <div class="row">
                <div class="col-lg-4 mt-3">
                    <a href="{{ route('create') }}" class="app card-app p-3">
                        <i class="bi bi-whatsapp"></i>
                        <h3> Criar Link </h3>
                        <small>Crie links personalizados</small>
                    </a>
                </div>
                <div class="col-lg-4 mt-3">
                    <a href="{{ route('app') }}" class="app card-app p-3">
                        <i class="bi bi-grid me-2"></i>
                        <h3> Meus Links </h3>
                        <small>Organize seus links</small>
                    </a>
                </div>
                <div class="col-lg-4 mt-3">
                    <a target="_blank" href="https://meucontatoai.com/hefesto" class="app card-app p-3">
                        <i class="bi bi-grid me-2"></i>
                        <h3> Crm Multi-Atendimento </h3>
                        <small>MultiAtendimento para WhatsApp</small>
                    </a>
                </div>
                <div class="col-lg-4 mt-3">
                    <a href="#" class="app card-app p-3">
                        <i class="bi bi-grid me-2"></i>
                        <h3> Comprar Chips </h3>
                        <small>Em breve</small>
                    </a>
                </div>
                <div class="col-lg-4 mt-3">
                    <a href="#" class="app card-app p-3">
                        <i class="bi bi-grid me-2"></i>
                        <h3> Maturação de Chips </h3>
                        <small>Em breve</small>
                    </a>
                </div>
                <div class="col-lg-4 mt-3">
                    <a href="#" class="app card-app p-3">
                        <i class="bi bi-credit-card me-2"></i>
                        <h3> Faturas </h3>
                        <small>Em breve</small>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>
    @endsection
