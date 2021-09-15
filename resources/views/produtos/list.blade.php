@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Produtos</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <tbody>
                            <thead>
                                <th scope="col">Nome</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Ação</th>
                            </thead>
                            @foreach ($produtos as $produto)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $produto->nome }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $produto->descricao }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $produto->categoria }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $produto->preco }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $produto->quantidade }}</div>
                                </td>
                                <td class="table-text">
                                    <a href="/produto/del/{{$produto->id}}">
                                        <i class="material-icons mr-1 btn btn-danger">delete</i>
                                    </a>
                                    <a href="/produto/edit/{{$produto->id}}">
                                        <i class="material-icons mr-1 btn btn-info">edit</i>
                                    </a>
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
