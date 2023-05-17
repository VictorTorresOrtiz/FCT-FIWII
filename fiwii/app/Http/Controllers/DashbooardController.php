<?php

namespace App\Http\Controllers;

use App\Models\Systems;
use Illuminate\Http\Request;

class DashbooardController extends Controller
{
    public function systems()
    {
        $systems = Systems::all(); // Nos saca todos los productos de la BBDD
        return view('admin/app-dashboard', @compact('systems'));
    }

    public function addSystem(Request $request)
    {
        $systemInsert = new Systems;
        $systemInsert->name = $request->sistemaNombre;
        $systemInsert->ubicacion = $request->sistemaUbicacion;
        $systemInsert->description = $request->sistemaDesc;
        $systemInsert->updated_at;
        $systemInsert->save();
        notify()->success('Sistema añadido correctamente!');
        return back();

    }
}
