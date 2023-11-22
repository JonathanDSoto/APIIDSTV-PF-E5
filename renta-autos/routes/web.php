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

Route::get('/r-marcas', function () {
    return view('form-marcas');
});

Route::get('/r-clientes', function () {
    return view('form-cliente');
});

Route::get('/r-categorias', function () {
    return view('form-categoria');
});

Route::get('/r-vehiculos', function () {
    return view('form-vehiculo');
});

Route::get('/r-rentas', function () {
    return view('form-renta');
});
