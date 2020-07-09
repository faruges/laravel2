<?php

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
    return view('menu');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/nosotros_caci', function () {
    return view('nosotros_caci');
});

Route::get('/requisitos', function () {
    return view('requisitos');
});

Route::get('/tramites', function () {
    return view('tramites');
});

Route::get('/civil_proteccion', function () {
    return view('civil_proteccion');
});

Route::get('/contactenos', function () {
    return view('contactenos');
});




