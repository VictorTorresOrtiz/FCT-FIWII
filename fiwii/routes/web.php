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
Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/en', function () {
    return view('en');
})->name('en');

Route::get('/auth.register', function () {
    return view('auth.register');
})->name('auth.register');

Route::get('/auth.login', function () {
    return view('auth.login');
})->name('auth.login');

Route::get('/auth.account-en', function () {
    return view('auth.account-en');
})->name('account-en');


//Dashboard
Route::get('/admin.dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard')->middleware('auth');

Route::get('/admin.app-dashboard', function () {
    return view('admin.app-dashboard');
})->name('admin.app-dashboard');

Route::get('/admin.web-dashboard', function () {
    return view('admin.web-dashboard');
})->name('admin.web-dashboard');




