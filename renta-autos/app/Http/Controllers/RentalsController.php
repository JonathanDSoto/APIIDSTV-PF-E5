<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rentals;
use Illuminate\Http\Request;


class RentalsController extends Controller
{
    public function index()
{
    $rentals = Rentals::all();
    return view('rentals.index', compact('rentals'));
}
    //
}
