<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function carts()
    {
        return $this->belongsTo(Cart::class);
    }

    public function histories()
    {
        return $this->belongsTo(History::class);
    }
}
