<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EnderecoService {
    public static function store(Request $request) {
        $response = Http::post('http://127.0.0.1:3000/api/endereco', $request->all());

        return $response->object();
    }

    public static function show(string $id) {
        $response = Http::get('http://127.0.0.1:3000/api/endereco/'.$id);

        return $response->object();
    }
}
