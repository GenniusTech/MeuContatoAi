@extends('layout')
    @section('conteudo')

    <div class="d-lg-flex login">
    <div class="bg order-1 order-md-2" style="background-image: url('frontend/img/login.png')"></div>
            <div class="contents order-2 order-md-1">

                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6">
                            <h3><strong>Faça parte!</strong></h3>
                            <p class="mb-4">Cadastre-se e tenha acesso a várias ferramentas para seus contatos.</p>
                            @if ($errors->any())
                                <div style="background-color: rgb(136, 16, 20); color:white; text-align: center; border-radius:5px;">
                                    <ul class="alert alert-error">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="row g-3" method="POST" action="{{ route('register_action') }}">
                                <input type="hidden" value={{  csrf_token() }} name="_token">
                                <div class="col-12">
                                    <input type="text" name="name" class="form-control" id="nome" placeholder="Como podemos ter chamar?">
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Qual seu melhor E-mail?">
                                </div>
                                <div class="col-12">
                                    <input type="password" name="password" class="form-control" id="senha" placeholder="Escolha uma senha!">
                                </div>
                                <div class="col-lg-12 d-grid gap-2 col-md-6 mx-auto">
                                    <p class="text-success">Nosso produto custará R$ 29,90/mês para os primeiros 100 usuários. <br> Aproveite!</p>
                                </div>
                                <div class="col-lg-12 d-grid gap-2 col-md-6 mx-auto">
                                    <button class="btn btn-secondary" type="submit"> Cadastrar-me </button>
                                </div>
                                <p>
                                    Já tem uma conta?
                                    <a class="link-opacity-100 ml-4 text-sm text-primary inline-flex text-center" href="{{ route('login') }}">Faça login</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @endsection
