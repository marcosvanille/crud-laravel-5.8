@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><a href="{{route('modelos.create')}}">{{__('Novo Usuário')}}</a></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1>Lista dos Usuarios</h1>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">preço</th>
                                <th scope="col">Carros</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Deletar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($modelos as $modelo)

                                <tr>
                                    <th scope="row">{{$modelo->id}}</th>
                                    <td>{{$modelo->nome}}</td>
                                    <td>{{$modelo->email}}</td>
                                    <td>{{$modelo->telefone}}</td>
                                    <td>{{$modelo->endereco}}</td>
                                    <td>{{$modelo->cidade}}</td>
                                    <td>{{$modelo->tipo}}</td>
                                    <td>{{$modelo->preco}}</td>
                                    <td>{{$modelo->carros}}</td>
                                    <td>
                                        <a href="{{route('modelos.edit', ['modelo' => $modelo->id])}}" class="btn btn-info">Editar</a>
                                    </td>

                                    <td>
                                        <a href="{{route('modelos.delete', ['modelo' => $modelo->id])}}" class="btn btn-danger">Deletar</a>

                                    </td>
                                </tr>


                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
