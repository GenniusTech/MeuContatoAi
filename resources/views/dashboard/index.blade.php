@extends('dashboard.layout')
    @section('conteudo')
    <!-- Sale & Revenue End -->
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <div class="container">
                <h6 class="mb-4 content-title">MEUS APLICATIVOS</h6>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="link.html" class="app card-app p-3">
                            <i class="bi bi-whatsapp"></i>
                            <h3>
                                Link para
                                <br>
                                WhatsApp
                            </h3>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="meus-aplicativos.html" class="app card-app p-3">
                            <i class="bi bi-grid me-2"></i>
                            <h3>
                                Ver todos
                                <br>
                                aplicativos
                            </h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <div class="container px-4">
                <h6 class="mb-4 content-title">PARA VOCÊ</h6>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="p-3 card-ads position-relative">
                            <span class="text-center fw-bolder">
                                Você ganhou um bônus ✨
                            </span>
                            <p class="text-center mt-3 fw-bolder">
                                Sua empresa vende pelo WhatasApp?
                            </p>
                            <div class="row mt-2 infos">
                                <div class="col-md-6 d-none d-md-block">
                                    <img src="{{ asset('contateme/img/ebook.png') }}" alt="" class="position-absolute bottom-0">
                                </div>
                                <div class="col-md-6 d-flex flex-column px-5 ps-md-0 pe-md-3">
                                    <p class="text-center text-md-start mt-2 fw-normal">
                                        Faça como as grandes empresas! Atenda seus clientes
                                        no WhatasApp de forma profissional.
                                    </p>
                                    <div class="px-1 ps-md-0 pe-md-3 d-flex justify-content-center justify-content-md-start">
                                        <a href="#" target="_blank" class="btn btn-outline-primary mb-4">
                                            <i class="bi bi-download"></i>
                                            Baixar guia grátis
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-4 mt-md-0">
                        <div class="card-ads card-ads-two">
                            <div class="pt-3">
                                <span class="m-0 mt-3 d-flex justify-content-center text-center">
                                    <img src="{{ asset('contateme/img/logo-utalk.png') }}" alt="">
                                </span>
                                <h2 class="fs-5 m-0 mt-3 px-3 text-center">
                                    Todo seu time atendendo em um só
                                    <span>WhatasApp</span>
                                </h2>
                                <p class="text-center mt-3 px-3">
                                    Com o uTalk você coloca quantos operadores quiser atendendo simultaneamente em vários
                                    computadores usando um único número de WhatsApp.
                                </p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" target="_blank" class="px-4 btn btn-outline-primary py-1 mb-4">
                                        Conheça
                                        <i class="bi bi-box-arrow-in-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
