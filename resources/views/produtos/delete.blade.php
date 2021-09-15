@extends('layouts.app')
@section('title')
    Deletar Produtos
@endsection

@section('content')

<div class="container form-produto">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="{{ route('excluir_produto', ['id' => $produto->id]) }}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field() }}
                <div class="form-group">
                        <label for="nome">Exluir esse produto?</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" value="{{ $produto->nome }}" readonly>
                </div>
                <button type="submit" class="btn btn-danger">Sim</button>
                <a  href="{{ url()->previous() }}" class="btn btn-primary">
                    <i class="fa fa-arrow-circle-o-left"></i>
                    <span>Voltar</span>
                </a>
            </form>
        </div>
    </div>
</div>


@endsection