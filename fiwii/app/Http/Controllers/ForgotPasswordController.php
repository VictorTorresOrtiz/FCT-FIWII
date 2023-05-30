<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function showForgotPasswordView()
    {
        return view('auth.forgot-password');
    }
}
