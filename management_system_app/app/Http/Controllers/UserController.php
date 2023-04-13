<?php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\UserController as BaseController;

class UserController
{
public function store(Request $request)
{
    $user = new User;

    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->Plan=$request->plan;
    $user->rol=$request->rol;
    $user->save();

    return redirect()->route('index');
}
}
?>
