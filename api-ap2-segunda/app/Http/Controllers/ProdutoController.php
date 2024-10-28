<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        return Produto::all();
    }

    // Mostrar um Vendedor específico
    public function show($id)
    {
        $produto = Produto::find($id);
        if (!$produto) {
            return response()->json(['erro' => 'Vendedor não encontrado'], 404);
        }
        return response()->json($produto);
    }

    // Criar um novo Vendedor
    public function store(Request $request)
    {
        $produto = Produto::create($request->all());
        return response()->json($produto, 201);
    }
    

    // Deletar um Vendedor específico
    public function destroy($id)
    {
        $produto = Produto::find($id);
        if (!$produto) {
            return response()->json(['erro' => 'Vendedor não encontrado'], 404);
        }
        $produto->delete();
        return response()->json(['mensagem' => 'Vendedor deletado com sucesso']);
    }
    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        if (!$produto) {
            return response()->json(['erro' => 'Filme não encontrado'], 404);
        }
        $produto->update($request->all());
        return response()->json($produto);
    }



}

