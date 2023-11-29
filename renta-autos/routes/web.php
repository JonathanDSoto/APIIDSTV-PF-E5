<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
Route::get('/form', [VehicleController::class, 'showForm']);
Route::post('/agregar-vehiculo', [VehicleController::class, 'agregarVehiculo']);


//Route::post('/agregar-vehiculo', 'VehicleController@agregarVehiculo');



Route::resource('users', UserController::class);

Route::resource('rentals', RentalController::class);

Route::resource('brands', BrandController::class);



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

Route::get('/check-database-connection', function () {
    try {
        DB::connection()->getPdo();
        echo "Conexión exitosa a la base de datos.";
    } catch (\Exception $e) {
        die("Error en la conexión a la base de datos: " . $e->getMessage());
    }
});