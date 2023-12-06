<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BrandController extends Controller
{
    public function create(){
        $datos=DB::select("select * from brands");
        return view("brands")->with("datos", $datos);
    }
}
