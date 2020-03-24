<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=['name','lastname','phonenumber','region','address','call','users','endSubscribe','enable','active'];

}
