<?php

namespace App\Http\Controllers;

use App\Models\Systems;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
            $systemInsert->updated_at;
            $systemInsert->save();
            notify()->success('Sistema añadido correctamente!');
            return back();
        }


    }

    public function addUser(Request $request)
    {
        // Validar los datos ingresados en el formulario de registro
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        if (Systems::where('id', $request)->exists())
        {
            smilify('error','Usuario ya creado');
            return back();

        } else {
            $newUser= new User;

            $newUser->name = $request->name;
            $newUser->username = $request->username;
            $newUser->email = $request->email;
            $newUser->password = Hash::make($request->userPassword);
            $newUser->status = $request->status;
            $newUser->save();
            notify()->success('Usuario añadido correctamente!');
        }
        //Meter aqui SMTP
            return redirect("admin.app-dashboard");
    // }
    // public function addUser(Request $request)
    // {
    //     if (Systems::where('id', $request)->exists())
    //     {


        }

        public function eliminar($id)
        {
            $sistema = Systems::findOrFail($id);
            $sistema->delete();
            notify()->success('Sistema eliminado correctamente!');
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
