<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function getCategorias()
    {
        $categoria = Categoria::get();
        return response()->json(["categorias" => $categoria], 200);
    }

    public function postCategorias(Request $request)
    {
        $categoria = Categoria::create($request->all());
        return response()->json($categoria);
    }
    public function putCategorias(Request $request)
    {
        $data = $request->json()->all();
        $categoria = Product::findOrFail($data['id']);
        $response = $categoria->update([]);
        return response()->json(["categorias" => $categoria], 201);
    }
    public function deleteCategorias(Request $request)
    {

        $data = $request->json()->all();
        $categoria = Product::findOrFail($data['id']);
        $response = $categoria->delete();
        return response()->json(["products" => $categoria], 201);
    }
}
