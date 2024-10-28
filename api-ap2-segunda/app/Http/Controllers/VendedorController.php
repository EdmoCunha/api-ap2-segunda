<?php

namespace App\Http\Controllers;

use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function index()
    {
        return Vendedor::all();
    }

    // Mostrar um Vendedor específico
    public function show($id)
    {
        $vendedor = Vendedor::find($id);
        if (!$vendedor) {
            return response()->json(['erro' => 'Vendedor não encontrado'], 404);
        }
        return response()->json($vendedor);
    }

    // Criar um novo Vendedor
    public function store(Request $request)
    {
        $produto = Vendedor::create($request->all());
        return response()->json($produto, 201);
    }
    

    // Deletar um Vendedor específico
    public function destroy($id)
    {
        $produto = Vendedor::find($id);
        if (!$produto) {
            return response()->json(['erro' => 'Vendedor não encontrado'], 404);
        }
        $produto->delete();
        return response()->json(['mensagem' => 'Vendedor deletado com sucesso']);
    }
    public function update(Request $request, $id)
    {
        $vendedor = Vendedor::find($id);
        if (!$vendedor) {
            return response()->json(['erro' => 'Filme não encontrado'], 404);
        }
        $vendedor->update($request->all());
        return response()->json($vendedor);
    }



}
