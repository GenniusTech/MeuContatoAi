@extends('layout')
    @section('conteudo')

    <header id="header" class="fixed-top bg-dark">
        <div class="container ">
            <h1 class="logo"><a href="{{ route('index') }}">MeuContatoAí</a></h1>
        </div>
    </header>

    <section id="planos" class="planos">
        <div class="container">
            <div class="row no-gutters pt-5">
  
                <div class="col-lg-4 box">
                    <h3>A partir de:</h3>
                    <h4>R$ 29,99<span>Mensalidade </span></h4>
                    <ul>
                        <li><i class="bi bi-check2"></i>Links Ilimitados</li>
                        <li><i class="bi bi-check2"></i>Até 20 conexões por link</li>
                        <li><i class="bi bi-check2"></i>Maturador</li>
                    </ul>
                    <a href="{{ route('login') }}" class="btn-buy">Contratar</a>
                </div>
  
                <div class="col-lg-4 box featured">
                    <h3>A partir de:</h3>
                    <h4>R$ 99,99<span>Mensalidade</span></h4>
                    <ul>
                        <li><i class="bi bi-check2"></i> Links Ilimitados</li>
                        <li><i class="bi bi-check2"></i> API para integrações</li>
                        <li><i class="bi bi-check2"></i> Conexões ilimitadas</li>
                        <li><i class="bi bi-check2"></i> Maturador</li>
                        <li><i class="bi bi-check2"></i> CRM Multi-Atendimento</li>
                    </ul>
                    <a href="{{ route('login') }}" class="btn-buy">Contratar</a>
                </div>
  
                <div class="col-lg-4 box">
                    <h3>A partir de:</h3>
                    <h4>R$ 49,99<span>Mensalidade</span></h4>
                    <ul>
                        <li><i class="bi bi-check2"></i> Links Ilimitados</li>
                        <li><i class="bi bi-check2"></i> API para integrações</li>
                        <li><i class="bi bi-check2"></i>Até 20 conexões por link</li>
                        <li><i class="bi bi-check2"></i> Maturador</li>
                    </ul>
                    <a href="{{ route('login') }}" class="btn-buy">Contratar</a>
                </div>

            </div>
        </div>
    </section>

    @endsection
