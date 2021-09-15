@extends('layouts.app')
@section('title')
    Cadastrar Produtos
@endsection

@section('content')

<div class="container form-produto">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="{{ route('registrar_produto') }}" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" class="form-control" id="categoria" placeholder="Categoria" name="categoria">
                </div>
                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text" class="form-control" id="preco" placeholder="Preço" name="preco">
                </div>
                <div class="form-group">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" class="form-control" id="quantidade" placeholder="Quantidade" name="quantidade">
                </div>
                <button type="" class="btn btn-primary">Salvar</button>
                <a  href="{{ url()->previous() }}" class="btn btn-danger">
                    <i class="fa fa-arrow-circle-o-left"></i>
                    <span>Voltar</span>
                </a>
            </form>
        </div>
    </div>
</div>
@endsection