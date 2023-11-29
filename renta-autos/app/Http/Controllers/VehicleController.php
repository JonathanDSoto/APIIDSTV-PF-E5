<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vehicles;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function showForm()
    {
        return view('/agregar-vehiculo');
    }

    public function agregarVehiculo(Request $request)
    {
        try {
            $request->validate([
                'placa' => 'required|string|max:255',
                'modelo' => 'required|string|max:255',
                'marca' => 'required|string|max:255',
                'año' => 'required|integer|digits:4',
                'color' => 'required|string|max:255',
            ]);

            $placa = $request->input('placa');
            $modelo = $request->input('modelo');
            $marca = $request->input('marca');
            $año = $request->input('año');
            $color = $request->input('color');

            Vehicles::create([
                'placa' => $placa,
                'modelo' => $modelo,
                'marca' => $marca,
                'año' => $año,
                'color' => $color,
            ]);

          
            return redirect()->back()->with('success', 'Vehículo agregado exitosamente');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al agregar el vehículo: ' . $e->getMessage())->withInput();
        }
    }


    public function verificarConexion()
    {
        try {
            DB::connection()->getPdo();
            return "Conexión exitosa a la base de datos.";
        } catch (\Exception $e) {
            return "Error de conexión a la base de datos: " . $e->getMessage();
        }
    }
}