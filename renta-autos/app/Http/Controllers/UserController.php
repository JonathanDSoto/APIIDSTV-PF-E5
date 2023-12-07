<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function create(){
        $datos=DB::select("select * from user");
        return view("users")->with("datos", $datos);
    }

    public function add(Request $request)
    {
        try {
            $sql = DB::insert(" insert into user(name,first_name,last_name,phone,email,password)values(?,?,?,?,?,?) ", [
                $request->name,
                $request->first_name,
                $request->last_name,
                $request->phone,
                $request->email,
                $request->password,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","¡Usuario registrado correctamente!");
        } else {
            return back() ->with("incorrecto","Error al registrar un usuario, por favor verifique la información.");
        }
        
       
    }

    public function update(Request $request)
    {
        try {
            $sql = DB::update(" update user set name=?,first_name=?,last_name=?,phone=?,email=?,password=? ", [
                $request->name,
                $request->first_name,
                $request->last_name,
                $request->phone,
                $request->email,
                $request->password,
            ]);
            if ($sql == 0) {
                $sql = 1;
            }
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","¡Datos de usuario editados correctamente!");
        } else {
            return back() ->with("incorrecto","Error al editar un usuario, por favor verifique la información.");
        }
        
       
    }

    public function delete($id)
    {
        try {
            $sql = DB::delete(" delete from user where id=$id ");

        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","¡Usuario eliminados correctamente!");
        } else {
            return back() ->with("incorrecto","Error al eliminar un usuario, por favor verifique la información.");
        }
        
       
    }

  
}
