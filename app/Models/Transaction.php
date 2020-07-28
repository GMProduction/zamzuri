<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}