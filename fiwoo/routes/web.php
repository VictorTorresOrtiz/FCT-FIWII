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

Route::get('/en', function () {
    return view('en');
})->name('en');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/account-en', function () {
    return view('account-en');
})->name('account-en');
