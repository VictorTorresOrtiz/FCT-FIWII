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
})->name('fiwii');

Route::get('/conf', function () {
    return view('conf');
})->name('conf');

Route::get('/misc.menu-share', function () {
    return view('misc.menu-share');
})->name('misc.menu-share');

Route::get('/misc.menu', function () {
    return view('misc.menu');
})->name('misc.menu');









