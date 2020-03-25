<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable=['title','code','buy','rahn','ejare','name','lastname','buildingType','region','floor','area','age','unit','bedroom','addressPu','addressPv','phonenumber','options','description','userId','visible','deleted'];
}
