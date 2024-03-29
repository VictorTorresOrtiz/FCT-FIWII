<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use App\Models\Systems;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
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
            //return redirect("admin.app-dashboard");
        }
        //Meter aqui SMTP


        //    Mail::send($newUser->email)->send(new WelcomeEmail($newUser));
        $correo=new ContactanosMailable($newUser->name,$newUser->username,$newUser->status);
        Mail::to($newUser->email)->send($correo);

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

        public function eliminar_user(Request $request)
        {
            $user = User::findOrFail($request->input('userId'));
            $user->delete();
            return redirect("admin.app-dashboard")->with('success', 'Usuario eliminado exitosamente');
        }

        public function editar($id)
        {
            $sistema = Systems::find($id);
            return view('admin.editarSistema', compact('sistema'));
        }

        public function actualizar(Request $request, $id)
        {
                $request->validate([
                    'nombre' => 'required',
                    'ubicacion' => 'required',
                    'descripcion' => 'required',
                    'prioridad' => 'required',
                ]);

                $sistema = Systems::findOrFail($id);

                $sistema->name = $request->input('nombre');
                $sistema->ubicacion = $request->input('ubicacion');
                $sistema->description = $request->input('descripcion');
                $sistema->prioridad = $request->input('prioridad');
                $sistema->status = $request->input('status');

                $sistema->save();

                // return redirect()->route('admin.app-dashboard')->with('success', 'Sistema actualizado exitosamente.');
                return redirect("admin.app-dashboard");
        }

}
