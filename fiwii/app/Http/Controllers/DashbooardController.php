<?php

namespace App\Http\Controllers;

use App\Models\Systems;
use Illuminate\Http\Request;

class DashbooardController extends Controller
{
    public function systems()
    {
        $systems = Systems::all(); // Nos saca todos los productos de la BBDD
        return view('admin/admin-panel', @compact('systems'));
    }
}
