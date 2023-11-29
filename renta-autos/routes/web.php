<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\UserController;

Route::resource('users', UserController::class);

Route::resource('rentals', RentalController::class);

Route::resource('brands', BrandController::class);

Route::resource('Vehicles', VehicleController::class);

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
