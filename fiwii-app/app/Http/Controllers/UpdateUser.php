<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateUser extends Controller
{
    //Update profile settings
    // public function updateUser(Request $request)
    // {
    //     // $userUpdate = User::find(Auth::id());
    //     // if ($request->name != null) {
    //     //     $userUpdate->name = $request->name;
    //     // }

    //     // if ($request->email != null) {
    //     //     $userUpdate->email = $request->email;
    //     // }
    //     // //$userUpdate->phone = $request->phone;
    //     // $userUpdate->update();
    //     // smilify('success', 'User edit successfully!');
    //     // return back();
    //     $request->user()->update(
    //         $request->all()
    //     );

    //     return redirect()->route('index');
    // }
    public function update(Request $request)
    {
        $request->user()->update(
            $request->all()
        );

        return redirect()->route('index'); // Cambia 'dashboard' por la ruta que desees redirigir después de actualizar el perfil.
    }
}
