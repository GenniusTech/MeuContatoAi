@extends('dashboard.layout')
    @section('conteudo')
    <section id="link-whats" class="link-whats">
        <div class="col-lg-12" style="height: 100vh;">
            <div class="bg-light rounded h-100 p-4">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="box-content col-sm-7 pb-4">
                            <div class="d-flex justify-content-center justify-content-md-start px-4 pb-3">
                                <h4 class="d-none d-md-flex align-items-center m-0 me-2 pt-4">
                                    <i class="bi bi-whatsapp me-2 fa-2x"></i>
                                </h4>
                                <div>
                                    <h4 class="h5 text-center text-md-start mb-2 pt-1 mb-md-0 pt-4">
                                        <strong> +55 84 00000 0000</strong>
                                    </h4>
                                    <span class="text-center text-muted mb-4 text-md-start">meucontatoai/suaempresa</span>
                                </div>
                                <div class="ms-auto d-none d-md-block pt-4">
                                    <button class="btn btn-danger rounded-circle btn-sm ms-2">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </div>
                                <hr>
                            </div>
                            <hr>
                            <div class="container link-criado">
                                <div class="row">
                                    <ul class="d-flex justify-content-center justify-content-md-start px-4">
                                        <li class="nav-item active" id="link">
                                            <button>Link</button>
                                            <span></span>
                                        </li>
                                        <li class="nav-item" id="qrcode">
                                            <button>QR code</button>
                                            <span></span>
                                        </li>
                                        <li class="nav-item" id="dados">
                                            <button>Chips</button>
                                            <span></span>
                                        </li>
                                    </ul>
                                </div>
                                <div id="linktab" class="tab-content" style="display: flex;">
                                    <div class="container">
                                        <p>Seu link está pronto para ser usados.</p>
                                        <h4 class="h5 text-center text-md-start mb-4 pt-1">
                                            <a href="#" class="text-decoration-none">
                                                <i class="bi bi-link-45deg"></i>
                                                meucontatoai/exemplo
                                            </a>
                                        </h4>
                                        <div
                                            class="d-flex flex-column mt-1 flex-md-row justify-content-center justify-content-md-start">
                                            <button class="btn btn-primary px-4">
                                                <i class="bi bi-subtract"></i>
                                                Copiar link
                                            </button>
                                            <button class="btn btn-outline-primary mt-3 mt-md-0 ms-md-3 px-4">
                                                <i class="bi bi-share-fill"></i>
                                                Compartilhar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div id="qrcodetab" class="tab-content">
                                    <div class="container">
                                        <p>Seu QR code está pronto para ser usado.</p>
                                        <h4 class="h5 text-center text-md-start pb-3 py-2">
                                            <img src="assets/img/qr-code.png" alt="" style="height: 130px; width: 130px;">
                                        </h4>
                                        <div class="d-flex flex-column mt-1 flex-md-row justify-content-center justify-content-md-start">
                                            <button class="btn btn-primary px-4">
                                                <i class="bi bi-subtract"></i>
                                                Copiar QR Code
                                            </button>
                                            <button class="btn btn-outline-primary mt-3 mt-md-0 ms-md-3 px-4">
                                                <i class="bi bi-download"></i>
                                                Baixar QR Code
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div id="dadostab" class="tab-content">
                                    <div class="container">
                                        <form id="formConnection" class="row" action="{{ route('editarLink', ['id' => $link->id]) }}" method="GET">
                                            @csrf
                                            <div class="col-sm-12 col-md-6">
                                                <label for="numero_whatsapp" class="form-label">Número de WhatsApp</label>
                                                <input type="number" class="form-control" id="numero_whatsapp" name="numero_whatsapp" placeholder="+55">
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <label for="mensagem_inicial" class="form-label">Mensagem inicial</label>
                                                <input type="text" class="form-control" id="mensagem_inicial" name="mensagem_inicial" placeholder="Olá...">
                                            </div>
                                            <div class="d-flex flex-column mt-3 flex-md-row justify-content-center justify-content-md-start">
                                                <button class="btn btn-primary px-4" type="submit">Atualizar</button>
                                                <button class="btn btn-outline-primary mt-3 mt-md-0 ms-md-3 px-4" type="button">Atualizar Tabela</button>
                                            </div>
                                        </form>

                                        <div class="mt-3">
                                            <table class="table mt-2">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Chip</th>
                                                        <th scope="col">Leads</th>
                                                        <th scope="col">Opções</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">84998952050</th>
                                                        <td>10</td>
                                                        <td>
                                                            <button class="btn btn-secondary btn-sm rounded-circle me-2">
                                                                <i class="bi bi-eye"></i>
                                                            </button>
                                                            <button class="btn btn-danger btn-sm rounded-circle me-2">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
