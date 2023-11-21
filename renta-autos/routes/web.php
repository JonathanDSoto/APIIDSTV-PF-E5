<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/clientes', function () {
    return view('clientes');
});

Route::get('/vehiculos', function () {
    return view('vehiculos');
});

Route::get('/rentas', function () {
    return view('rentas');
});

Route::get('/marcas', function () {
    return view('marcas');
});

Route::get('/categorias', function () {
    return view('categorias');
});

Route::get('/log-out', function () {
    return view('login');
});
