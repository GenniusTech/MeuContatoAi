@extends('dashboard.layout')
    @section('conteudo')
    <div class="col-sm-12 col-xl-12" style="height: 100vh;">
        <div class="bg-light rounded h-100 p-4">
            <div class="container link-whats">
                <div class="row">
                    <div class="container-form col-sm-6">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form class="row g-3 p-3" action="{{ route('update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="col-sm-12">
                                <label for="inputEmail" class="form-label" >Email</label>
                                <input type="email"
                                class="form-control"
                                id="inputEmail4"
                                name="email"
                                value="{{  $user->email}}"
                                placeholder="{{  $user->email}}"
                                >
                            </div>
                            <div class="col-sm-12">
                                <label for="inputName" class="form-label" >Nome</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputName"
                                    name="name"
                                    value="{{ $user->name}}"
                                    placeholder="{{ $user->name}}"
                                >
                            </div>
                            <div class="col-sm-12">
                                <label for="inputNumber" class="form-label" >Telefone</label>
                                <input
                                    type="tel"
                                    class="form-control"
                                    id="tell"
                                    name="tell"
                                    value="{{ $telefoneFormatado }}"
                                   
                                    maxlength="15"
                                >
                            </div>
                            <div class="col-sm-12 pt-4 text-center">
                                <button type="submit" class="btn btn-primary">Atualizar dados</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
