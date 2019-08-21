<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function getProductos()
    {
        $productos = Producto::get();
        return response()->json(["productos" => $productos], 200);
    }
    public function postProductos(Request $request)
    {
        $productos = Producto::create($request->all());
        return response()->json($productos);
    }


    public function putProductos(Request $request)
    {
        $data = $request->json()->all();
        $productos =  Producto::findOrFail($data['id']);
        $response = $productos->update([]);
        return response()->json(["productos" => $productos], 201);
    }
    public function deleteProductos(Request $request)
    {

        $data = $request->json()->all();
        $productos = Producto::findOrFail($data['id']);
        $response = $productos->delete();
        return response()->json(["productos" => $productos], 201);
    }
}
