<?php

use App\Http\Controllers\DashbooardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DatabaseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPasswordController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/auth.register', function () {
    return view('auth.register');
})->name('auth.register');

Route::get('/auth.login', function () {
    return view('auth.login');
})->name('auth.login');

Route::get('/auth.forgot-password', function () {
    return view('auth.forgot-password');
})->name('auth.forgot-password');

// Route::get('/solicitar-restablecimiento-contraseña', [ForgotPasswordController::class, 'showForgotPasswordView'])->name('solicitar_restablecimiento');

// Route::get('contactanos', function(){
//     $correo=new ContactanosMailable;
//     Mail::to('fiwiiapp@gmail.com')->send($correo);

//     return "Mensaje enviado";
// });

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/trial-fiwii-info', function () {
    return view('trial-fiwii-info');
})->name('trial-fiwii-info');

//Dashboard
Route::get('/admin.dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard')->middleware('auth');

Route::get('/admin.app-dashboard', function () {
    return view('admin.app-dashboard');
})->name('admin.app-dashboard')->middleware('auth');

Route::get('/admin.web-dashboard', function () {
    return view('admin.web-dashboard');
})->name('admin.web-dashboard')->middleware('auth');

Route::get('/admin.crearSistema', function () {
    return view('admin.crearSistema');
})->name('admin.crearSistema')->middleware('auth');

Route::get('/admin.crearUsuario', function () {
    return view('admin.crearUsuario');
})->name('admin.crearUsuario')->middleware('auth');

Route::get('/admin.editarSistema', function () {
    return view('admin.editarSistema');
})->name('admin.editarSistema')->middleware('auth');

Route::get('/admin.borrarUsuario', function () {
    return view('admin.borrarUsuario');
})->name('admin.borrarUsuario')->middleware('auth');


Route::get('/admin.app-dashboard', [ DashbooardController::class,'systems' ]);


Route::post('/admin.crearSistema', [ DashbooardController::class,'addSystem' ]) -> name('addSystem');

Route::post('/admin.crearUsuario', [ DashbooardController::class,'addUser' ]) -> name('addUser');

Route::get('/download-database', [DatabaseController::class, 'downloadDatabase'])->name('download.database');

Route::get('/download-database2', [DatabaseController::class, 'downloadDatabase2'])->name('download.database2');

Route::delete('/sistema/{id}',[ DashbooardController::class,'eliminar' ])->name('sistema_eliminar');


Route::delete('/eliminar_user', [DashbooardController::class, 'eliminar_user'])->name('eliminar_user');


Route::get('/sistema/{id}',[ DashbooardController::class,'editar' ])->name('sistema_editar');

Route::put('/sistema/{id}', [DashbooardController::class, 'actualizar'])->name('sistema_actualizar');





