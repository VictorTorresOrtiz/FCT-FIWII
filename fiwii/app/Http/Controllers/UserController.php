<?php
namespace App\Http\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function eliminar(Request $request)
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
?>
