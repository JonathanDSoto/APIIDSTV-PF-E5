<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    public function create(){
        $datos=DB::select("select * from category");
        return view("categories")->with("datos", $datos);
    }
}
