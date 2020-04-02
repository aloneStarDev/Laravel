<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receive extends Model
{
    protected $fillable = ['name','lastname','phonenumber','address','description','mode','type','buildingType'];
    public static $mode_=[
        1=>"خرید",
        2=>"رهن",
        3=>"اجاره"
    ];
}
