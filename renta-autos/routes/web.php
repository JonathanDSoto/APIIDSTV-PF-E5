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


// Ruta para mostrar el formulario de login
Route::get('/', [SessionsController::class, 'index'])->name('login');


// Usuarios
Route::get('/users',[UserController::class , 'index'])->name('users');
// Ruta para añadir un nuevo usuario
Route::post('/register-users',[UserController::class , 'add'])->name('users.create');
// Ruta para editar un usuario
Route::post('/update-users',[UserController::class , 'update'])->name('users.update');
// Ruta para eliminar un usuario
Route::get('/delete-users-{id}',[UserController::class , 'delete'])->name('users.delete');



// Clientes
Route::get('/customers',[CustomerController::class , 'index'])->name('customers');
// Ruta para añadir un nuevo cliente
Route::post('/register-customers',[CustomerController::class , 'add'])->name('customers.create');
// Ruta para editar un cliente
Route::post('/update-customers',[CustomerController::class , 'update'])->name('customers.update');
// Ruta para eliminar un cliente
Route::get('/delete-customers-{id}',[CustomerController::class , 'delete'])->name('customers.delete');



// Vehiculos
Route::get('/vehicles',[VehicleController::class , 'index'])->name('vehicles');
// Ruta para añadir un nuevo vehiculo
Route::post('/register-vehicles',[VehicleController::class , 'add'])->name('vehicles.create');
// Ruta para editar un vehiculo
Route::post('/update-vehicles',[VehicleController::class , 'update'])->name('vehicles.update');
// Ruta para eliminar un vehiculo
Route::get('/delete-vehicles-{id}',[VehicleController::class , 'delete'])->name('vehicles.delete');


// Rentas
Route::get('/rentals',[RentalController::class , 'index'])->name('rentals');
// Ruta para añadir una nueva renta
Route::post('/register-rentals',[RentalController::class , 'add'])->name('rentals.create');
// Ruta para editar una renta
Route::post('/update-rentals',[RentalController::class , 'update'])->name('rentals.update');
// Ruta para eliminar una renta
Route::get('/delete-rentals-{id}',[RentalController::class , 'delete'])->name('rentals.delete');


// Marcas
Route::get('/brands',[BrandController::class , 'index'])->name('brands');
// Ruta para añadir una nueva marca
Route::post('/register-brands',[BrandController::class , 'add'])->name('brands.create');
// Ruta para editar una marca
Route::post('/update-brands',[BrandController::class , 'update'])->name('brands.update');
// Ruta para eliminar una marca
Route::get('/delete-brands-{id}',[BrandController::class , 'delete'])->name('brands.delete');


// Categorias
Route::get('/categories',[CategoryController::class , 'index'])->name('categories');
// Ruta para añadir una nueva categoria
Route::post('/register-categories',[CategoryController::class , 'add'])->name('categories.create');
// Ruta para editar una categoria
Route::post('/update-categories',[CategoryController::class , 'update'])->name('categories.update');
// Ruta para eliminar una categoria
Route::get('/delete-categories-{id}',[CategoryController::class , 'delete'])->name('categories.delete');



Route::get('/check-database-connection', function () {
    try {
        DB::connection()->getPdo();
        echo "Conexión exitosa a la base de datos.";
    } catch (\Exception $e) {
        die("Error en la conexión a la base de datos: " . $e->getMessage());
    }
});