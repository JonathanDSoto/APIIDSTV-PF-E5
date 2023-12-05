<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RentalController extends Controller
{
    public function create(){
        $datos=DB::select("select * from rentals");
        return view("rentals")->with("datos", $datos);
    }
}
