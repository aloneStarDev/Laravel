<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=['name','lastname','phonenumber','region','adress','subscribtion-time','start-subscribtion','mode','enable','active'];

}
