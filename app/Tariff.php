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
    public static $plan = [ 1=>" 1 ماهه ", 2=>" 3 ماهه " ,3=>" 6 ماهه ", 4=>" 1 ساله "];


}
