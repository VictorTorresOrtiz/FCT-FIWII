<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/fiwoo', function () {
    return view('fiwoo');
})->name('fiwoo');

Route::get('/index-pages', function () {
    return view('index-pages');
})->name('index-pages');


Route::get('/menu-main', function () {
    return view('menu-main');
})->name('menu-main');


Route::get('/qr-generator', function () {
    return view('qr-generator');
})->name('qr-generator');

Route::get('/equipos', function () {
    return view('equipos');
})->name('equipos');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

//Offline mode PWA
Route::get('/offline', function(){
    return view('vendor.laravelpwa.offline');
});



