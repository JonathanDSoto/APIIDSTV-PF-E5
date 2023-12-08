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


Route::get('/',[SessionsController::class , 'index'])->name('login');



Route::get('/users',[UserController::class , 'index'])->name('users');



// Ruta para añadir un nuevo usuario
Route::post('/register-users',[UserController::class , 'add'])->name('users.create');



// Ruta para editar un usuario
Route::post('/update-users',[UserController::class , 'update'])->name('users.update');



// Ruta para eliminar un usuario
Route::get('/delete-users-{id}',[UserController::class , 'delete'])->name('users.delete');



Route::get('/customers',[CustomerController::class , 'index'])->name('customers');



Route::get('/vehicles',[VehicleController::class , 'index'])->name('vehicles');



// Ruta para añadir un nuevo vehiculo
Route::post('/register-vehicles',[VehicleController::class , 'add'])->name('vehicles.create');




Route::get('/rentals',[RentalController::class , 'index'])->name('rentals');



Route::get('/brands',[BrandController::class , 'index'])->name('brands');



Route::get('/categories',[CategoryController::class , 'index'])->name('categories');



Route::get('/check-database-connection', function () {
    try {
        DB::connection()->getPdo();
        echo "Conexión exitosa a la base de datos.";
    } catch (\Exception $e) {
        die("Error en la conexión a la base de datos: " . $e->getMessage());
    }
});