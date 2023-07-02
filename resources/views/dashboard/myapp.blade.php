@extends('dashboard.layout')
    @section('conteudo')
    <section id="link-whats" class="link-whats bg-light mt-5">
        <div class="col-lg-12" style="height: 100vh;">
            <div class="p-4">
                <div class="container">
                    <div class="row">
                        <div class="d-flex justify-content-center justify-content-md-start">
                            <i class="bi bi-whatsapp me-2 fa-2x"></i>
                            <h3 class="my-2 text-center text-md-start"> Meus Links </h3>
                        </div>
                        <div class="d-flex flex-column flex-md-row">
                            <a href="{{ route('create') }}" class="btn btn-primary px-4 mt-3 mb-4">Criar novo link</a>
                        </div>
                    </div>

                    <div class="box-content pt-4 px-3 pb-2 mt-2 rounded" style="overflow-x: auto;">
                        <h4 class="text-muted h6 mt-3">MEUS LINKS</h4>
                        <table class="table mt-2">
                            <tbody>
                                <tr>
                                    <td class="w-100">
                                        <a rel="noreferrer" href="#"
                                            style="text-decoration: none; color: #808080;">meucontatoai/<strong>5555555</strong></a>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-secondary btn-sm rounded-circle me-2">
                                                <i class="bi bi-subtract"></i>
                                            </button>
                                            <a class="btn btn-secondary btn-sm rounded-circle me-2" href="#">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a class="btn btn-secondary btn-sm rounded-circle me-2" href="{{ route('editLink') }}">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
