@extends('dashboard.layout')
    @section('conteudo')
    <div class="col-sm-12 col-xl-12" style="height: 100vh;">
        <div class="bg-light rounded h-100 p-4">
            <div class="container link-whats">
                <div class="row">
                    <div class="container-form col-sm-6">
                        <form class="row g-3 p-3">
                            <div class="col-sm-12">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email"
                                class="form-control"
                                id="inputEmail4">
                            </div>
                            <div class="col-sm-12">
                                <label for="inputName" class="form-label">Nome</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputName"
                                >
                            </div>
                            <div class="col-sm-12">
                                <label for="inputNumber" class="form-label">Telefone</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="inputNumber"
                                    placeholder="(DDD) 00000-0000"
                                >
                            </div>
                            <div class="col-sm-12 pt-4 text-center">
                                <a type="submit" class="btn btn-primary">Atualizar dados</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
