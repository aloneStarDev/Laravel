<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    //after create tariff remove 'months' from $fillable
    protected $fillable = [
        'months', 'price' , 'addOnMember'
    ];
    public static $val = [ 1=>1, 2=>3 ,3=>6, 4=>12];
}
