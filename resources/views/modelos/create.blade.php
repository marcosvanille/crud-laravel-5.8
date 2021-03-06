@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 id="titulo">Formulario de Cadastro</h1>
                        <a href="{{url('/modelos') }}">Voltar</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('modelos.store') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-10">
                                    <label for="inputNome" class="lb">Nome Completo </label>
                                    <input type="text" class="form-control" id="inputNome" name="nome" required>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email" class="lb">Email:</label>
                                    <input type="email" class="form-control" id="email"
                                           name="email"/>
                                    <span id="error-email"></span>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputFone" class="lb">Telefone</label>
                                    <input type="text" class="form-control" id="inputFone" placeholder=""
                                           name="telefone" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress" class="lb">Endereço</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder=""
                                           name="endereco">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputCidade" class="lb">Cidade</label>
                                    <input type="text" class="form-control" id="inputCidade" name="cidade">
                                </div>
                            </div>

                            <!--loja-->
                            <div class="form-row  ">
                                <div class="form-group col-md-3">
                                    <label for="inputTipo" class="lb">Tipo</label>
                                    <select id="inputTipo" class="form-control" name="tipo">
                                        <option value="Esportivo">Esportivo</option>
                                        <option value="Comum">Comum</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputPreco" class="lb">Faixa de Preço</label>
                                    <input id="inputPreco" class="form-control" name="preco"/>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputCarro" class="lb">Carros</label>
                                    <select id="inputCarro" class="form-control" name="carros">
                                        <option value="Uno">Uno</option>
                                        <option value="Golf">Golf</option>
                                        <option value="Gol">Gol</option>
                                        <option value="Bmw">Bmw</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <button type="submit" class="btn btn-primary">Cadastra modelo</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
