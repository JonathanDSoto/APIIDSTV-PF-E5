<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CustomerController extends Controller
{

   public function index(){
        $datos=DB::select("select * from customer");
        return view("customers")->with("datos", $datos);
    }

    public function add(Request $request)
    {
        try {
            $sql = DB::insert(" insert into customer(name,first_name,last_name,phone,email)values(?,?,?,?,?) ", [
                $request->name,
                $request->first_name,
                $request->last_name,
                $request->phone,
                $request->email,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","¡Cliente registrado correctamente!");
        } else {
            return back() ->with("incorrecto","Error al registrar un cliente, por favor verifique la información.");
        }
    }

    public function update(Request $request)
    {
        try {
            $sql = DB::update(" update customer set name=?,first_name=?,last_name=?,phone=?,email=? where id=? ", [
                $request->name,
                $request->first_name,
                $request->last_name,
                $request->phone,
                $request->email,
                $request->id,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","¡Datos de cliente editados correctamente!");
        } else {
            return back() ->with("incorrecto","Error al editar un cliente, por favor verifique la información.");
        }
    }

    public function delete($id)
    {
        try {
            $sql = DB::delete(" delete from customer where id=$id ");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","¡Cliente eliminado correctamente!");
        } else {
            return back() ->with("incorrecto","Error al eliminar un cliente, por favor verifique la información.");
        }
        
       
    }



}
