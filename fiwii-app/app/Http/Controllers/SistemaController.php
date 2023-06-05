<?php

namespace App\Http\Controllers;

use App\Models\Systems;
use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function systems()
    {
        $systems = Systems::all(); // Nos saca todos los productos de la BBDD
        return view('/sistemas', @compact('systems'));
    }

    public function mostrarDetalles($id)
    {
        $sistema = Systems::find($id);


        return view('systeminfo', ['sistema' => $sistema]);
    }
}
