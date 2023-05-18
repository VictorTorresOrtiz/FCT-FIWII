<?php

namespace App\Http\Controllers;

use App\Models\Systems;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class DashbooardController extends Controller
{
    public function systems()
    {
        $systems = Systems::all(); // Nos saca todos los productos de la BBDD
        return view('admin/app-dashboard', @compact('systems'));
    }

    public function addSystem(Request $request)
    {
        if (Systems::where('id', $request)->exists())
        {
            smilify('error','Sistema ya creado');
            return back();

        } else {
            $systemInsert = new Systems;
            $systemInsert->name = $request->sistemaNombre;
            $systemInsert->ubicacion = $request->sistemaUbicacion;
            $systemInsert->description = $request->sistemaDesc;
            $systemInsert->status = $request->sistemaStatus;
            $systemInsert->prioridad = $request->sistemaPrioridad;
            $systemInsert->tipo = $request->sistemaTipo;
            $systemInsert->updated_at;
            $systemInsert->save();
            notify()->success('Sistema añadido correctamente!');
            return back();
        }


    }

        public function eliminar($id)
        {
            $sistema = Systems::findOrFail($id);
            $sistema->delete();
            notify()->success('Sistema eliminado correctamente!');
            return back();
        }


}
