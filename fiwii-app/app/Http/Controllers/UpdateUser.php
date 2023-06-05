<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateUser extends Controller
{
    public function update(Request $request)
    {
        $request->user()->update(
            $request->all()
        );

        return redirect()->route('fiwii');
    }
}
