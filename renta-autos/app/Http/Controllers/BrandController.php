<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BrandController extends Controller
{
    public function index(){
        $datos=DB::select("select * from brand");
        return view("brands")->with("datos", $datos);
    }

    public function add(Request $request)
    {
        try {
            $sql = DB::insert(" insert into brand(name)values(?) ", [
                $request->name,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","¡Marca registrada correctamente!");
        } else {
            return back() ->with("incorrecto","Error al registrar una marca, por favor verifique la información.");
        }
        
       
    }

    public function update(Request $request)
    {
        try {
            $sql = DB::update(" update brand set name=? where id=? ", [
                $request->name,
                $request->id,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","¡Datos de marca editados correctamente!");
        } else {
            return back() ->with("incorrecto","Error al editar una marca, por favor verifique la información.");
        }
        
       
    }

    public function delete($id)
    {
        try {
            $sql = DB::delete(" delete from brand where id=$id ");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","¡Marca eliminada correctamente!");
        } else {
            return back() ->with("incorrecto","Error al eliminar una marca, por favor verifique la información.");
        }
        
       
    }
}
