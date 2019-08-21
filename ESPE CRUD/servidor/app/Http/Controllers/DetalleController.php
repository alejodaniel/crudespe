<?php

namespace App\Http\Controllers;

use App\Detalle;
use Illuminate\Http\Request;

class DetalleController extends Controller
{
    public function getDetalles()
    {
        $detalle = Detalle::get();
        return response()->json(["detalles" => $detalle], 200);
    }
    public function postDetalles(Request $request)
    {
        $detalle = Detalle::create($request->all());
        return response()->json($detalle);
    }


    public function putDetalles(Request $request)
    {
        $data = $request->json()->all();
        $detalle = Detalle::findOrFail($data['id']);
        $response = $detalle->update([]);
        return response()->json(["detalles" => $detalle], 201);
    }
    public function deleteDetalles(Request $request)
    {

        $data = $request->json()->all();
        $detalle = Detalle::findOrFail($data['id']);
        $response = $detalle->delete();
        return response()->json(["detalle" => $detalle], 201);
    }
}
