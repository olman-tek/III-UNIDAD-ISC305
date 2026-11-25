<?php

namespace App\Http\Controllers;

use App\Models\Persona;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::orderBy('nombre')->get();

        return response()->json($personas, 200);
    }

    public function show(int $id)
    {
        $persona = Persona::findOrFail($id);

        return response()->json($persona, 200);
    }
}