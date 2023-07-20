@extends('layout')
    @section('conteudo')

    <div class="d-lg-flex login">
        <div class="bg order-1 order-md-2" style="background-image: url('{{ asset('frontend/img/login.png') }}');"></div>
            <div class="contents order-2 order-md-1">

                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6">
                            <h3><strong>Seja bem-vindo</strong></h3>
                            <p class="mb-4">Faça seu login</p>
                            @if(session('error'))
                            <div class="alert alert-error" style="color: red; margin:0;">
                                <small>{{ session('error') }}</small> 
                             </div>
                           @endif
                            <form id="formLogin" class="row g-3" method="POST" action="{{ route('login_action') }}">
                                <input type="hidden" value={{  csrf_token() }} name="_token">
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="contato@meucontatoai.com">
                                </div>
                                <div class="col-12">
                                    <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
                                </div>
                                <span><a class="link-opacity-100 ml-4 text-sm text-primary inline-flex" href="#">Esqueceu sua senha?</a></span>
                                <div class="col-lg-12 d-grid gap-2 col-md-6 mx-auto">
                                    <button class="btn btn-secondary" type="submit"> Acessar </button>
                                </div>
                                <p>
                                    Não tem uma conta?
                                    <a class="link-opacity-100 ml-4 text-sm text-primary inline-flex text-center" href="{{ route('register') }}">Inscrever-se</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @endsection
