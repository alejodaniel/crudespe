<?php

namespace App\Http\Controllers;

use App\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function getFacturas()
    {
        $factura = Factura::get();
        return response()->json(["facturas" => $factura], 200);
    }
    public function postFacturas(Request $request)
    {
        $factura = Factura::create($request->all());
        return response()->json($factura);
    }


    public function putFacturas(Request $request)
    {
        $data = $request->json()->all();
        $factura = Factura::findOrFail($data['id']);
        $response = $factura->update([]);
        return response()->json(["facturas" => $factura], 201);
    }
    public function deleteFacturas(Request $request)
    {

        $data = $request->json()->all();
        $factura = Factura::findOrFail($data['id']);
        $response = $factura->delete();
        return response()->json(["facturas" => $factura], 201);
    }
}
