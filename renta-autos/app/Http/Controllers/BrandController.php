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
}
