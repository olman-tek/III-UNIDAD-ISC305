<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hola', function () {
    return response()->json([
        'mensaje' => 'Hola mundo desde mi API Laravel',
        'asignatura' => 'ISC-305 Programación Web',
    ]);
});