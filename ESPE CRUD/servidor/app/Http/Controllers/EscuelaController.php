<?php

namespace App\Http\Controllers;

use App\Escuela;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class EscuelaController extends Controller
{

    public function getEscuelas()
    {
        $escuela = Escuela::get();
        return response()->json(["escuelas" => $escuela], 200);
    }

    public function postEscuelas(Request $request)
    { }
    public function putEscuelas(Request $request)
    { }
    public function deleteEscuelas(Request $request)
    { }
}
