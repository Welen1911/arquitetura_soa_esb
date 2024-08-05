<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/cliente', function (Request $request) {
    $response = Http::post('http://127.0.0.1:4000/api/cliente', $request->all());

    return response([$response->object()], 201);
});

Route::post('/endereco', function (Request $request) {
    $response = Http::post('http://127.0.0.1:3000/api/endereco', $request->all());

    return response([$response->object()], 201);
});

