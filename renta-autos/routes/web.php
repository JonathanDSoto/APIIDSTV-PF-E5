<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;



Route::get('/',[SessionsController::class , 'create'])->name('login');
Route::get('/users',[UserController::class , 'create'])->name('users');
// Ruta para añadir un nuevo usuario
Route::post('/users',[UserController::class , 'add'])->name('users');
// Ruta para editar un usuario
Route::post('/users',[UserController::class , 'update'])->name('users');
// Ruta para eliminar un usuario
Route::get('/users-{name}',[UserController::class , 'delete'])->name('users');
Route::get('/customers',[CustomerController::class , 'create'])->name('customers');
Route::get('/vehicles',[VehicleController::class , 'create'])->name('vehicles');
Route::get('/rentals',[RentalController::class , 'create'])->name('rentals');
Route::get('/brands',[BrandController::class , 'create'])->name('brands');
Route::get('/categories',[CategoryController::class , 'create'])->name('categories');


Route::get('/check-database-connection', function () {
    try {
        DB::connection()->getPdo();
        echo "Conexión exitosa a la base de datos.";
    } catch (\Exception $e) {
        die("Error en la conexión a la base de datos: " . $e->getMessage());
    }
});