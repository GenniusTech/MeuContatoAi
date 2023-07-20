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
                                        <strong>meucontatoai/{{$link->rota}}</strong>
                                    </h4>
                                    <span class="text-center text-muted mb-4 text-md-start">{{$link->mensagem}}</span>

                                </div>
                               
                           
                        
                                <div class="ms-auto d-none d-md-block pt-4">
                                    
                                    <button onclick="delLink()" class="btn btn-danger rounded-circle btn-sm ms-2">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </div>
                                <hr>
                            </div> 
                            @if(session('success'))
                                <div class="alert alert-success" style="color: white; margin:0; background: rgb(32, 128, 16); border-radius: 0.25rem;">
                                    <small>{{ session('success') }}</small>
                                </div>
                                <br>
                            @endif

                            <hr>
                            <div class="container link-criado">

                                <div class="row">
                                    <ul class="d-flex justify-content-center justify-content-md-start px-4">
                                        <li class="nav-item active" id="link">
                                            <button>Link</button>
                                            <span></span>
                                        </li>

                                        <li class="nav-item" id="dados">
                                            <button>Números</button>
                                            <span></span>
                                        </li>
                                    </ul>
                                </div>

                                <div id="linktab" class="tab-content" style="display: flex;">
                                    <div class="container">
                                        <p>Seu link está pronto para ser usados.</p>
                                        <h4 class="h5 text-center text-md-start mb-4 pt-1">
                                            <div class="text-center" id="qrcode"></div>
                                            <br>
                                            <a href="https://meucontatoai.com/{{$link->rota}}" target="_blank" class="text-decoration-none">
                                                <i class="bi bi-link-45deg"></i> meucontatoai.com/{{$link->rota}}
                                            </a>
                                        </h4>
                                    </div>
                                </div>

                                <div id="dadostab" class="tab-content">
                                    <div class="container">
                                        <form id="formConnection" class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <label for="numero_whatsapp" class="form-label">Número de WhatsApp</label>
                                                <input type="number" class="form-control" id="numero_whatsapp" name="numero_whatsapp" placeholder="(DD) + Número">
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <label for="mensagem_inicial" class="form-label">Mensagem inicial</label>
                                                <input type="text" class="form-control" id="mensagem_inicial" name="mensagem_inicial" value="{{ $link->mensagem }}">
                                            </div>
                                            <div class="d-flex flex-column mt-3 flex-md-row justify-content-center justify-content-md-start">
                                                <button onclick="addConnection()" class="btn btn-primary px-4" type="button">Adicionar</button>
                                                <button onclick="loadTable()" class="btn btn-outline-primary mt-3 mt-md-0 ms-md-3 px-4" type="button">Atualizar Tabela</button>
                                            </div>
                                        </form>

                                        <div class="mt-3">
                                            <table id="connections" class="table mt-2">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Número</th>
                                                        <th scope="col" class="text-center">Leads</th>
                                                        <th scope="col" class="text-center">Opções</th>
                                                    </tr>
                                                </thead>
                                                <tbody> </tbody>
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

    <script>

        $(document).ready(function() {
            loadTable();

            const qrCodeElement = document.getElementById('qrcode');

            var rota = '{{$link->rota}}';

            const qrcode = new QRCode(qrCodeElement, {
                text: 'https://meucontatoai.com/' + rota,
                width: 128,
                height: 128,
            });

            function showQRCode(url) {
                qrcode.clear();
                qrcode.makeCode(url);
            }

            showQRCode('https://meucontatoai.com/' + rota);

        });

        function addConnection() {
            const url = '/api/addConnection';
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    numero: $('#numero_whatsapp').val(),
                    url: 'https://api.whatsapp.com/send?phone=55' + $('#numero_whatsapp').val() + '&text=' + $('#mensagem_inicial').val(),
                    id_link: {{ $link->id }},
                    lead: 0
                },
                success: function (response) {
                    $('#numero_whatsapp').val();
                    loadTable();
                    Swal.fire('Sucesso!', 'Números adicionado com sucesso!', 'success');
                },
                error: function (error) {
                    Swal.fire('Erro!', 'Operação não realizada!', 'warning');
                }
            });
        }

        function delConnection(id) {
            const url = '/api/delConnection/' + id;
            console.log(url);
            $.ajax({
                url: url,
                type: "GET",
                success: function (response) {
                    console.log(response);
                    loadTable();
                    Swal.fire('Sucesso!', 'Número excluído com sucesso!', 'success');
                },
                error: function (error) {
                    Swal.fire('Erro!', 'Operação não realizada!', 'warning');
                }
            });
        }

        function loadTable() {
            $("#connections tbody").empty();
            const url = `/api/listConnection/` + {{ $link->id }};

            $.ajax({
                url: url,
                type: "GET",
                success: function (response) {
                    if (response.length > 0) {
                        const tableBody = $("#connections tbody");

                        response.forEach(function (connection) {
                            const row = $("<tr></tr>");
                            const numberCell = $("<td></td>").text(connection.numero);
                            const leadCell = $("<td class='text-center'></td>").text(connection.lead);
                            const optionsCell = $("<td class='text-center'></td>");

                            const viewButton = $("<a targent='_blank' href='"+connection.url+"'></a>").addClass("btn btn-secondary btn-sm rounded-circle me-2").html('<i class="bi bi-eye"></i>');
                            const deleteButton = $("<button onclick='delConnection("+connection.id+")'></button>").addClass("btn btn-danger btn-sm rounded-circle me-2").html('<i class="bi bi-trash"></i>');

                            optionsCell.append(viewButton);
                            optionsCell.append(deleteButton);

                            row.append(numberCell);
                            row.append(leadCell);
                            row.append(optionsCell);

                            tableBody.append(row);
                        });
                    }
                },
                error: function (xhr, status, error) {
                    console.log("Erro na requisição AJAX: " + error);
                },
            });
        }

        function delLink() {
            Swal.fire({
                title: 'Você tem certeza?',
                text: 'Essa ação irá excluir todos os números relacionados!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim',
                cancelButtonText: 'Não'
            }).then((result) => {
                if (result.isConfirmed) {
                    const url = `/api/delLink/` + {{$link->id}};
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: {
                           id: {{$link->id}}
                        },
                        success: function (response) {
                           if(response == true){
                                window.location.replace('/app');
                           } else {
                                Swal.fire('Atenção!', 'Operação não realizada!', 'warning');
                           }
                        },
                        error: function (error) {
                            Swal.fire('Erro!', 'Operação não realizada!', 'warning');
                        }
                    });
                } else {
                    Swal.fire('Atenção', 'Operação cancelada!', 'warning');
                }
            });
        }

    </script>
    @endsection
