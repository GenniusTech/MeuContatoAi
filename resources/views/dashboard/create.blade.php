@extends('dashboard.layout')
    @section('conteudo')
    <section id="novo-link" class="novo-link bg-light link-whats mt-5">
        <div class="col-lg-12" style="height: 100vh;">
            <div class="container">
                <div class="row">
                    <div class="pt-3 d-flex justify-content-center justify-content-md-start">
                        <i class="bi bi-whatsapp me-2 fa-2x"></i>
                        <h3 class="my-2 text-center text-md-start">
                            Novo link para WhatsApp
                        </h3>
                    </div>
                    <div class="box-content col-sm-6">
                        <form class="row g-3 p-3">
                            <div class="col-sm-12">
                                <label for="inputAddress" class="form-label">Link personalizado</label>
                                <input type="text" class="form-control" id="inputAddress"
                                    placeholder="meucontatoai/sua-empresa">
                            </div>
                            <div class="col-sm-12">
                                <label for="inputAddress2" class="form-label">Mensagem inicial (opcional)</label>
                                <input type="text" class="form-control" id="inputAddress2"
                                    placeholder="Oi, estou com dúvida...">
                            </div>
                            <div class="col-sm-12 pt-4">
                                <a href="link-para-whatsapp.html" type="submit" class="btn btn-primary">Criar link
                                    de WhatasApp</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
