<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RentalController extends Controller
{
    public function index(){
        $datos=DB::select("select * from rental");
        return view("rentals")->with("datos", $datos);
    }

    public function add(Request $request)
    {
        try {
            $sql = DB::insert(" insert into rental(name,start_date,end_date,rate,aviavle)values(?,?,?,?,?) ", [
                $request->name,
                $request->start_date,
                $request->end_date,
                $request->rate,
                $request->aviavle,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","¡Renta registrada correctamente!");
        } else {
            return back() ->with("incorrecto","Error al registrar una renta, por favor verifique la información.");
        }
        
       
    }

    public function update(Request $request)
    {
        try {
            $sql = DB::update(" update rental set name=?,start_date=?,end_date=?,rate=?,aviavle=? where id=? ", [
                $request->name,
                $request->start_date,
                $request->end_date,
                $request->rate,
                $request->aviavle,
                $request->id,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","¡Datos de renta editados correctamente!");
        } else {
            return back() ->with("incorrecto","Error al editar una renta, por favor verifique la información.");
        }
        
       
    }

    public function delete($id)
    {
        try {
            $sql = DB::delete(" delete from rental where id=$id ");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","¡Renta eliminada correctamente!");
        } else {
            return back() ->with("incorrecto","Error al eliminar una renta, por favor verifique la información.");
        }
        
       
    }
}
