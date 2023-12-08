<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    public function index(){
        $datos=DB::select("select * from category");
        return view("categories")->with("datos", $datos);
    }

    public function add(Request $request)
    {
        try {
            $sql = DB::insert(" insert into category(name)values(?) ", [
                $request->name,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","¡Categoria registrada correctamente!");
        } else {
            return back() ->with("incorrecto","Error al registrar una categoría, por favor verifique la información.");
        }
        
       
    }

    public function update(Request $request)
    {
        try {
            $sql = DB::update(" update category set name=? where id=? ", [
                $request->name,
                $request->id,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","¡Datos de categoria editados correctamente!");
        } else {
            return back() ->with("incorrecto","Error al editar una categoria, por favor verifique la información.");
        }
        
       
    }

    public function delete($id)
    {
        try {
            $sql = DB::delete(" delete from category where id=$id ");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","¡Categoria eliminada correctamente!");
        } else {
            return back() ->with("incorrecto","Error al eliminar una categoria, por favor verifique la información.");
        }
        
       
    }
}
