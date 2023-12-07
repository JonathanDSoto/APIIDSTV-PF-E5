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
}
