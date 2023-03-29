@extends('layout')
    @section('conteudo')
    <div class="col-sm-12 col-xl-12">
        <div class="login">
            <div class="container px-4 py-5">
                <div class="container">
                    <h3 class="text-white text-center h3 mt-4 px-5">Comece agora, é grátis!</h3>
                </div>

                <form class="row g-3" style="width: 100%; max-width: 500px; margin: 0px auto;">
                    <div class="col-lg-12">
                        <label for="inputEmail4" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Como podemos te chamar?" required>
                    </div>
                    <div class="col-lg-12">
                        <label for="inputPassword4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputPassword4" placeholder="Escreva o email que você mais usa" required>
                    </div>
                    <div class="col-lg-12">
                        <label for="inputPassword4" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="********" required>
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
