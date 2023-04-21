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
Route::get('/home', function () {
    return view('index');
})->name('index');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/en', function () {
    return view('en');
})->name('en');

Route::get('/account', function () {
    return view('auth.account');
})->name('account');

Route::get('/account-en', function () {
    return view('auth.account-en');
})->name('account-en');


Route::get('/plans.basic', function () {
    return view('plans.basic');
})->name('plans.basic');

Route::get('/plans.basic-en', function () {
    return view('plans.basic-en');
})->name('plans.basic-en');

Route::get('/plans.enterprise', function () {
    return view('plans.enterprise');
})->name('plans.enterprise');

Route::get('/plans.enterprise-en', function () {
    return view('plans.enterprise-en');
})->name('plans.enterprise-en');

Route::get('/plans.premium', function () {
    return view('plans.premium');
})->name('plans.premium');

Route::get('/plans.premium-en', function () {
    return view('plans.premium-en');
})->name('plans.premium-en');

//Dashboard
Route::get('/admin.dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin.app-dashboard', function () {
    return view('admin.app-dashboard');
})->name('admin.app-dashboard');




