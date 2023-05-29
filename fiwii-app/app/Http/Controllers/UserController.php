<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit()
    {
        $user = auth()->user();

        return view('user.edit', compact('user'));
    }

     public function update(Request $request)
    {
        $user = auth()->user();

        $user->name = $request->input('name');
        // Actualiza más campos según tus necesidades

        $user->save();

        return redirect()->back()->with('success', 'Información del usuario actualizada correctamente.');
    }
}
