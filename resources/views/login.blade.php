@extends('layout')
    @section('conteudo')
    <div class="col-sm-12 col-xl-12">
        <div class="login">
            <div class="container px-4 py-5">
                <div class="container">
                    <h3 class="text-white text-center h3 mt-4 px-5">Que bom ver você por aqui... 😊</h3>
                </div>

                <form class="row g-3" style="width: 100%; max-width: 500px; margin: 0px auto;" method="POST" action="{{ route('login_action') }}">
                    <input type="hidden" value={{  csrf_token() }} name="_token">
                    <div class="col-lg-12">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="nome@email.com" required>
                    </div>
                    <div class="col-lg-12">
                        <label for="inputPassword4" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="senha" id="inputPassword4" placeholder="*******" required>
                    </div>
                    <!--<div class="pt-3 d-flex justify-content-end">
                        <a class="text-decoration-none" href="#" style="color:#fff;">Esqueceu a senha?</a>
                    </div>-->
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                        <a href="/registrer" class="btn btn-primary mt-3">Cadastre-se</a>
                    </div>
                    <p class="text-center mt-4" style="color: #fff;">TechGennius V 0.0.1</p>
                </form>
            </div>
        </div>
    </div>
    @endsection
