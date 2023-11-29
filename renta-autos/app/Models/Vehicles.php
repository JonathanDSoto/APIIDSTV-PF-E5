<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    protected $fillable = ['placa', 'modelo', 'marca', 'año', 'color'];
    use HasFactory;
}