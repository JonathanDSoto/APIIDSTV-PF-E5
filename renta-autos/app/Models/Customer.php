<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'first_name', 'last_name', 'email', 'password', 'phone', 'rentals_id'];

    public function rental()
    {
        return $this->belongsTo(Rental::class, 'rentals_id');
    }
    public function rentals()
    {
        return $this->hasMany(Rental::class, 'customer_id');
    }

}
