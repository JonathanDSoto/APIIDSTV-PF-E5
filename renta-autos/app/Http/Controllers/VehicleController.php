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
            $sql = DB::insert(" insert into vehicle(lisense_plate,brand,color,category,aviavle)values(?,?,?,?,?) ", [
                $request->lisense_plate,
                $request->brand,
                $request->color,
                $request->category,
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

}
