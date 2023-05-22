<?php

namespace App\Http\Controllers;

use App\Models\Systems;
use App\Models\User;
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
        return back();

    }

        public function eliminar($id)
        {
            $sistema = Systems::findOrFail($id);
            $sistema->delete();
            return back();
        }

        public function eliminar_usuario(Request $request)
        {
            $id = $request->input('id');
            $email = $request->input('email');

            $usuario = User::where('id', $id)
                              ->where('email', $email)
                              ->first();

            if ($usuario) {
                $usuario->delete();
                return redirect()->back()->with('success', 'Usuario eliminado correctamente.');
            } else {
                return redirect()->back()->with('error', 'No se encontró ningún usuario con los datos proporcionados.');
            }
        }

}
