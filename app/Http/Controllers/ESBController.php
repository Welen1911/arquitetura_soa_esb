<?php

namespace App\Http\Controllers;

use App\Services\ClienteService;
use App\Services\EnderecoService;
use Illuminate\Http\Request;

class ESBController extends Controller
{
    public function createCliente(Request $request) {

        $response = ClienteService::store($request);
        return response([$response], 201);

    }

    public function createEndereco(Request $request) {

        $response = EnderecoService::store($request);
        return response([$response], 201);

    }

    public function showClienteEndereco(string $id) {
        $cliente = ClienteService::show($id);

        $enderecos = EnderecoService::show($id);

        return response([
            'cliente' => $cliente,
            'enderecos' => $enderecos
        ], 200);
    }
}
