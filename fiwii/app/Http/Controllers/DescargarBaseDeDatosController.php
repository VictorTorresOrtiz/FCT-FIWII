<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescargarBaseDeDatosController extends Controller
{
    public function descargar()
{
    // Lógica para descargar la base de datos
    $path = storage_path('storage/app/userDB.sql');
    $dbName = 'userDB.sql';

    return response()->download($path, $dbName);
}

}
