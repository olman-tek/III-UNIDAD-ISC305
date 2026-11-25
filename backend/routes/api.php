<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

Route::get('/hola', function () {
    return response()->json([
        'mensaje' => 'Hola mundo desde mi API Laravel',
        'asignatura' => 'ISC-305 Programación Web',
    ]);
});

Route::get('/personas', [PersonaController::class, 'index']);

Route::get('/personas/{id}', [PersonaController::class, 'show'])
    ->whereNumber('id');

Route::post('/personas', [PersonaController::class, 'store']);

Route::put('/personas/{id}', [PersonaController::class, 'update'])
    ->whereNumber('id');

Route::delete('/personas/{id}', [PersonaController::class, 'destroy'])
    ->whereNumber('id');