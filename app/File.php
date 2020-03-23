<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable=['title','code','rahn','ejare','name','lastname','buildingType','floor','area','age','unit','bedroom','adressPu','adressPv','phonenumber','options','description','userId','visible','deleted'];
}
