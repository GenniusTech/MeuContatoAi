@extends('layout')
    @section('conteudo')
        <!-- Content Start -->
        <main class="container-index">
            <div class="stylegradient"></div>
            <header class="headercontainer py-3 px-4">
                <div class="w-100">
                    <div class="w-100 d-flex">
                        <div class="col-lg-12 d-none align-items-center justify-content-end d-lg-flex">
                            <ul class="headerbuttons">
                                <li class="col-2 me-4"><a class="btn btn-dark btn-sm" href="/login">Entrar</a></li>
                                <li class="col-10 ps-2"><a class="btn btn-dark btn-sm" href="/registrer">Cadastre-se
                                        grátis</a></li>
                            </ul>
                        </div>
                        <!-- <div class="col-2 align-items-center d-flex justify-content-end d-lg-none">
                            <button class="styles__MenuIcon-sc-1ivt6qe-1 lfVoBR btn p-0">
                                <i class="bi bi-justify"></i>
                            </button>
                        </div> -->
                    </div>
                </div>
            </header>
            <div class="container">
                <div class="row m-0 d-flex justify-content-center mb-2">
                    <div class="col-md-6 d-flex justify-content-center pt-md-5 mt-md-5 p-5">
                        <div>
                            <h1 class="text-white text-center text-md-end mb-2">
                                <strong>
                                    <i class="bi bi-whatsapp mb-3"></i>
                                    <br>Crie grátis um link<br>personalizado de
                                    <span>WhatsApp</span>
                                </strong>
                            </h1>
                            <p class="text-center text-md-end my-3 my-md-0 mb-md-5"
                                style="max-width: 300px; margin-left: auto;">Divulgue
                                seu contato pessoal ou profissional de forma rápida e prática.</p>
                        </div>
                    </div>
                    <div class="col-md-6 p-md-5">
                        <form class="row g-3 p-3">
                            <div class="col-sm-12">
                                <label for="inputEmail4" class="form-label">Número de WhatsApp</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="+55">
                            </div>
                            <div class="col-sm-12">
                                <label for="inputAddress" class="form-label">Link personalizado</label>
                                <input type="text" class="form-control" id="inputAddress"
                                    placeholder="contate.me/sua-empresa">
                            </div>
                            <div class="col-sm-12">
                                <label for="inputAddress2" class="form-label">Mensagem inicial (opcional)</label>
                                <input type="text" class="form-control" id="inputAddress2"
                                    placeholder="Oi, estou com dúvida...">
                            </div>
                            <div class="col-sm-12 pt-4">
                                <a href="/login" type="submit" class="btn btn-primary" style="width: 100%;">Criar link de
                                    WhatasApp</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="w-100"><img src="{{ asset('contateme/img/wave.svg') }}" width="100%"></div>
        </main>
    @endsection
