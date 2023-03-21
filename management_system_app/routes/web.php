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

Route::get('/index-pages', function () {
    return view('index-pages');
})->name('index-pages');


Route::get('/menu-main', function () {
    return view('menu-main');
})->name('menu-main');

Route::get('/menu-highlights', function () {
    return view('menu-highlights');
})->name('menu-highlights');


