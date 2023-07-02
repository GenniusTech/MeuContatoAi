@extends('dashboard.layout')
    @section('conteudo')
    <section id="link-whats" class="link-whats">
        <div class="col-lg-12" style="height: 100vh;">
            <div class="bg-light rounded h-100 p-4">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="box-content col-lg-8 pb-4" style="overflow-x: auto;">
                            <div class="d-flex justify-content-center justify-content-md-start px-4">
                                <div>
                                    <h4 class="h5 text-center text-md-start pt-1 mb-md-0 pt-4">
                                        <strong> Faturas</strong>
                                    </h4>
                                </div>
                                <hr>
                            </div>
                            <hr>
                            <table class="table mt-2">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Produto</th>
                                        <th scope="col">Valor</th>
                                        <th scope="col">Vencimento</th>
                                        <th scope="col">Opções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Chip</td>
                                        <td>9,99</td>
                                        <td>25/06/23</td>
                                        <td>
                                            <button class="btn btn-secondary btn-sm rounded-circle me-2">
                                                <i class="bi bi-credit-card"></i>
                                            </button>
                                            <button class="btn btn-secondary btn-sm rounded-circle me-2">
                                                <i class="bi bi-check-square"></i>
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
    </section>
    @endsection
