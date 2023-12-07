<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CustomerController extends Controller
{

   public function create(){
        $datos=DB::select("select * from customer");
        return view("customers")->with("datos", $datos);
    }

}
