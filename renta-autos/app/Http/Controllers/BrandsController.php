<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
{
    $brands = Brands::all();
    return view('brands.index', compact('brands'));
}

public function create()
{
    return view('brands.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|unique:brands',
    ]);

    Brands::create($request->all());

    return redirect()->route('brands.index')->with('success', 'Marca agregada exitosamente');
}

public function edit(Brands $brand)
{
    return view('brands.edit', compact('brand'));
}

public function update(Request $request, Brands $brand)
{
    $request->validate([
        'name' => 'required|string|unique:brands,name,' . $brand->id,
    ]);

    $brand->update($request->all());

    return redirect()->route('brands.index')->with('success', 'Marca actualizada exitosamente');
}

public function destroy(Brands $brand)
{
    $brand->delete();

    return redirect()->route('brands.index')->with('success', 'Marca eliminada exitosamente');
}
    //
}
