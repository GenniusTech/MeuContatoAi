@extends('dashboard.layout')
    @section('conteudo')
    <div class="col-sm-12 col-xl-12" style="height: 100vh;">
        <div class="bg-light rounded h-100 p-4">
            <div class="container link-whats">
                <div class="row">
                    <div class="d-flex justify-content-center justify-content-md-start">
                        <i class="bi bi-whatsapp me-2 fa-2x"></i>
                        <h3 class="my-2 text-center text-md-start">
                            Novo link para WhatsApp
                        </h3>
                    </div>
                    <div class="container-form col-sm-6">
                        <form class="row g-3 p-3"action="{{ route('createLink') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="col-sm-12">
                                <label for="inputEmail4" class="form-label" >Número de WhatsApp</label>
                                <input type="number"
                                class="form-control"
                                id="inputEmail4"
                                placeholder="+55"
                                name="numero"
                                required
                                >
                            </div>
                            <div class="col-sm-12">
                                <label for="inputAddress" class="form-label">Link personalizado</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputAddress"
                                    placeholder="contate.me/sua-empresa"
                                    name="rota"
                                    required
                                >
                            </div>
                            <div class="col-sm-12">
                                <label for="inputAddress2" class="form-label">Mensagem inicial (opcional)</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputAddress2"
                                    placeholder="Oi, estou com dúvida..."
                                    name="mensagem"
                                    required
                                >
                            </div>
                            <div class="col-sm-12 pt-4">
                                <button href="link-para-whatsapp.html" type="submit" class="btn btn-primary">Criar link de WhatasApp</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
