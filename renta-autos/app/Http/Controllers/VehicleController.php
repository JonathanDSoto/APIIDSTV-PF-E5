<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vehicles;
use Illuminate\Http\Request;

class VehicleController extends Controller
{

    public function create()
{
    return view('cars.create');
}

public function index()
{
    $cars = Vehicles::all();
    return view('cars.index', compact('Vehicles'));
}

//muestra los autos que existan

public function show($id)
{
    $car = Vehicles::findOrFail($id);
    return view('cars.show', compact('Vehicles'));
}



public function store(Request $request)
{
    // Valida los datos del formulario
    $request->validate([
        'marca' => 'required|string',
        'modelo' => 'required|string',
        'anio' => 'required|integer',
        'color' => 'required|string',
        // Agrega otras validaciones según tus necesidades
    ]);

    // Crea un nuevo vehículo en la base de datos
    Vehicles::create($request->all());

    return redirect()->route('cars.index')->with('success', 'Vehículo agregado exitosamente');
}
    //
}
