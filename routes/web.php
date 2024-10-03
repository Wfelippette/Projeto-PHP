<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendedorController;
use Illuminate\Support\Facades\Route;


Route::get('/cadastro_cliente', [ClienteController::class,"formCliente"]);
Route::get('/listar_cliente', [ClienteController::class, 'listar']);
Route::post('/criar_cliente', [ClienteController::class, 'criar']);
Route::delete('/deletar_cliente/{id}', [ClienteController::class, 'deletar']);

Route::get('/cadastro_vendedor', [VendedorController::class,"formVendedor"]);
Route::get('/listar_vendedor', [VendedorController::class, 'listar']);
Route::post('/criar_vendedor', [VendedorController::class, 'criar']);
Route::delete('/deletar_vendedor/{id}', [VendedorController::class, 'deletar']);
Route::get('/editar_vendedor/{id}', [VendedorController::class,"formEditarVendedor"]);
Route::patch('/editar_vendedor/{id}', [VendedorController::class,"editar"]);