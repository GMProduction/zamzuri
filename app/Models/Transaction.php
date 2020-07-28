<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //

    public function cart()
    {
        return $this->hasMany(Cart::class, 'transactions_id');
    }

    public function payment(){
        return $this->hasMany(Payment::class, 'transactions_id');
    }

//    public function user(){
//        return $this->hasOneThrough(Cart::class, User::class,'id', 'user_id');
//    }


}
