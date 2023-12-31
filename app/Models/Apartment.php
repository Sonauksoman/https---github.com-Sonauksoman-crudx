<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Cart;

class Apartment extends Model
{
    use HasFactory;
    protected $table="apartments";
    public function carts()
    {
        return $this->hasMany(Cart::class,'apartment_id','apartment_id');
    }
  
}
