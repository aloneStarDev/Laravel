<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable=['fileId','name','lastname','phonenumber','adressPu','adressPv','imgPath','region','userId','visible','enable'];
}
