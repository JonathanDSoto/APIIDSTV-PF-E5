<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RentalController extends Controller
{
    public function index(){
        $datos=DB::select("select * from rental");
        return view("rentals")->with("datos", $datos);
    }
}
