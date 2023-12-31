<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category', 'vehicles_id'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicles_id');
    }
}
