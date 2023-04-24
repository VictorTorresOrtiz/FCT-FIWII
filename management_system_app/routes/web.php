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

Route::get('/fiwii', function () {
    return view('fiwii');
})->middleware('auth')->name('fiwii');

Route::get('/conf', function () {
    return view('conf');
})->middleware('auth')->name('conf');

Route::get('/auth.login', function () {
    return view('auth.login');
})->middleware('auth')->name('auth.login');

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth')->name('profile');

Route::get('/to-do', function () {
    return view('to-do');
})->middleware('auth')->name('to-do');


Route::get('/misc.menu-share', function () {
    return view('misc.menu-share');
})->middleware('auth')->name('misc.menu-share');

Route::get('/misc.menu', function () {
    return view('misc.menu');
})->middleware('auth')->name('misc.menu');

Route::get('/misc.menu-footer', function () {
    return view('misc.menu-footer');
})->middleware('auth')->name('misc.menu-footer');










