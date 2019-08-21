<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function getPersonas()
    {
        $personas = Persona::get();
        return response()->json(["personas" => $personas], 200);
    }

    public function postPersonas(Request $request)
    {
        $persona = Persona::create($request->all());
        return response()->json($persona);
    }


    public function putPersonas(Request $request)
    {
        $data = $request->json()->all();
        $persona =  Persona::findOrFail($data['id']);
        $response = $persona->update([]);
        return response()->json(["personas" => $persona], 201);
    }
    public function deletePersonas(Request $request)
    {

        $data = $request->json()->all();
        $persona = Persona::findOrFail($data['id']);
        $response = $persona->delete();
        return response()->json(["facturas" => $persona], 201);
    }
}
