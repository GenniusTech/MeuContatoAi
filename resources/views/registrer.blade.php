@extends('layout')
    @section('conteudo')
    <div class="col-sm-12 col-xl-12">
        <div class="login">
            <div class="container px-4 py-5">
                <div class="container">
                    <h3 class="text-white text-center h3 mt-4 px-5">Comece agora, é grátis!</h3>
                </div>
                @if ($errors->any())
                <div style="background-color: rgb(136, 16, 20); color:white; text-align: center; border-radius:5px;">
                    <ul class="alert alert-error">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="row g-3" style="width: 100%; max-width: 500px; margin: 0px auto;" method="POST" action="{{ route('register_action') }}">
                    <input type="hidden" value={{  csrf_token() }} name="_token">>

                    <div class="col-lg-12">
                        <label for="inputEmail4" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="Como podemos te chamar?" required>
                    </div>
                    <div class="col-lg-12">
                        <label for="inputPassword4" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="inputPassword4" placeholder="Escreva o email que você mais usa" required>
                    </div>
                    <div class="col-lg-12">
                        <label for="inputPassword4" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="********" required>
                    </div>
                    <div class="col-lg-12 text-center pt-2">
                        <button type="submit" class="btn btn-primary">Finalizar</button>
                    </div>
                    <p class="text-center mt-4" style="color: #fff;">TechGennius</p>
                </form>
            </div>
        </div>
    </div>
    @endsection
