<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendedorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('vendedors', [VendedorController::class, 'index']); // Listar todos os atores
Route::get('vendedors/{id}', [VendedorController::class, 'show']); // Mostrar um ator específico
Route::post('vendedors', [VendedorController::class, 'store']); // Criar um novo ator
Route::put('vendedors/{id}', [VendedorController::class, 'update']); // Editar um Vendedor específico
Route::delete('vendedors/{id}', [VendedorController::class, 'destroy']); // Deletar um Vendedor específico



Route::get('produtos', [ProdutoController::class, 'index']); // Listar todos os atores
Route::get('produtos/{id}', [ProdutoController::class, 'show']); // Mostrar um ator específico
Route::post('produtos', [ProdutoController::class, 'store']); // Criar um novo ator
Route::put('produtos/{id}', [ProdutoController::class, 'update']); // Editar um Vendedor específico
Route::delete('produtos/{id}', [ProdutoController::class, 'destroy']); // Deletar um Vendedor específico
