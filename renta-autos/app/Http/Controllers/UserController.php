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
}
