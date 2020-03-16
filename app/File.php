<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable=['owner','phonenumber','adressPu','adressPv','imgPath','region','visible','enable'];
}
