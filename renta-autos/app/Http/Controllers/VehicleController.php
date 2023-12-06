<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    public function create(){
        $datos=DB::select("select * from vehicles");
        return view("vehicles")->with("datos", $datos);
    }
}
