<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{

    //Retorna a página de criação do produto
    public function create()
    {
        return view('produtos.create');
    }

    //Cria um produto no banco de dados
    public function store(Request $request)
    {
        Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'categoria' => $request->categoria,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
        return view('home');
    }

    //Listar todos os produtos pela ordem de criação
    public function list()
    {
        $produtos = Produto::orderBy('created_at', 'asc')->get();
        return view(
            'produtos.list', 
            [
                'produtos' =>$produtos
            ]
        );
    }

    //Retorna a página de edição do produto
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show', ['produto' =>$produto]);
    }

    //Atualiza o Produto
    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $produto->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'categoria' => $request->categoria,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
        return view('home');
    }

    //Retorna a página de excluir o produto
    public function delete($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.delete', ['produto' =>$produto]);
    }

    //Deleta o produto
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return view('home');
    }
}
