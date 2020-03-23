<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    //after create tariff remove 'months' from $fillable
    protected $fillable = [
        'months', 'price'
    ];
}
