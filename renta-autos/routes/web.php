<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\RentalController;

Route::resource('rentals', RentalController::class);

Route::resource('brands', BrandController::class);

Route::resource('Vehicles', CarController::class);

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
