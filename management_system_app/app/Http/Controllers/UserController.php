<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function muestraUser()
    {
        $user1 = User::findOrFail(Auth::id()); //Coge el id del usuario
        return view('', @compact('usuario'));
    }

    public function mostrar_users()
    {
        $usersvarios = User::all();
        return view('', @compact('users'));
    }

    public function editar_user($id)
    {
        $useredit = User::findOrFail($id);
        return view('', @compact('useredit'));
    }

    public function dropUser($user_ID)
    {

        $user = User::findOrFail(Auth::id());

        if ($user->admin === 1) { 
            $usuario = User::findOrFail($user_ID);
            //Eliminamos usuario
            $usuario->delete();
            return back()->with('mensaje', 'El usuario ha sido eliminado.');
        }
        // else { //Deshabilita la cuenta (Usuario)
        //     $user->state = 0;
        //     $user->save();
        //     return back()->with('mensaje', 'El usuario ha sido deshabilitado.');
        // }

    }
}
