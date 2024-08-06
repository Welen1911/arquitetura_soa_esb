<?php

use App\Http\Controllers\ESBController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/cliente', [ESBController::class, 'createCliente']);

Route::post('/endereco', [ESBController::class, 'createEndereco']);

Route::get('/cliente_endereco/{id}', [ESBController::class, 'showClienteEndereco']);

