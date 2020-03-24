<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=[
        'name','lastname','phonenumber','region','address','subscribtion-time','start-subscribtion','mode','enable','active'
    ];

//    protected $fillable=[
//        'name', 'lastname', 'phonenumber', 'region', 'address', 'expire_subscription', 'mode', 'enable', 'active'
//    ];

    //please change customers table , fillable after change commented

    /*public function isSubscribed()
    {
        return $this->expire_subscription > Carbon::now() ? true : false;
    }*/
}
