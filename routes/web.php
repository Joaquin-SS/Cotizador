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
});

Route::get('/layout.blade.php', function () {
    return view('layout');
});

Route::get('/index.blade.php', function () {
    return view('index');
});

Route::get('/cotizador.blade.php', function () {
    return view('cotizador');
});

Route::get('/resumenCotizacion.blade.php', function () {
    return view('resumenCotizacion');
});

Route::get('/seguirCotizando.blade.php', function () {
    return view('seguirCotizando');
});

Route::get('/catalogo.blade.php', function () {
    return view('catalogo');
});
