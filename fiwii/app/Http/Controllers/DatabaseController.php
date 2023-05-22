<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DatabaseController extends Controller
{
    public function downloadDatabase()
    {
        $path = storage_path('userDB.sql'); // Ruta de la base de datos
        $filename = 'userDB.sql'; // Nombre del archivo que se descargará

        return response()->download($path, $filename);
    }

    public function downloadDatabase2()
    {
        $path = storage_path('DB.sql'); // Ruta de la base de datos
        $filename = 'DB.sql'; // Nombre del archivo que se descargará

        return response()->download($path, $filename);
    }
}
