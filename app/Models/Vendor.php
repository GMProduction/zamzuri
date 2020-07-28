<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendors';

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'id');
    }
}
