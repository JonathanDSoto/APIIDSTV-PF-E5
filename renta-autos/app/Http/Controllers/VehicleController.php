<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    public function index(){
        $datos=DB::select("select * from vehicle");
        return view("vehicles")->with("datos", $datos);
    }

    public function add(Request $request)
    {
        try {
            $sql = DB::insert(" insert into vehicle(lisense_plate,brand,category,color,aviavle)values(?,?,?,?,?) ", [
                $request->lisense_plate,
                $request->brand,
                $request->category,
                $request->color,
                $request->aviavle,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","¡Vehiculo registrado correctamente!");
        } else {
            return back() ->with("incorrecto","Error al registrar un vehiculo, por favor verifique la información.");
        }
        
       
    }

    public function update(Request $request)
    {
        try {
            $sql = DB::update(" update vehicle set lisense_plate=?,brand=?,catgory=?,color=?,aviavle=? where id=? ", [
                $request->lisense_plate,
                $request->brand,
                $request->category,
                $request->color,
                $request->aviavle,
                $request->id,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","¡Datos de vehículo editados correctamente!");
        } else {
            return back() ->with("incorrecto","Error al editar un vehículo, por favor verifique la información.");
        }
        
       
    }

    public function delete($id)
    {
        try {
            $sql = DB::delete(" delete from vehicle where id=$id ");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","¡Vehículo eliminado correctamente!");
        } else {
            return back() ->with("incorrecto","Error al eliminar un vehículo, por favor verifique la información.");
        }
        
       
    }

}
