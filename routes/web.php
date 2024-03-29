<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
    // anteriomente return view('welcome');
});

// middleware para la autenticación de jetstream
Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dashboard');
})->name('dash');


