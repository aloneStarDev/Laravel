<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable=['fileId','name','lastname','phonenumber','addressPu','addressPv','imgPath','region','userId','visible','enable'];
}
